<?php

/**
 * Quiniela filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseQuinielaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecqui'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tipqui'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codgru'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Grupo'), 'add_empty' => true)),
      'codven'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vendedor'), 'add_empty' => true)),
      'puntos'     => new sfWidgetFormFilterInput(),
      'forpag'     => new sfWidgetFormFilterInput(),
      'codusu'     => new sfWidgetFormFilterInput(),
      'numlidgol'  => new sfWidgetFormFilterInput(),
      'goleqp1fin' => new sfWidgetFormFilterInput(),
      'goleqp2fin' => new sfWidgetFormFilterInput(),
      'codpag'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fecqui'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'tipqui'     => new sfValidatorPass(array('required' => false)),
      'codgru'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Grupo'), 'column' => 'codgru')),
      'codven'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vendedor'), 'column' => 'codven')),
      'puntos'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'forpag'     => new sfValidatorPass(array('required' => false)),
      'codusu'     => new sfValidatorPass(array('required' => false)),
      'numlidgol'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'goleqp1fin' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'goleqp2fin' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codpag'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quiniela_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quiniela';
  }

  public function getFields()
  {
    return array(
      'codqui'     => 'Text',
      'fecqui'     => 'Date',
      'tipqui'     => 'Text',
      'codgru'     => 'ForeignKey',
      'codven'     => 'ForeignKey',
      'puntos'     => 'Number',
      'forpag'     => 'Text',
      'codusu'     => 'Text',
      'numlidgol'  => 'Number',
      'goleqp1fin' => 'Number',
      'goleqp2fin' => 'Number',
      'codpag'     => 'Text',
    );
  }
}
