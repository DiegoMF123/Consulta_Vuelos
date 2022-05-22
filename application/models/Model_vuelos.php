<?php
class Model_Vuelos extends CI_Model
{

    public function buscarPorCodigoVuelo($codigoVuelo)
    {
        $this->load->database();
        $query = $this->db->query("

        select * from VuelosPendientes where CodigoVuelo = '" . $codigoVuelo . "'
        
        ");
        if (!$query->conn_id) {
            echo 'ERORR DE CONEXIÓN A LA BASE DE DATOS. POR FAVOR VERIFICAR';
            }
        return $query->result();
    }

    public function vuelos()
    {
        $this->load->database();
        $query = $this->db->query("

        select * from VuelosPendientes
        
        ");
        if (!$query->conn_id) {
            echo 'ERORR DE CONEXIÓN A LA BASE DE DATOS. POR FAVOR VERIFICAR';
            }
        return $query->result();
    }
}
?>