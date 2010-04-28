<?php

/**
 * Equipo form base class.
 *
 * @method Equipo getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEquipoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codeqp' => new sfWidgetFormInputHidden(),
      'deseqp' => new sfWidgetFormTextarea(),
      'grupo'  => new sfWidgetFormTextarea(),
      'abreqp' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codeqp' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codeqp', 'required' => false)),
      'deseqp' => new sfValidatorString(array('required' => false)),
      'grupo'  => new sfValidatorString(array('required' => false)),
      'abreqp' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('equipo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo';
  }

}
