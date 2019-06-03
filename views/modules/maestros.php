<?php
    $datos = new MvcController();
    if($_POST){
        $datos->registrarMaestroController();
    }

?>
<br><br>
<center><h6>Registrar Nuevo Maestro</h6></center>	

<form method="POST">
  <div class="form-group">
    <label >N° Empleado</label>
    <input type="text" name="num_empleado" class="form-control" placeholder="Empleado" required>
  </div>
  <div class="form-group">
    <label >Nombre</label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label >Apellidos</label>
    <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required>
  </div>
  <div class="form-group">
    <label >Carrera</label>
    <select class="form-control" name="carrera">
        <option>Ingenieria en Tecnologias de la Informacion</option>
        <option>Ingenieria en Tecnologias de la Manufactura</option>
        <option>Ingenieria en Mecatronica</option>
        <option>Ingenieria en Sistemas Automotricez</option>
        <option>Licenciatura en Administracion y Gestion de PyMEs</option>
    </select>
  </div>
  <div class="form-group">
    <label >Correo Electronico</label>
    <input type="email" name="email" class="form-control" placeholder="Correo Electronico" required>
  </div>

  <button type="submit" class="btn btn-primary">Guardar Maestro</button>
</form>
