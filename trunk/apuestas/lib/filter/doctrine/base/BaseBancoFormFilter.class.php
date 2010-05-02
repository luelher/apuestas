<?php

/**
 * Banco filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBancoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desban' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desban' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banco_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banco';
  }

  public function getFields()
  {
    return array(
      'codban' => 'Number',
      'desban' => 'Text',
    );
  }
}
