<?php

/**
 * FormaPago filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFormaPagoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desforpag' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desforpag' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('forma_pago_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FormaPago';
  }

  public function getFields()
  {
    return array(
      'codforpag' => 'Text',
      'desforpag' => 'Text',
    );
  }
}
