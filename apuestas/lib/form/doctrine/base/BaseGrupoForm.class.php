<?php

/**
 * Grupo form base class.
 *
 * @method Grupo getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGrupoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codgru' => new sfWidgetFormInputHidden(),
      'desgru' => new sfWidgetFormTextarea(),
      'login'  => new sfWidgetFormTextarea(),
      'clave'  => new sfWidgetFormTextarea(),
      'codusu' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codgru' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codgru', 'required' => false)),
      'desgru' => new sfValidatorString(array('required' => false)),
      'login'  => new sfValidatorString(array('required' => false)),
      'clave'  => new sfValidatorString(array('required' => false)),
      'codusu' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grupo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Grupo';
  }

}
