<?php

/**
 * Calendario filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCalendarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecjue'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'codron'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ronda'), 'add_empty' => true)),
      'codeqp1' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo'), 'add_empty' => true)),
      'codeqp2' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo_2'), 'add_empty' => true)),
      'goles1'  => new sfWidgetFormFilterInput(),
      'goles2'  => new sfWidgetFormFilterInput(),
      'indica'  => new sfWidgetFormFilterInput(),
      'horjue'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'fecjue'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'codron'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ronda'), 'column' => 'codron')),
      'codeqp1' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Equipo'), 'column' => 'codeqp')),
      'codeqp2' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Equipo_2'), 'column' => 'codeqp')),
      'goles1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'goles2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'indica'  => new sfValidatorPass(array('required' => false)),
      'horjue'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('calendario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Calendario';
  }

  public function getFields()
  {
    return array(
      'codjue'  => 'Text',
      'fecjue'  => 'Date',
      'codron'  => 'ForeignKey',
      'codeqp1' => 'ForeignKey',
      'codeqp2' => 'ForeignKey',
      'goles1'  => 'Number',
      'goles2'  => 'Number',
      'indica'  => 'Text',
      'horjue'  => 'Date',
    );
  }
}
