<?php

/**
 * EquipoRonda form base class.
 *
 * @method EquipoRonda getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEquipoRondaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codeqp' => new sfWidgetFormInputHidden(),
      'codron' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'codeqp' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codeqp', 'required' => false)),
      'codron' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codron', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('equipo_ronda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EquipoRonda';
  }

}
