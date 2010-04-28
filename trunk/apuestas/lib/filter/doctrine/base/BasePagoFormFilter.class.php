<?php

/**
 * Pago filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePagoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'despag'    => new sfWidgetFormFilterInput(),
      'fechorpag' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'codven'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios_3'), 'add_empty' => true)),
      'codusu'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'codforpag' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaPago'), 'add_empty' => true)),
      'numquin'   => new sfWidgetFormFilterInput(),
      'preuni'    => new sfWidgetFormFilterInput(),
      'montot'    => new sfWidgetFormFilterInput(),
      'moniva'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'despag'    => new sfValidatorPass(array('required' => false)),
      'fechorpag' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'codven'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuarios_3'), 'column' => 'codusu')),
      'codusu'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuarios'), 'column' => 'codusu')),
      'codforpag' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FormaPago'), 'column' => 'codforpag')),
      'numquin'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preuni'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montot'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moniva'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('pago_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pago';
  }

  public function getFields()
  {
    return array(
      'codpag'    => 'Text',
      'despag'    => 'Text',
      'fechorpag' => 'Date',
      'codven'    => 'ForeignKey',
      'codusu'    => 'ForeignKey',
      'codforpag' => 'ForeignKey',
      'numquin'   => 'Number',
      'preuni'    => 'Number',
      'montot'    => 'Number',
      'moniva'    => 'Number',
    );
  }
}
