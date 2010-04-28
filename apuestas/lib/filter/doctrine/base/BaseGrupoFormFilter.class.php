<?php

/**
 * Grupo filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGrupoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desgru' => new sfWidgetFormFilterInput(),
      'login'  => new sfWidgetFormFilterInput(),
      'clave'  => new sfWidgetFormFilterInput(),
      'codusu' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desgru' => new sfValidatorPass(array('required' => false)),
      'login'  => new sfValidatorPass(array('required' => false)),
      'clave'  => new sfValidatorPass(array('required' => false)),
      'codusu' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grupo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Grupo';
  }

  public function getFields()
  {
    return array(
      'codgru' => 'Text',
      'desgru' => 'Text',
      'login'  => 'Text',
      'clave'  => 'Text',
      'codusu' => 'Text',
    );
  }
}
