<?php

/**
 * Calendario form base class.
 *
 * @method Calendario getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCalendarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codjue'  => new sfWidgetFormInputHidden(),
      'fecjue'  => new sfWidgetFormDate(),
      'codron'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ronda'), 'add_empty' => false)),
      'codeqp1' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo'), 'add_empty' => false)),
      'codeqp2' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo_2'), 'add_empty' => false)),
      'goles1'  => new sfWidgetFormInputText(),
      'goles2'  => new sfWidgetFormInputText(),
      'indica'  => new sfWidgetFormTextarea(),
      'horjue'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'codjue'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codjue', 'required' => false)),
      'fecjue'  => new sfValidatorDate(),
      'codron'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ronda'))),
      'codeqp1' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo'))),
      'codeqp2' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo_2'))),
      'goles1'  => new sfValidatorNumber(array('required' => false)),
      'goles2'  => new sfValidatorNumber(array('required' => false)),
      'indica'  => new sfValidatorString(array('required' => false)),
      'horjue'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('calendario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Calendario';
  }

}
