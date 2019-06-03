<?php
class MvcController{ 
    public function pagina(){
        include "views/template.php";
    }

    public function enlacesPaginasController(){

        if(isset($_GET['action'])){
            $enlaces = $_GET['action'];
        }else{
            $enlaces = "index";
        }
        $respuesta = Paginas::enlacesPaginasModel($enlaces);
        include $respuesta;
    }
   
    public function obtenerAlumnosGrupoController($id){
        $respuesta = Datos:: obtenerGrupoModel($id,"grupos_alumnos");
        if($respuesta){
            return $respuesta;
        }else{
            return [];
        }
    }

     public function obtenerMaestrosController(){
        $respuesta = Datos:: obtenerDatos("maestros");
        if($respuesta){
            return $respuesta;
        }else{
            return [];
        }
    }

    public function obtenerGruposController(){
        $respuesta = Datos:: obtenerDatos("grupos");
        if($respuesta){
            return $respuesta;
        }else{
            return [];
        }
    }

    public function obtenerAlumnosController(){
        $respuesta = Datos:: obtenerDatos("alumnos");
        if($respuesta){
            return $respuesta;
        }else{
            return [];
        }
    }

    public function obtenerMateriasController(){
        $respuesta = Datos:: obtenerDatos("materias");
        if($respuesta){
            return $respuesta;
        }else{
            return [];
        }
    }

    public function obtenerDatosMaestroController(){
        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $respuesta = Datos::obtenerDatosIDModel($id, "maestros");
            return $respuesta;
        }
    }

    public function obtenerDatosMateriaController(){
        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $respuesta = Datos::obtenerDatosIDModel($id, "materias");
            return $respuesta;
        }
    }

    public function obtenerDatosAlumnoController(){
        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $respuesta = Datos::obtenerDatosIDModel($id, "alumnos");
            return $respuesta;
        }
    }

    public function registrarMaestroController(){
        if(isset($_POST["nombre"])){
            $datosController = array("num_empleado" => $_POST["num_empleado"],"nombre" => $_POST["nombre"],"apellido" => $_POST["apellido"],"carrera" => $_POST["carrera"],"email" => $_POST["email"],);
            
            $respuesta = Datos::registrarMaestroModel($datosController, "maestros");
            
            if($respuesta == "success"){
                header("location:index.php?action=ExitoMaestro");
            }
            else{
                header("loaction:index.php");
            }
        }
    }

    public function registrarMateriaController(){
        if(isset($_POST["nombre"])){
            $datosController = array("nombre" => $_POST["nombre"],"hora_inicio" => $_POST["hora_inicio"],"hora_fin" => $_POST["hora_fin"],"maestro" => $_POST["maestro"],"grupo" => $_POST["grupo"],);
            
            $respuesta = Datos::registrarMateriaModel($datosController, "materias");
            if($respuesta == "success"){
                header("location:index.php?action=ExitoMateria");
            }
            else{
                header("loaction:index.php");
            }
        }
    }

    public function registrarGrupoController(){
        if(isset($_POST["nombre"])){
            $datosController = array("nombre" => $_POST["nombre"]);
            $data = $_POST['hid'];

            $respuesta = Datos::registrarGrupoModel($datosController, "grupos");
            $id_grupo = Datos::ObtenerLastGrupo("grupos");
            $respuesta = Datos::registrarGrupoAlumnosModel($data, $id_grupo[0], "grupos_alumnos");
        
            if($respuesta == "success"){
                header("location:index.php?action=ExitoGrupo");
            }
            else{
                header("loaction:index.php");
            }
        }
    }

    public function registrarAlumnoController(){
        if(isset($_POST["nombre"])){
            $datosController = array("matricula" => $_POST["matricula"],"nombre" => $_POST["nombre"],"apellido" => $_POST["apellido"],"carrera" => $_POST["carrera"],"email" => $_POST["email"],);
            
            $respuesta = Datos::registrarAlumnoModel($datosController, "alumnos");
            if($respuesta == "success"){
                header("location:index.php?action=ExitoAlumno");
            }
            else{
                header("loaction:index.php");
            }
        }
    }

    public function verificarMateriasMaestrosController($id){
        $respuesta = Datos::verificarMateriasMaestrosModel($id, "materias");
    
        if($respuesta){
            return true;
        }else{
            return false;
        }
    }

    public function verificarGruposController($id){
        $respuesta = Datos:: verificarGruposModel($id,"grupos_alumnos");
        if($respuesta){
            return true;
        }else{
            return false;
        }   
    }

    public function actualizarMaestroController($id){
        if(isset($_POST["nombre"])){
            $datosController = array("id"=>$id,"num_empleado" => $_POST["num_empleado"],"nombre" => $_POST["nombre"],"apellido" => $_POST["apellido"],"carrera" => $_POST["carrera"],"email" => $_POST["email"],);
            
            $respuesta = Datos::actualizarMaestroModel($datosController, "maestros");
            
            if($respuesta == "success"){
                header("location:index.php?action=UpdateMaestro");
            }
            else{
                header("loaction:index.php");
            }
        }
    }

    public function actualizarMateriaController($id){
        if(isset($_POST["nombre"])){
            $datosController = array("id"=>$id,"nombre" => $_POST["nombre"],"hora_inicio" => $_POST["hora_inicio"],"hora_fin" => $_POST["hora_fin"],"maestro" => $_POST["maestro"],"grupo" => $_POST["grupo"],);
            
            $respuesta = Datos::actualizarMateriaModel($datosController, "materias");
            if($respuesta == "success"){
                header("location:index.php?action=UpdateMateria");
            }
            else{
                header("loaction:index.php");
            }
        }
    }

    public function actualizarAlumnoController($id){
        if(isset($_POST["nombre"])){
            $datosController = array("id"=>$id,"matricula" => $_POST["matricula"],"nombre" => $_POST["nombre"],"apellido" => $_POST["apellido"],"carrera" => $_POST["carrera"],"email" => $_POST["email"],);
            
            $respuesta = Datos::actualizarAlumnoModel($datosController, "alumnos");
            if($respuesta == "success"){
                header("location:index.php?action=UpdateAlumno");
            }
            else{
                header("loaction:index.php");
            }
        }
    }

    public function eliminarDatosMaestroController($id){
        $respuesta = Datos::eliminarMaestroModel($id, "maestros");
            if($respuesta == "success"){
                header("location:index.php?action=BorrarMaestro");
            }
            else{
                header("loaction:index.php");
            }
    }

    public function eliminarDatosMateriaController($id){
        $respuesta = Datos::eliminarMateriaModel($id, "materias");
        
        if($respuesta == "success"){
            header("location:index.php?action=BorrarMateria");
        }
        else{
            header("loaction:index.php");
        }
    }

    public function eliminarDatosGrupoController($id){
        $respuesta = Datos::eliminarGrupoModel($id, "grupos");
            if($respuesta == "success"){
                header("location:index.php?action=BorrarGrupo");
            }
            else{
                header("loaction:index.php");
            }
    }

    public function eliminarDatosAlumnoController($id){
        $respuesta = Datos::eliminarAlumnoModel($id, "alumnos");
        if($respuesta == "success"){
            header("location:index.php?action=BorrarAlumno");
        }
        else{
            header("loaction:index.php");
        }
    }

    public function eliminarDatosAlumnoGrupoController($id_alumno,$id_grupo){
        $respuesta = Datos::eliminarAlumnoGrupoModel($id_alumno,$id_grupo, "grupos_alumnos");
        if($respuesta == "success"){
            header("location:index.php?action=BajaAlumo");
        }
        else{
            header("loaction:index.php");
        }
    }
}
?>