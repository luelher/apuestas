<?php

/**
 * Ronda filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRondaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desron' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desron' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ronda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ronda';
  }

  public function getFields()
  {
    return array(
      'codron' => 'Text',
      'desron' => 'Text',
    );
  }
}
