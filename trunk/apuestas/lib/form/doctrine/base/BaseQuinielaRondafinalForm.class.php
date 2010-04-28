<?php

/**
 * QuinielaRondafinal form base class.
 *
 * @method QuinielaRondafinal getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseQuinielaRondafinalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codqui' => new sfWidgetFormInputHidden(),
      'codeqp' => new sfWidgetFormInputHidden(),
      'codron' => new sfWidgetFormInputHidden(),
      'puntos' => new sfWidgetFormInputText(),
      'posic'  => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codqui' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codqui', 'required' => false)),
      'codeqp' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codeqp', 'required' => false)),
      'codron' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codron', 'required' => false)),
      'puntos' => new sfValidatorNumber(array('required' => false)),
      'posic'  => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('quiniela_rondafinal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuinielaRondafinal';
  }

}
