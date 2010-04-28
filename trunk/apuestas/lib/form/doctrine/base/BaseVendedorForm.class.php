<?php

/**
 * Vendedor form base class.
 *
 * @method Vendedor getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVendedorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codven' => new sfWidgetFormInputHidden(),
      'logven' => new sfWidgetFormTextarea(),
      'pasven' => new sfWidgetFormTextarea(),
      'desven' => new sfWidgetFormTextarea(),
      'dirven' => new sfWidgetFormTextarea(),
      'telven' => new sfWidgetFormTextarea(),
      'celven' => new sfWidgetFormTextarea(),
      'codban' => new sfWidgetFormTextarea(),
      'numcue' => new sfWidgetFormTextarea(),
      'emaven' => new sfWidgetFormTextarea(),
      'staven' => new sfWidgetFormTextarea(),
      'titcue' => new sfWidgetFormTextarea(),
      'cedven' => new sfWidgetFormTextarea(),
      'tipcue' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codven' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codven', 'required' => false)),
      'logven' => new sfValidatorString(),
      'pasven' => new sfValidatorString(),
      'desven' => new sfValidatorString(array('required' => false)),
      'dirven' => new sfValidatorString(array('required' => false)),
      'telven' => new sfValidatorString(array('required' => false)),
      'celven' => new sfValidatorString(array('required' => false)),
      'codban' => new sfValidatorString(array('required' => false)),
      'numcue' => new sfValidatorString(array('required' => false)),
      'emaven' => new sfValidatorString(array('required' => false)),
      'staven' => new sfValidatorString(array('required' => false)),
      'titcue' => new sfValidatorString(array('required' => false)),
      'cedven' => new sfValidatorString(array('required' => false)),
      'tipcue' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vendedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendedor';
  }

}
