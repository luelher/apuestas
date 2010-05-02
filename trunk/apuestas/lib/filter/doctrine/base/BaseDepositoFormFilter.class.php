<?php

/**
 * Deposito filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDepositoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numdep' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecdep' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'mondep' => new sfWidgetFormFilterInput(),
      'nomdep' => new sfWidgetFormFilterInput(),
      'ceddep' => new sfWidgetFormFilterInput(),
      'codusu' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'tipdep' => new sfWidgetFormFilterInput(),
      'stadep' => new sfWidgetFormFilterInput(),
      'codban' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Banco'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'numdep' => new sfValidatorPass(array('required' => false)),
      'fecdep' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'mondep' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nomdep' => new sfValidatorPass(array('required' => false)),
      'ceddep' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codusu' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuarios'), 'column' => 'codusu')),
      'tipdep' => new sfValidatorPass(array('required' => false)),
      'stadep' => new sfValidatorPass(array('required' => false)),
      'codban' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Banco'), 'column' => 'codban')),
    ));

    $this->widgetSchema->setNameFormat('deposito_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Deposito';
  }

  public function getFields()
  {
    return array(
      'coddep' => 'Number',
      'numdep' => 'Text',
      'fecdep' => 'Date',
      'mondep' => 'Number',
      'nomdep' => 'Text',
      'ceddep' => 'Number',
      'codusu' => 'ForeignKey',
      'tipdep' => 'Text',
      'stadep' => 'Text',
      'codban' => 'ForeignKey',
    );
  }
}
