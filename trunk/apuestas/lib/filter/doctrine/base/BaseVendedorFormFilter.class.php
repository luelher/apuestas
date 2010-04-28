<?php

/**
 * Vendedor filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVendedorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'logven' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pasven' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desven' => new sfWidgetFormFilterInput(),
      'dirven' => new sfWidgetFormFilterInput(),
      'telven' => new sfWidgetFormFilterInput(),
      'celven' => new sfWidgetFormFilterInput(),
      'codban' => new sfWidgetFormFilterInput(),
      'numcue' => new sfWidgetFormFilterInput(),
      'emaven' => new sfWidgetFormFilterInput(),
      'staven' => new sfWidgetFormFilterInput(),
      'titcue' => new sfWidgetFormFilterInput(),
      'cedven' => new sfWidgetFormFilterInput(),
      'tipcue' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'logven' => new sfValidatorPass(array('required' => false)),
      'pasven' => new sfValidatorPass(array('required' => false)),
      'desven' => new sfValidatorPass(array('required' => false)),
      'dirven' => new sfValidatorPass(array('required' => false)),
      'telven' => new sfValidatorPass(array('required' => false)),
      'celven' => new sfValidatorPass(array('required' => false)),
      'codban' => new sfValidatorPass(array('required' => false)),
      'numcue' => new sfValidatorPass(array('required' => false)),
      'emaven' => new sfValidatorPass(array('required' => false)),
      'staven' => new sfValidatorPass(array('required' => false)),
      'titcue' => new sfValidatorPass(array('required' => false)),
      'cedven' => new sfValidatorPass(array('required' => false)),
      'tipcue' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vendedor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendedor';
  }

  public function getFields()
  {
    return array(
      'codven' => 'Text',
      'logven' => 'Text',
      'pasven' => 'Text',
      'desven' => 'Text',
      'dirven' => 'Text',
      'telven' => 'Text',
      'celven' => 'Text',
      'codban' => 'Text',
      'numcue' => 'Text',
      'emaven' => 'Text',
      'staven' => 'Text',
      'titcue' => 'Text',
      'cedven' => 'Text',
      'tipcue' => 'Text',
    );
  }
}
