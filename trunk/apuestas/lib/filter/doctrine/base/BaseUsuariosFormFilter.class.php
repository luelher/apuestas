<?php

/**
 * Usuarios filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuariosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'logusu' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pasusu' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipusu' => new sfWidgetFormFilterInput(),
      'desusu' => new sfWidgetFormFilterInput(),
      'dirusu' => new sfWidgetFormFilterInput(),
      'telusu' => new sfWidgetFormFilterInput(),
      'celusu' => new sfWidgetFormFilterInput(),
      'codciu' => new sfWidgetFormFilterInput(),
      'codban' => new sfWidgetFormFilterInput(),
      'numcue' => new sfWidgetFormFilterInput(),
      'emausu' => new sfWidgetFormFilterInput(),
      'numtar' => new sfWidgetFormFilterInput(),
      'tiptar' => new sfWidgetFormFilterInput(),
      'fecven' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'stausu' => new sfWidgetFormFilterInput(),
      'titcue' => new sfWidgetFormFilterInput(),
      'codref' => new sfWidgetFormFilterInput(),
      'cedusu' => new sfWidgetFormFilterInput(),
      'tipcue' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'logusu' => new sfValidatorPass(array('required' => false)),
      'pasusu' => new sfValidatorPass(array('required' => false)),
      'tipusu' => new sfValidatorPass(array('required' => false)),
      'desusu' => new sfValidatorPass(array('required' => false)),
      'dirusu' => new sfValidatorPass(array('required' => false)),
      'telusu' => new sfValidatorPass(array('required' => false)),
      'celusu' => new sfValidatorPass(array('required' => false)),
      'codciu' => new sfValidatorPass(array('required' => false)),
      'codban' => new sfValidatorPass(array('required' => false)),
      'numcue' => new sfValidatorPass(array('required' => false)),
      'emausu' => new sfValidatorPass(array('required' => false)),
      'numtar' => new sfValidatorPass(array('required' => false)),
      'tiptar' => new sfValidatorPass(array('required' => false)),
      'fecven' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'stausu' => new sfValidatorPass(array('required' => false)),
      'titcue' => new sfValidatorPass(array('required' => false)),
      'codref' => new sfValidatorPass(array('required' => false)),
      'cedusu' => new sfValidatorPass(array('required' => false)),
      'tipcue' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

  public function getFields()
  {
    return array(
      'codusu' => 'Text',
      'logusu' => 'Text',
      'pasusu' => 'Text',
      'tipusu' => 'Text',
      'desusu' => 'Text',
      'dirusu' => 'Text',
      'telusu' => 'Text',
      'celusu' => 'Text',
      'codciu' => 'Text',
      'codban' => 'Text',
      'numcue' => 'Text',
      'emausu' => 'Text',
      'numtar' => 'Text',
      'tiptar' => 'Text',
      'fecven' => 'Date',
      'stausu' => 'Text',
      'titcue' => 'Text',
      'codref' => 'Text',
      'cedusu' => 'Text',
      'tipcue' => 'Text',
    );
  }
}
