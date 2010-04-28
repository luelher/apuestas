<?php

/**
 * FormaPago form base class.
 *
 * @method FormaPago getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFormaPagoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codforpag' => new sfWidgetFormInputHidden(),
      'desforpag' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codforpag' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codforpag', 'required' => false)),
      'desforpag' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('forma_pago[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FormaPago';
  }

}
