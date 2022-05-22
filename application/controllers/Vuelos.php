<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vuelos extends CI_Controller
{

  public function index()
  {
    // Hace referencia para que pueda cargar la url que se va a usar en el proyecto, si no, no funciona
    $this->load->helper('url');
    // Tenemos esta libreria session para poder mantener cierto tiempo la session abierta
    $this->load->library('session');
    $this->load->model('Model_vuelos');
    $this->load->model('model_login');

    $rol = $_SESSION["role"];

    switch ($rol) {
      case '1':

        if (empty($_REQUEST["codigoVuelo"])) {

          //$data["datosvuelo"] = $this->Model_vuelos->vuelos();
          $data["response"] = trim(isset($_REQUEST["response"]));
          $data = $this->Model_vuelos->vuelos();
          $this->load->view('usuario/vuelosPendientes', $data);
        } else {
          $codigoVuelo = $_REQUEST["codigoVuelo"];
          // tenemos otro if para poder realizar una busqueda, segun esa vista
          if ($codigoVuelo == '') {
            // esta variable codigo la llenamos con el valor del name que toma cuando se elige una region de la vista admin y
            // mandamos el id
            //$codigoVuelo = $_REQUEST["codigoVuelo"];


            header("Location: http://192.168.0.3:8888/Consulta_Vuelos/index.php/vuelos?response=1");
            die();
            echo $codigoVuelo;

            // code...
          } else {
            // si no se ejecuta nada, se queda normal
            //$codigoVuelo = $_REQUEST["codigoVuelo"];
            $data["datosvuelo"] = $this->Model_vuelos->buscarPorCodigoVuelo($codigoVuelo);
            $data["response"] = trim(isset($_REQUEST["response"]));
            $this->load->view('usuario/vuelosPendientes', $data);
            echo $codigoVuelo;
          }
        }

        break;
      case '2':
        $this->load->view('accessdenied.php');

        break;
      case '3':
        $this->load->view('accessdenied.php');

        break;
      case '4':
        $this->load->view('accessdenied.php');
        break;
      case '5':

        $this->load->view('accessdenied.php');
        break;

      case '6':

        $this->load->view('accessdenied.php');
        break;

      default:
        redirect('restrinct');
        // code...
        break;
    }
  }
}
