<?php
class Paginas{

    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel == "alumnos" || $enlacesModel == "eliminar" || $enlacesModel == "maestros"  || $enlacesModel == "editarMaestro"  || $enlacesModel == "eliminarMaestro" || $enlacesModel == "editarAlumno"  || $enlacesModel == "eliminarAlumno" || $enlacesModel == "grupos" || $enlacesModel == "materias" || $enlacesModel == "eliminarGrupo" || $enlacesModel == "eliminarMateria" || $enlacesModel == "editarMateria" || $enlacesModel == "verAlumnosGrupo" || $enlacesModel == "bajaAlumnoGrupo"){

            $module = "views/modules/".$enlacesModel.".php";
        }
        else if($enlacesModel == "ImposibleMaestro"){
            echo "<script>alert('Imposible eliminar maestro, materias asignadas.')</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "ImposibleGrupo"){
            echo "<script>alert('Imposible eliminar grupo, estudiantes registrados.')</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "ExitoMaestro"){
            echo "<script>alert('Maestro Registrado');</script>";
            $module = "views/modules/index.php";
        }
         else if($enlacesModel == "ExitoAlumno"){
            echo "<script>alert('Alumno Registrado');</script>";
            $module = "views/modules/index.php";
        }
         else if($enlacesModel == "ExitoGrupo"){
            echo "<script>alert('Grupo Registrado');</script>";
            $module = "views/modules/index.php";
        }
         else if($enlacesModel == "ExitoMateria"){
            echo "<script>alert('Materia Registrada');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "UpdateMaestro"){
            echo "<script>alert('Maestro Actualizado');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "UpdateGrupo"){
            echo "<script>alert('Grupo Actualizado');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "UpdateMateria"){
            echo "<script>alert('Materia Actualizada');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "UpdateAlumno"){
            echo "<script>alert('Alumno Actualizado');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "BorrarMaestro"){
            echo "<script>alert('Maestro Eliminado');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "BorrarGrupo"){
            echo "<script>alert('Grupo Eliminado');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "BorrarMateria"){
            echo "<script>alert('Materia Eliminada');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "BorrarAlumno"){
            echo "<script>alert('Alumno Eliminado');</script>";
            $module = "views/modules/index.php";
        }
        else if($enlacesModel == "BajaAlumno"){
            echo "<script>alert('Alumno dado de baja del grupo');</script>";
            $module = "views/modules/index.php";
        }
        else{
            $module = "views/modules/index.php";
        }
        return $module;
    }
}
?>