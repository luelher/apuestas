<?php use_helper('Javascript', 'I18N'); ?>

<div>
  <label for="deposito_lisqui"><?php echo __('Cedula del Usuario') ?></label>
  <div class="content">
    <div id="div_list_quinielas">
      <?php echo tag('form', array('method'=>"post", 'action'=>url_for('regpagjug/new') )) ?>
      <?php echo tag('input', array('id' => 'cedusu', 'name' => 'cedusu')) ?>
      <?php echo tag('input', array('type' => 'submit')) ?>
      </form>
    </div>
  </div>
</div>
