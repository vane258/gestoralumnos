<?php

$controller = new MvcController();
$alumno = $controller -> obtenerDatosAlumnoController();

if($_POST){
    $controller->actualizarAlumnoController($_GET["id"]);
}
?>
<br><br>
<center><h6>Actualizar Alumno</h6></center>

<form method="POST">
  <div class="form-group">
    <label >Matricula</label>
    <input type="text" name="matricula" value="<?php echo $alumno["matricula"]?>" class="form-control" placeholder="Matricula" required>
  </div>
  <div class="form-group">
    <label >Nombre</label>
    <input type="text" name="nombre" value="<?php echo $alumno["nombre"]?>" class="form-control" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label >Apellidos</label>
    <input type="text" name="apellido" value="<?php echo $alumno["apellido"]?>" class="form-control" placeholder="Apellidos" required>
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
    <input type="email" name="email" class="form-control" value="<?php echo $alumno["email"]?>" placeholder="Correo Electronico" required>
  </div>
		
  <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
	</form>

