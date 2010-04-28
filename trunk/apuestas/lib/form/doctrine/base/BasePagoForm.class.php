<?php

/**
 * Pago form base class.
 *
 * @method Pago getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePagoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codpag'    => new sfWidgetFormInputHidden(),
      'despag'    => new sfWidgetFormTextarea(),
      'fechorpag' => new sfWidgetFormDateTime(),
      'codven'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios_3'), 'add_empty' => true)),
      'codusu'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'codforpag' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaPago'), 'add_empty' => true)),
      'numquin'   => new sfWidgetFormInputText(),
      'preuni'    => new sfWidgetFormInputText(),
      'montot'    => new sfWidgetFormInputText(),
      'moniva'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codpag'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codpag', 'required' => false)),
      'despag'    => new sfValidatorString(array('required' => false)),
      'fechorpag' => new sfValidatorDateTime(array('required' => false)),
      'codven'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios_3'), 'required' => false)),
      'codusu'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'required' => false)),
      'codforpag' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FormaPago'), 'required' => false)),
      'numquin'   => new sfValidatorNumber(array('required' => false)),
      'preuni'    => new sfValidatorNumber(array('required' => false)),
      'montot'    => new sfValidatorNumber(array('required' => false)),
      'moniva'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pago[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pago';
  }

}
