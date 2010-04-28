<?php use_helper('Javascript', 'I18N'); ?>
<div class="sf_admin_form_row">
  <?php echo __('Detalle Quinielas') ?>
  <div class="content">
    <div id="div_list_quinielas">
      <?php include_partial('lista', array('objs' => $quinielas, 'fields' => array('codqui', 'fecqui', 'tipqui', 'numlidgol', 'goleqp1fin', 'goleqp2fin'), 'labels' => array('Codigo', 'Fecha', 'Tipo', 'Nro. Goles Lider', 'Goles Equipo 1 Final', 'Goles Equipo 2 Final') , 'options' => array('form' => $form->getName(), 'list' => 'list_quinielas', 'delete' => false , 'delete_action' => '', 'update' => ''))) ?>
    </div>
  </div>
</div>
