<?php
    $datos = new MvcController();
    $respuesta_maestros= $datos->obtenerMaestrosController();
    $st_maestros="";
    for($i=0;$i<sizeof($respuesta_maestros);$i++){
        $st_maestros=$st_maestros."<option value='".$respuesta_maestros[$i]['id']."'>".$respuesta_maestros[$i]['nombre']." ".$respuesta_maestros[$i]['apellido']."</option>";
    }

    $respuesta_grupos= $datos->obtenerGruposController();
    $st_grupos="";
    for($i=0;$i<sizeof($respuesta_grupos);$i++){
        $st_grupos=$st_grupos."<option value='".$respuesta_grupos[$i]['id']."'>".$respuesta_grupos[$i]['nombre']."</option>";
    }

    if($_POST){
        $datos->registrarMateriaController();
    }

?>
<br><br>
<center><h6>Registrar Nueva Materia</h6></center>   

<form method="POST">
  <div class="form-group">
    <label >Nombre</label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label >Hora Inicio</label>
    <input type="time" name="hora_inicio" class="form-control" placeholder="Hora Inicio" required>
  </div>
  <div class="form-group">
    <label >Hora Fin</label>
    <input type="time" name="hora_fin" class="form-control" placeholder="Hora Fin" required>
  </div>
  
 <div class="form-group">
    <label for="maestro">Maestro</label>
    <select class="form-control" name="maestro" required>
        <?php echo $st_maestros?>
    </select>
  </div>

 <div class="form-group">
    <label for="grupo">Grupo</label>
     <select  class="form-control" name="grupo" required>
        <?php echo $st_grupos?>
     </select>
  </div>

  <?php if(count($respuesta_maestros) == 0 || count($respuesta_grupos) == 0){ ?>
        <button type="submit" class="btn btn-primary" disabled>Guardar Materia</button>
    <?php }else{ ?>
        <button type="submit" class="btn btn-primary">Guardar Materia</button>
    <?php } ?>
</form>
