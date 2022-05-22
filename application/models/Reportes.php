<?php
class Reportes extends CI_Model
{


  public function reporte($id){

    $this->load->database();
    $query = $this->db->query("

    Select * from VuelosPendientes where IdVuelosPendientes =  '". $id ."'

      ");
      if (!$query->conn_id) {
        echo 'ERORR DE CONEXIÓN A LA BASE DE DATOS. POR FAVOR VERIFICAR';
        }
    return $query->result();

  }




}


 ?>
