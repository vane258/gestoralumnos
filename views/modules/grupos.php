<?php
    $datos = new MvcController();
    $respuesta_alumnos= $datos->obtenerAlumnosController();
    $st_alumnos="";
    for($i=0;$i<sizeof($respuesta_alumnos);$i++){
        $st_alumnos=$st_alumnos."<option value='".$respuesta_alumnos[$i]['id']."'>".$respuesta_alumnos[$i]['nombre']." ".$respuesta_alumnos[$i]['apellido']."</option>";
    }

    if($_POST){
        $datos->registrarGrupoController();
    }
?>
<br><br>
<center><h6>Registrar Nuevo Grupo</h6></center>   
	
<form method="POST">
	<input type="hidden" id="hid" name="hid"></input>
    <div class="form-group">
        <label >Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
    </div>
    <br>

    <h5>Alumnos en el grupo</h5><br>
     <div class="form-group">
         <label for="alumno">Nombre del Alumno:</label>
         <div class="row">
             <select name="alumno" class="form-control col-6" id="alumno">
                <?php echo $st_alumnos?>
             </select>
             <div class="col-1"></div>
             <button type="button" class="btn btn-success col-2" onclick="addAlumno()">Agregar Alumno</button>
         </div>
    </div>

    <table class="table table-hover" id="alumnos"></table>
    <br>
    <button class="btn btn-primary" id="guardar" onclick="sendData();" type="submit" disabled>Registrar Grupo</button>
</form>



<script>
    var flag_alumnos = 0;

    var alumnos=[];
    var send_alumnos=[];
    var tab = document.getElementById("alumnos");

    function updateTable(){
        tab.innerHTML="<tr><th>Matricula</th><th>Nombre</th><th>¿Eliminar?</th><tr>";
        for(var i=0;i<alumnos.length;i++){
            tab.innerHTML=tab.innerHTML+"<tr><td>"+alumnos[i][0]+"</td><td>"+alumnos[i][1]+"</td><td><button class=\'alert\' type=\'button\' onclick=\'deleteAlumno("+i+");\'>Eliminar</button></td><tr>";
        }
    }

    function addAlumno(){
        
        var select = document.getElementById("alumno");
        var flag=false;
        for(var i=0;i<alumnos.length;i++){
            if(alumnos[i][0]==select.options[select.selectedIndex].value && alumnos[i][1]==select.options[select.selectedIndex].text){
                flag=true;
                break;
            }
        }

        if(!flag){
            alumnos.push([select.options[select.selectedIndex].value,select.options[select.selectedIndex].text]);
            send_alumnos.push([select.options[select.selectedIndex].value]);
            updateTable();    
            flag_alumnos++;                  
            if(flag_alumnos>0){
                document.getElementById("guardar").removeAttribute("disabled");
            }
        }else{
            alert("Alumno ya Agregado");
        }
    }

    function deleteAlumno(index){
        alumnos.splice(index, 1);
        send_alumnos.splice(index, 1);
        updateTable();
        flag_alumnos--;
        if(flag_alumnos==0){
            document.getElementById("guardar").disabled = "true";
        }
    }

    function sendData(){
        var hid = document.getElementById("hid");
        hid.value=send_alumnos;
    }

</script>