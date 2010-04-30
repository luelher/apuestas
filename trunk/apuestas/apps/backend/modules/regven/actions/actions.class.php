<?php

require_once dirname(__FILE__).'/../lib/regvenGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/regvenGeneratorHelper.class.php';

/**
 * regven actions.
 *
 * @package    sf_sandbox
 * @subpackage regven
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class regvenActions extends autoRegvenActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->redirect('regven/new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->redirect('regven/new');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->redirect('regven/new');
  }

  public function executeFilter(sfWebRequest $request)
  {
    $this->redirect('regven/new');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->pago = $this->form->getObject();
  }
}
