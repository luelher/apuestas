<?php use_stylesheet('/sfDoctrinePlugin/css/global.css', 'first') ?>
<?php use_stylesheet('/sfDoctrinePlugin/css/default.css', 'first') ?>
<div id="sf_admin_container">
<h1>Paso 1: Seleccione las quinielas a cancelar</h1>

<?php echo form_tag_for($form, 'pagojugador') ?>
  <?php include_partial('list_quinielas', array('form' => $form, 'quinielas' => $quinielas)) ?>
</form>
</div>