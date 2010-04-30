<?php

/**
 * DepositoQuiniela form base class.
 *
 * @method DepositoQuiniela getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDepositoQuinielaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'coddep' => new sfWidgetFormInputHidden(),
      'codqui' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'coddep' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'coddep', 'required' => false)),
      'codqui' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codqui', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('deposito_quiniela[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DepositoQuiniela';
  }

}
