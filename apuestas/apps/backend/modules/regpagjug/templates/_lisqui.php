<?php use_helper('Javascript', 'I18N'); ?>

<div>
  <label for="deposito_lisqui"><?php echo __('Quinielas a Cancelar') ?></label>
  <div class="content">
    <div id="div_list_quinielas">
      <?php include_partial('lista', array('objs' => $form->getQuinielas(), 'fields' => array('codqui', 'disfecqui', 'destipqui'), 'labels' => array('Codigo', 'Fecha Creación', 'Tipo') , 'options' => array('check' => true, 'form' => $form->getName(), 'list' => 'list_quinielas', 'delete' => false , 'delete_action' => '', 'update' => ''))) ?>
    </div>
  </div>
</div>
