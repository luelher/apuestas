<?php

/**
 * Traspaso form base class.
 *
 * @method Traspaso getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTraspasoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codtra'    => new sfWidgetFormInputHidden(),
      'codusuold' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios_3'), 'add_empty' => true)),
      'codusunew' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'fectra'    => new sfWidgetFormDateTime(),
      'codqui'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Quiniela'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'codtra'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codtra', 'required' => false)),
      'codusuold' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios_3'), 'required' => false)),
      'codusunew' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'required' => false)),
      'fectra'    => new sfValidatorDateTime(array('required' => false)),
      'codqui'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Quiniela'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('traspaso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Traspaso';
  }

}
