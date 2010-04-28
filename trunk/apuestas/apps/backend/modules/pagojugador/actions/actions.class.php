<?php

/**
 * pagojugador actions.
 *
 * @package    sf_sandbox
 * @subpackage pagojugador
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pagojugadorActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new PagoForm();
    $this->quinielas = Doctrine::getTable('Quiniela')->findByCodusu('14');
  }
}
