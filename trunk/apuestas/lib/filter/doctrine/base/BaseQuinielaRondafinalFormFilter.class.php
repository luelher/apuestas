<?php

/**
 * QuinielaRondafinal filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseQuinielaRondafinalFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'puntos' => new sfWidgetFormFilterInput(),
      'posic'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'puntos' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'posic'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quiniela_rondafinal_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuinielaRondafinal';
  }

  public function getFields()
  {
    return array(
      'codqui' => 'Text',
      'codeqp' => 'Text',
      'codron' => 'Text',
      'puntos' => 'Number',
      'posic'  => 'Text',
    );
  }
}
