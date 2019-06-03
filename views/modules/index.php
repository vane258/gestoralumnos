<?php
    $datos = new MvcController();
    $Alumno = $datos->obtenerAlumnosController();
    $Maestro = $datos->obtenerMaestrosController();
    $Materia = $datos->obtenerMateriasController();
    $Grupo= $datos->obtenerGruposController();
    $respuesta_alumnos= $datos->obtenerAlumnosController();
    $respuesta_maestros= $datos->obtenerMaestrosController();
    $respuesta_grupos= $datos->obtenerGruposController();
?>
<br><br>
<h5>Lista de Alumnos</h5>
<table class="table table-hover">
	<?php if(count($Alumno) == 0){
		echo "Ningun alumno registrado";
	}else{?>
  <thead>
     <tr>
        <th scope="col">Id</th>
        <th scope="col">Matricula</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th> 
        <th scope="col">Email</th> 
        <th scope="col">Carrera</th> 
        <th scope="col">Editar</th> 
        <th scope="col">Borrar</th> 
    </tr>
  </thead>
  <tbody>
        <?php for($i=0; $i < count($Alumno); $i++ ) { ?>
        <tr>
            <td scope="row"><?php echo $Alumno[$i]["id"]?></td>
            <td><?php echo $Alumno[$i]["matricula"]?></td>
            <td><?php echo $Alumno[$i]["nombre"]?></td>
            <td><?php echo $Alumno[$i]["apellido"]?></td>
            <td><?php echo $Alumno[$i]["email"]?></td>
            <td><?php echo $Alumno[$i]["carrera"]?></td>
            <td><a href="index.php?action=editarAlumno&id=<?php echo $Alumno[$i]["id"]?>">Editar</a></td>
            <td><a href="index.php?action=eliminarAlumno&id=<?php echo $Alumno[$i]["id"]?>">Borrar</a></td>
        </tr>
		<?php } ?>
  </tbody>
  <?php }?>
</table>

<br><br>
<h5>Lista de Maestros</h5>
<table class="table table-hover">
	<?php if(count($Maestro) == 0){
		echo "Ningun maestro registrado";
	}else{?>
  <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Num de Empleado</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th> 
        <th scope="col">Email</th> 
        <th scope="col">Carrera</th> 
        <th scope="col">Editar</th> 
        <th scope="col">Borrar</th> 
    </tr>

  </thead>
  <tbody>
      <?php for($i=0; $i < count($Maestro); $i++ ) { ?>
        <tr>
            <td scope="row"><?php echo $Maestro[$i]["id"]?></td>
            <td><?php echo $Maestro[$i]["num_empleado"]?></td>
            <td><?php echo $Maestro[$i]["nombre"]?></td>
            <td><?php echo $Maestro[$i]["apellido"]?></td>
            <td><?php echo $Maestro[$i]["email"]?></td>
            <td><?php echo $Maestro[$i]["carrera"]?></td>
            <td><a href="index.php?action=editarMaestro&id=<?php echo $Maestro[$i]["id"]?>">Editar</a></td>
            <td><a href="index.php?action=eliminarMaestro&id=<?php echo $Maestro[$i]["id"]?>">Borrar</a></td>
        </tr>
		<?php } ?>
  </tbody>
    <?php }?>

</table>

<br><br>
<h5>Lista de Materias</h5>
<table class="table table-hover">
	<?php if(count($Materia) == 0){
		echo "Ninguna materia registrada";
	}else{?>
  <thead>
     <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Hora Inicio</th> 
        <th scope="col">Hora Fin</th> 
        <th scope="col">Maestro</th>
        <th scope="col">Grupo</th> 
        <th scope="col">Editar</th> 
        <th scope="col">Borrar</th> 
    </tr>
  </thead>
  <tbody>
    <?php for($i=0; $i < count($Materia); $i++ ) { ?>
        <tr>
            <td scope="row"><?php echo $Materia[$i]["id"]?></td>
            <td><?php echo $Materia[$i]["nombre"]?></td>
            <td><?php echo $Materia[$i]["hora_inicio"]?></td>
            <td><?php echo $Materia[$i]["hora_fin"]?></td>
            <td><?php foreach ($respuesta_maestros as $m) {
                if($m["id"] == $Materia[$i]["id_maestro"]){
                    echo $m["nombre"]." ".$m["apellido"];
                }
            }?></td>

            <td><?php foreach ($respuesta_grupos as $g) {
                if($g["id"] == $Materia[$i]["id_grupo"]){
                    echo $g["nombre"];
                }
            }?></td>

            <td><a href="index.php?action=editarMateria&id=<?php echo $Materia[$i]["id"]?>">Editar</a></td>
            <td><a href="index.php?action=eliminarMateria&id=<?php echo $Materia[$i]["id"]?>">Borrar</a></td>
        </tr>
		<?php } ?>
  </tbody>
  <?php }?>
</table>

<br><br>
<h5>Lista de Grupos</h5>
<table class="table table-hover">
<?php if(count($Grupo) == 0){
		echo "Ningun grupo registrado";
	}else{?>
  <thead>
   <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Ver Alumnos</th>
        <th scope="col">Borrar</th> 
    </tr>
  </thead>
  <tbody>
       <?php for($i=0; $i < count($Grupo); $i++ ) { ?>
        <tr>
            <td scope="row"><?php echo $Grupo[$i]["id"]?></td>
            <td><?php echo $Grupo[$i]["nombre"]?></td>
            <td><a href="index.php?action=verAlumnosGrupo&id=<?php echo $Grupo[$i]["id"]?>">Ver</a></td>
            <td><a href="index.php?action=eliminarGrupo&id=<?php echo $Grupo[$i]["id"]?>">Borrar</a></td>
        </tr>
		<?php } ?>
  </tbody>
    <?php }?>
</table>
