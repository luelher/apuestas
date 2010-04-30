<?php

/**
 * Deposito form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DepositoForm extends BaseDepositoForm
{
  protected $quinielas = array();

  public function configure()
  {
    $this->setWidgets(array(
      'coddep' => new sfWidgetFormInputHidden(),
      'numdep' => new sfWidgetFormInput(),
      'fecdep' => new sfWidgetFormDateTime(),
      'mondep' => new sfWidgetFormInput(),
      'nomdep' => new sfWidgetFormInput(),
      'ceddep' => new sfWidgetFormInput(),
      'codusu' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'tipdep' => new sfWidgetFormChoice(array('choices' => array('D' => 'Depósito', 'T' => 'Transferencia'))),
      'stadep' => new sfWidgetFormTextarea(),
      'codban' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Banco'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'coddep' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'coddep', 'required' => false)),
      'fecdep' => new sfValidatorDateTime(array('required' => true)),
      'mondep' => new sfValidatorNumber(array('required' => true)),
      'nomdep' => new sfValidatorString(array('required' => true)),
      'numdep' => new sfValidatorString(array('required' => true)),
      'ceddep' => new sfValidatorInteger(array('required' => true)),
      'codusu' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'column' => 'cedusu', 'required' => false)),
      'tipdep' => new sfValidatorString(array('required' => true)),
      'stadep' => new sfValidatorString(array('required' => false)),
      'codban' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Banco'), 'required' => true)),
    ));

    $this->validatorSchema->setPostValidator(new sfValidatorPagoJugadores());


    $this->widgetSchema->setNameFormat('deposito[%s]');

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);
    
    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }

  public function setQuinielas($q)
  {
    $this->quinielas = $q;
  }

  public function getQuinielas() {
    return $this->quinielas;
  }

  protected function doSave($con = null)
  {
    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $this->updateObject();

    $this->getObject()->save($con);

    $this->saveDepositoQuiniela();

    // embedded forms
    $this->saveEmbeddedForms($con);
  }

  private function saveDepositoQuiniela()
  {
    $list_quinielas = $this->taintedValues['list_quinielas'];
    $quinielas = array();

    foreach($list_quinielas as $qui){
      if(isset($qui['check'])) $quinielas[] = $qui;
    }

    foreach($quinielas as $qui){

      $quiniela = Doctrine::getTable('Quiniela')->findOneBy('codqui', $qui['id']);
      if($quiniela){
        $depqui = new DepositoQuiniela();

        $depqui->setCoddep($this->getObject()->getCoddep());
        $depqui->setCodqui($quiniela->getCodqui());
        $depqui->save();
      }
      
    }
  }

}
