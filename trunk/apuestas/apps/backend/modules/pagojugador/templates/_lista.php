<?php use_helper('Javascript'); ?>

    <div class="sf_admin_list">
      <table cellspacing="0" <?php if(isset($options) && $options['list']) echo 'id="'.$options['list'].'"' ?> >
        <thead>
          <tr>
            <?php foreach($labels as $index => $label) : ?>
              <th class="sf_admin_text"><?php echo $label  ?></th>
            <?php endforeach; ?>
            <th id="sf_admin_list_th_actions">Acciones</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th colspan="7">Total <?php echo count($objs) ?> </th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach($objs as $iobj => $obj) : ?>
          <tr class="sf_admin_row <?php if($iobj % 2 == 0) echo 'odd'; else echo 'even' ?>">
            <?php foreach($fields as $index => $field) : ?>
              <?php $campo = 'get'.ucfirst($field); $edit = 'display:none'; $isedit = false; ?>
              <td class="sf_admin_text">
                <?php 
                        if(isset($options['edit'])) {
                            foreach($options['edit'] as $f){
                              if($field==$f){
                                $edit = '';
                                $isedit=true;
                              }
                            }
                         }
                     ?>
                <?php echo tag('input', array( 'style' => $edit , 'value' => $obj->$campo(), 'name' => (((isset($options) && $options['form']) ? $options['form'] : '').'['.((isset($options) && $options['list']) ? $options['list'] : '').']['.$iobj.']['.$field.']'),'id' => ((isset($options) && $options['form']) ? $options['form'] : '').'_'.((isset($options) && $options['list']) ? $options['list'] : '').'_'.$iobj.'_'.$field)) ?>
                <?php if(!$isedit) echo $obj->$campo() ?>
                <?php if($index==0) : ?>
                  <?php echo tag('input', array( 'style' => 'display:none', 'value' => $obj->getPrimaryKey(), 'name' => (((isset($options) && $options['form']) ? $options['form'] : '').'['.((isset($options) && $options['list']) ? $options['list'] : '').']['.$iobj.'][id]'),'id' => ((isset($options) && $options['form']) ? $options['form'] : '').'_'.((isset($options) && $options['list']) ? $options['list'] : '').'_'.$iobj.'_id')) ?>
                <?php endif; ?>
              </td>
            <?php endforeach; ?>            
            <td>
              <ul class="sf_admin_td_actions">
                <?php if(isset($options) && $options['delete']): ?>
                  <li class="sf_admin_action_delete"><a onclick="if (confirm('¿Estas Seguro?')) { <?php echo remote_function(array(
            'update'   => (isset($options) && $options['update']) ? $options['update'] : '',
            'url'      => (isset($options) && $options['delete_action']) ? $options['delete_action'] : '#',
            'script' => 'true',
            //'submit' => 'sf_form_generator',
            //'before' => "$('ajax_activity').setStyle({'display':'inline'})",
            //'after'  => "$('ajax_activity').setStyle({'display':'none'})",
            'with'   => "Form.serialize(document.getElementById('sf_form_generator'))+'&row=".$iobj."'",
          )) ?> };return false;" href="#">Eliminar</a></li>  </ul>
                <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>