<?php

/**
 * Equipo filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEquipoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'deseqp' => new sfWidgetFormFilterInput(),
      'grupo'  => new sfWidgetFormFilterInput(),
      'abreqp' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'deseqp' => new sfValidatorPass(array('required' => false)),
      'grupo'  => new sfValidatorPass(array('required' => false)),
      'abreqp' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('equipo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo';
  }

  public function getFields()
  {
    return array(
      'codeqp' => 'Text',
      'deseqp' => 'Text',
      'grupo'  => 'Text',
      'abreqp' => 'Text',
    );
  }
}
