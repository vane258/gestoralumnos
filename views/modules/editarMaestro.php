<?php
$controller = new MvcController();

$maestro = $controller -> obtenerDatosMaestroController();

if($_POST){
        $controller->actualizarMaestroController($_GET["id"]);
    }
?>

<br><br>
<center><h6>Actualizar Nuevo Maestro</h6></center>	
	
<form method="POST">
  <div class="form-group">
    <label >N° Empleado</label>
    <input type="text" name="num_empleado" value="<?php echo $maestro["num_empleado"]?>" class="form-control" placeholder="Empleado" required>
  </div>
  <div class="form-group">
    <label >Nombre</label>
    <input type="text" name="nombre" value="<?php echo $maestro["nombre"]?>" class="form-control" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label >Apellidos</label>
    <input type="text" name="apellido" value="<?php echo $maestro["apellido"]?>" class="form-control" placeholder="Apellidos" required>
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
    <input type="email" name="email" value="<?php echo $maestro["email"]?>" class="form-control" placeholder="Correo Electronico" required>
  </div>

  <button type="submit" class="btn btn-primary">Actualizar Maestro</button>
</form>
