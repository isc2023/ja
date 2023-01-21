<?php
class consultas extends dbconexion{
    public function select_usuarios()
    {
        $sqlp = dbconexion::conexion()->prepare("SELECT * FROM usuarios");
        $sqlp->execute();
        return $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
    }
    public function obtener_usuarios($id){
        $sql = dbconexion::conexion()->prepare("SELECT * FROM usuarios WHERE id='".$id."'");
        if($sql->execute()){
            return $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }else {
            return "error";
        }
	}
    public function update_usuarios($nombre,$correo,$dir,$tel,$tusu,$pass){
        $sql = dbconexion::conexion()->prepare("UPDATE usuarios SET nombrec='".$nombre."', direccion='".$dir."', telefono='".$tel."', tusu='".$tusu."', correo='".$correo."', contra='".$pass."' WHERE id= $id");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $resultado = self::select_usuarios();
            return $resultado;
        }else{
            return "error";
       }
    }
    public function eliminar_usuarios($id){
        $sql=dbconexion::conexion()->prepare("DELETE FROM usuarios WHERE id='".$id."'");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $resultado = self::select_usuarios();
            return $resultado;
            // return "Se elimino correctamente el registro";
        }else{
            return "Ocurrio un problema";
        }
    }
   
}
?>