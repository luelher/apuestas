<?php

/**
 * Pago form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PagoForm extends BasePagoForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'despag'    => new sfWidgetFormInputText(),
      'fechorpag' => new sfWidgetFormDateTime(),
      'codusu'    => new sfWidgetFormInputText(),
      'codforpag' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaPago'), 'add_empty' => false)),
      'numquin'   => new sfWidgetFormInputText(array(),array('onblur' => "$('pago_montot').value=50*this.value")),
      'preuni'    => new sfWidgetFormInputText(array(),array('readonly' => 'true')),
      'montot'    => new sfWidgetFormInputText(array(),array('readonly' => 'true')),
    ));

    $this->setValidators(array(
      'despag'    => new sfValidatorString(array('required' => true)),
      'fechorpag' => new sfValidatorDateTime(array('required' => true)),
      'codusu'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'column' => 'cedusu', 'required' => true)),
      'codforpag' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FormaPago'), 'required' => true)),
      'numquin'   => new sfValidatorInteger(array('required' => true)),
      'preuni'    => new sfValidatorNumber(array('required' => false)),
      'montot'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pago[%s]');

    $this->setDefault('montot', '50');
    $this->setDefault('numquin', '1');
    $this->setDefault('despag', 'Venta de Quiniela');
    $this->setDefault('fechorpag', date('Y-m-d'));

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
  }

  protected function doSave($con = null)
  {
    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $this->updateObject();

    // Obtener el usuario actual
    $ven = 3;
    // -------------------

    $obj = $this->getObject();
    $usu = Doctrine::getTable('Usuarios')->findOneBy('cedusu',$obj->getCodusu());
    if($usu) $obj->setCodusu($usu->getCodusu());
    $obj->setCodven($ven);
    
    $obj->save($con);

    $this->saveQuiniela($obj, $ven);

    // embedded forms
    $this->saveEmbeddedForms($con);
  }

  public function saveQuiniela($obj)
  {
    $quiniela = new Quiniela();
    $quiniela->setFecqui($obj->getFechorpag());
    $quiniela->setTipqui('2');
    $quiniela->setCodven($obj->getCodven());
    $quiniela->setCodpag($obj->getCodforpag());
    $quiniela->setCodusu($obj->getCodusu());
    $quiniela->save();



  }
}
