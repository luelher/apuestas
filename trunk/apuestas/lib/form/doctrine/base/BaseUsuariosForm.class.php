<?php

/**
 * Usuarios form base class.
 *
 * @method Usuarios getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codusu' => new sfWidgetFormInputHidden(),
      'logusu' => new sfWidgetFormTextarea(),
      'pasusu' => new sfWidgetFormTextarea(),
      'tipusu' => new sfWidgetFormTextarea(),
      'desusu' => new sfWidgetFormTextarea(),
      'dirusu' => new sfWidgetFormTextarea(),
      'telusu' => new sfWidgetFormTextarea(),
      'celusu' => new sfWidgetFormTextarea(),
      'codciu' => new sfWidgetFormTextarea(),
      'codban' => new sfWidgetFormTextarea(),
      'numcue' => new sfWidgetFormTextarea(),
      'emausu' => new sfWidgetFormTextarea(),
      'numtar' => new sfWidgetFormTextarea(),
      'tiptar' => new sfWidgetFormTextarea(),
      'fecven' => new sfWidgetFormDate(),
      'stausu' => new sfWidgetFormTextarea(),
      'titcue' => new sfWidgetFormTextarea(),
      'codref' => new sfWidgetFormTextarea(),
      'cedusu' => new sfWidgetFormTextarea(),
      'tipcue' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codusu' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codusu', 'required' => false)),
      'logusu' => new sfValidatorString(),
      'pasusu' => new sfValidatorString(),
      'tipusu' => new sfValidatorString(array('required' => false)),
      'desusu' => new sfValidatorString(array('required' => false)),
      'dirusu' => new sfValidatorString(array('required' => false)),
      'telusu' => new sfValidatorString(array('required' => false)),
      'celusu' => new sfValidatorString(array('required' => false)),
      'codciu' => new sfValidatorString(array('required' => false)),
      'codban' => new sfValidatorString(array('required' => false)),
      'numcue' => new sfValidatorString(array('required' => false)),
      'emausu' => new sfValidatorString(array('required' => false)),
      'numtar' => new sfValidatorString(array('required' => false)),
      'tiptar' => new sfValidatorString(array('required' => false)),
      'fecven' => new sfValidatorDate(array('required' => false)),
      'stausu' => new sfValidatorString(array('required' => false)),
      'titcue' => new sfValidatorString(array('required' => false)),
      'codref' => new sfValidatorString(array('required' => false)),
      'cedusu' => new sfValidatorString(array('required' => false)),
      'tipcue' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

}
