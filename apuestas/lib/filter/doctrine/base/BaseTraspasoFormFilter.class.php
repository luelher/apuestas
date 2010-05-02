<?php

/**
 * Traspaso filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTraspasoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codusuold' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios_3'), 'add_empty' => true)),
      'codusunew' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'fectra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'codqui'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Quiniela'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'codusuold' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuarios_3'), 'column' => 'codusu')),
      'codusunew' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuarios'), 'column' => 'codusu')),
      'fectra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'codqui'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Quiniela'), 'column' => 'codqui')),
    ));

    $this->widgetSchema->setNameFormat('traspaso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Traspaso';
  }

  public function getFields()
  {
    return array(
      'codtra'    => 'Number',
      'codusuold' => 'ForeignKey',
      'codusunew' => 'ForeignKey',
      'fectra'    => 'Date',
      'codqui'    => 'ForeignKey',
    );
  }
}
