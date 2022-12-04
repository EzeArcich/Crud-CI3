<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Persona');
		$this->load->helper('url');
		
	}
	
	public function index()
	{
		$data['personas'] = $this->Persona->seleccionar_todo();
		
		
		$this->load->view('welcome_message', $data);
	}

	public function agregar()
	{
		 $usuario['nombre'] = $this->input->POST('nombre');
		 $usuario['apellido'] = $this->input->POST('apellido');
		 $usuario['email'] = $this->input->POST('email');
		 $usuario['fn'] = $this->input->POST('fecha');
		 $usuario['genero'] = $this->input->POST('sexo');
		 $this->Persona->agregar($usuario);
		 redirect('welcome');	
	}

	public function delete()
	{
		$id=$this->input->get('id');
		$response=$this->Persona->eliminarPersona($id);
		if($response==true){
			echo "<script>alert('registro ha sido eliminado con éxito');
			setTimeout(window.location = 'http://[::1]/Prueba/index.php/welcome', 1500);
			</script>";
			
		} else {
			echo "Error!";
		}
	}

	public function edit()
	{
		$id_editable=$this->input->get('id');
		$data = $this->Persona->editar($id_editable);
		$atrapar = array('data_total' => $data);
		$this->load->view('editar', $atrapar);
	
	}

	public function update()
	{
		$uid = $this->input->POST('id');
		$nombre = $this->input->POST('nombre');
		$apellido = $this->input->POST('apellido');
		$email = $this->input->POST('email');
		$fn = $this->input->POST('fecha');
		$genero = $this->input->POST('sexo');

		$atrapar = array('id' => $uid, 'nombre' => $nombre, 'apellido' => $apellido, 'email' => $email, 'fn' => $fn, 'genero' => $genero);
		$data = $this->Persona->updatePersona($atrapar);
		echo $data;
		redirect('welcome');

	}
}
