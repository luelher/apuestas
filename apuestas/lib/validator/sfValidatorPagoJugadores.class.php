<?php 
class sfValidatorPagoJugadores extends sfValidatorBase
{
  protected function configure($options = array(), $messages = array())
  {
  }

  protected function doClean($value)
  {

    $list_quinielas = $value['list_quinielas'];
    $quinielas = array();
    
    foreach($list_quinielas as $qui){
      if(isset($qui['check'])) $quinielas[] = $qui;
    }


    if(count($quinielas)==0) throw new sfValidatorError($this, 'Debe Seleccionar al menos una quiniela a cancelar', array('value' => $value));

    if((count($quinielas)*50)!=$value['mondep']) throw new sfValidatorError($this, 'La cantidad Depositada no concuerda con la cantidad de quinielas seleccionadas', array('value' => $value));

    $value['stadep'] = 'N';

    // Obtener de forma dinámica
    // -------------------------
    $id_usu = '2';
    // -------------------------

    $value['codusu'] = $id_usu;

    return $value;
    
  }

  public function isEmpty($value)
  {
    return false;
  }
}
