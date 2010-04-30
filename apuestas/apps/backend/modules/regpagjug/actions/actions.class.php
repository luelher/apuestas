<?php

require_once dirname(__FILE__).'/../lib/regpagjugGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/regpagjugGeneratorHelper.class.php';

/**
 * regpagjug actions.
 *
 * @package    sf_sandbox
 * @subpackage regpagjug
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class regpagjugActions extends autoRegpagjugActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->redirect('regpagjug/new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->redirect('regpagjug/new');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->redirect('regpagjug/new');
  }

  public function executeFilter(sfWebRequest $request)
  {
    $this->redirect('regpagjug/new');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->deposito = $this->form->getObject();

    $this->renderListQuinielas();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->deposito = $this->form->getObject();

    $this->processForm($request, $this->form);
    $this->renderListQuinielas();
    $this->setTemplate('new');
  }

  private function renderListQuinielas() {
    $id_usu = '14';

    $quinielas = Doctrine::getTable('Quiniela')->findByDql("codusu= ? AND tipqui= ? AND codpag isnull", array($id_usu,'1'));

    $this->form->setQuinielas($quinielas);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'Pago Creado Satisfactoriamente.' : 'Pago Actualizado Satisfactoriamente.';

      try {
        $deposito = $form->save();
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $deposito)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect('@deposito_regpagjug_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'deposito_regpagjug_edit', 'sf_subject' => $deposito));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

}
