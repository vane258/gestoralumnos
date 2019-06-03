<?php 

    $datos = new MvcController();
    $Grupo= $datos->obtenerAlumnosGrupoController($_GET["id"]);

    $datoAlumno = $datos->obtenerAlumnosController();

?>
<br><br>
<center><h6>Alumnos registrados en el grupo seleccionado</h6></center>   
    
<table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Dar de baja</th> 
    </tr>
  </thead>
  <tbody>
        <?php for($i=0; $i < count($Grupo); $i++ ) { ?>
        <tr>
            <td><?php foreach ($datoAlumno as $m) {
                if($m["id"] == $Grupo[$i]["id_alumno"]){
                    echo $m["nombre"];
                }
            }?></td>

             <td><?php foreach ($datoAlumno as $m) {
                if($m["id"] == $Grupo[$i]["id_alumno"]){
                    echo $m["apellido"];
                }
            }?></td>
            <td><a href="index.php?action=bajaAlumnoGrupo&id_alumno=<?php echo $Grupo[$i]["id_alumno"]?>&id_grupo=<?php echo $Grupo[$i]["id_grupo"]?>">¿Baja?</a></td>
        </tr>
        <?php } ?>
  </tbody>
</table>