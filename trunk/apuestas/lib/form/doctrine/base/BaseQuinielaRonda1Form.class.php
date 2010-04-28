<?php

/**
 * QuinielaRonda1 form base class.
 *
 * @method QuinielaRonda1 getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseQuinielaRonda1Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codqui' => new sfWidgetFormInputHidden(),
      'codjue' => new sfWidgetFormInputHidden(),
      'goles1' => new sfWidgetFormInputText(),
      'goles2' => new sfWidgetFormInputText(),
      'puntos' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codqui' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codqui', 'required' => false)),
      'codjue' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codjue', 'required' => false)),
      'goles1' => new sfValidatorNumber(array('required' => false)),
      'goles2' => new sfValidatorNumber(array('required' => false)),
      'puntos' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quiniela_ronda1[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuinielaRonda1';
  }

}
