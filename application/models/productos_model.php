<?php
class productos_model extends CI_Model{

    public function mostrar_producto(){
        $producto = $this->db->get('tb_producto');
		return $producto->result();
    }
  ///  public function insertar_producto($data){
        //$this->db->query("call Insetar_Nuevo_Producto ($data)");
   // }
   public function insertarNuevoProducto(array $data)
   {
       $sql = "CALL insertar_nuevo_producto(?, ?, ?, ?, ?, ?)";
       $this->db->query($sql, $data);
   }
}

?>