<?php
    require_once "../servidor/conexionCrud.php";
    require_once "../controlador/ConsultasController.php";
    $tipo_consulta = $_POST['tipo_operacion'];
    switch ($tipo_consulta) {
        case 'guardar':
           $nombre=$_POST['nombre'];

$tusu=$_POST['tusu'];
$correo=$_POST['correo'];
            $consultas = new consultas();
            $ejecutar = $consultas->insert_usuarios($nombre,$correo,$dir,$tusu);
            echo json_encode($ejecutar);
        break;
        case 'editar':
            $id = $_POST['id'];
            $consultas = new consultas();
            $ejecutar = $consultas->obtener_usuarios($id);
            echo json_encode($ejecutar);
            break;
        case 'update':
                $nombre=$_POST['nombre'];
$tusu=$_POST['tusu'];
$correo=$_POST['correo'];
                $consultas = new consultas();
                $ejecutar = $consultas->update_usuarios($nombre,$correo,$dir,$tusu);
                echo json_encode($ejecutar);
            break;    
        case 'eliminar':
            $id = $_POST['id'];
            $consultas = new consultas();
            $ejecutar = $consultas->eliminar_usuarios($id);
            echo json_encode($ejecutar);
            break;    
        default:
            # code...
            break;
    }

?>