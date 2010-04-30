<h1>Menu Principal</h1>


  <ul>
    <p>Jugadores:</p>
    <ul>
      <li><a href="<?php echo url_for('regpagjug/index') ?>">Registrar Pago</a></li>
      <li><a href="<?php echo url_for('transferencias/index') ?>">Transferir Quiniela</a></li>
    </ul>
    <p> Vendedor:</p>
    <ul>
      <li><a href="<?php echo url_for('pagovendedor/index') ?>">Registrar Pago</a></li>
      <li><a href="<?php echo url_for('regven/index') ?>">Realizar Venta</a></li>
    </ul>
    <p> Administrador:</p>
    <ul>
      <li><a href="<?php echo url_for('validarpagos/index') ?>">Validar Pagos</a></li>
    </ul>
  </ul>