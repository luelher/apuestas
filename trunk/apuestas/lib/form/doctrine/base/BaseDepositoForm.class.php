<?php

/**
 * Deposito form base class.
 *
 * @method Deposito getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDepositoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'coddep' => new sfWidgetFormInputHidden(),
      'numdep' => new sfWidgetFormTextarea(),
      'fecdep' => new sfWidgetFormDateTime(),
      'mondep' => new sfWidgetFormInputText(),
      'nomdep' => new sfWidgetFormTextarea(),
      'ceddep' => new sfWidgetFormInputText(),
      'codusu' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'tipdep' => new sfWidgetFormTextarea(),
      'stadep' => new sfWidgetFormTextarea(),
      'codban' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Banco'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'coddep' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'coddep', 'required' => false)),
      'numdep' => new sfValidatorString(),
      'fecdep' => new sfValidatorDateTime(array('required' => false)),
      'mondep' => new sfValidatorNumber(array('required' => false)),
      'nomdep' => new sfValidatorString(array('required' => false)),
      'ceddep' => new sfValidatorInteger(array('required' => false)),
      'codusu' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'required' => false)),
      'tipdep' => new sfValidatorString(array('required' => false)),
      'stadep' => new sfValidatorString(array('required' => false)),
      'codban' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Banco'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('deposito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Deposito';
  }

}
