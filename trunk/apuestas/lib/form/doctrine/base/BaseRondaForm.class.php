<?php

/**
 * Ronda form base class.
 *
 * @method Ronda getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRondaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codron' => new sfWidgetFormInputHidden(),
      'desron' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codron' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codron', 'required' => false)),
      'desron' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ronda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ronda';
  }

}
