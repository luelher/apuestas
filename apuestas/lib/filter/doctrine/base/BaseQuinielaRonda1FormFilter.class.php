<?php

/**
 * QuinielaRonda1 filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseQuinielaRonda1FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'goles1' => new sfWidgetFormFilterInput(),
      'goles2' => new sfWidgetFormFilterInput(),
      'puntos' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'goles1' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'goles2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'puntos' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('quiniela_ronda1_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuinielaRonda1';
  }

  public function getFields()
  {
    return array(
      'codqui' => 'Text',
      'codjue' => 'Text',
      'goles1' => 'Number',
      'goles2' => 'Number',
      'puntos' => 'Number',
    );
  }
}
