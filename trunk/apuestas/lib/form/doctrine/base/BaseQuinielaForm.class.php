<?php

/**
 * Quiniela form base class.
 *
 * @method Quiniela getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseQuinielaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codqui'     => new sfWidgetFormInputHidden(),
      'fecqui'     => new sfWidgetFormDate(),
      'tipqui'     => new sfWidgetFormTextarea(),
      'codgru'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Grupo'), 'add_empty' => true)),
      'codven'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vendedor'), 'add_empty' => true)),
      'puntos'     => new sfWidgetFormInputText(),
      'forpag'     => new sfWidgetFormTextarea(),
      'codusu'     => new sfWidgetFormTextarea(),
      'numlidgol'  => new sfWidgetFormInputText(),
      'goleqp1fin' => new sfWidgetFormInputText(),
      'goleqp2fin' => new sfWidgetFormInputText(),
      'codpag'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codqui'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codqui', 'required' => false)),
      'fecqui'     => new sfValidatorDate(),
      'tipqui'     => new sfValidatorString(),
      'codgru'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Grupo'), 'required' => false)),
      'codven'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vendedor'), 'required' => false)),
      'puntos'     => new sfValidatorNumber(array('required' => false)),
      'forpag'     => new sfValidatorString(array('required' => false)),
      'codusu'     => new sfValidatorString(array('required' => false)),
      'numlidgol'  => new sfValidatorNumber(array('required' => false)),
      'goleqp1fin' => new sfValidatorNumber(array('required' => false)),
      'goleqp2fin' => new sfValidatorNumber(array('required' => false)),
      'codpag'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quiniela[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quiniela';
  }

}
