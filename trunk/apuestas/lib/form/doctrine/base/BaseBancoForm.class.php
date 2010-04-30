<?php

/**
 * Banco form base class.
 *
 * @method Banco getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBancoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codban' => new sfWidgetFormInputHidden(),
      'desban' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codban' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codban', 'required' => false)),
      'desban' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banco[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banco';
  }

}
