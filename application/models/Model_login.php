<?php
class Model_Login extends CI_Model
{

  public function login($user,$pass){

    $this->load->database();
    $query = $this->db->query("
        select idUsuarios, Nombre, Usuario, Password, IdTipoUsuarioRolFK from Usuarios
        where Usuario ='".$user."'
        and Password='".$pass."'
      ");
      if (!$query->conn_id) {
        echo 'ERORR DE CONEXIÓN A LA BASE DE DATOS. POR FAVOR VERIFICAR';
        }
    return $query->result();

  }



}
