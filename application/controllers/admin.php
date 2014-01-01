<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->folder = 'uploads/';
		$this->load->model('files_model');

	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
		{
			redirect(base_url().'login');
		}
		$data['titulo'] = 'Bienvenido Administrador';
		
		$this->load->view('admin_view', array('error' => ' ' ),$data);
	}

	public function do_upload() 
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
		{
			redirect(base_url().'login');
		}
		else
		{
			//++++++VALIDACIONES++++++++++++++//
			$this->form_validation->set_rules('titulo','titulo','trim|required|xss_clean|max_lenght[50]|min_length[2]');
	        $this->form_validation->set_rules('autor','autor','trim|required|xss_clean|max_lenght[50]|min_length[2]|alpha');
	        $this->form_validation->set_rules('descripcion','descripcion','trim|required|xss_clean|max_lenght[250]|min_length[2]');
	        $this->form_validation->set_rules('resumen','resumen','trim|required|xss_clean');
	        $this->form_validation->set_rules('carrera', 'Carrera', 'required|trim|xss_clean');

	        $this->form_validation->set_message('required', 'Campo %s es obligatorio');
	        //validamos el email con la función de ci valid_email
	        $this->form_validation->set_message('valid_email', 'El %s no es v&aacute;lido');
	        //comprobamos que se cumpla el mínimo de caracteres introducidos
	        $this->form_validation->set_message('min_length', 'Campo %s debe tener al menos %s car&aacute;cteres');
	        //comprobamos que se cumpla el máximo de caracteres introducidos
	        $this->form_validation->set_message('max_length', 'Campo %s debe tener menos %s car&aacute;cteres');

	        $this->form_validation->set_message('alpha', 'Campo %s debe tener solo letras');
	        //++++++VALIDACIONES++++++++++++++//

			$config['upload_path'] = $this->folder;
			$config['allowed_types'] = 'pdf';
			$config['remove_spaces']=TRUE;
			$config['max_size']	= '0';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload() || $this->form_validation->run() == FALSE)
			{
				$error = array('error' => $this->upload->display_errors());
	            $this->load->view('admin_view', $error);
			}
			else
			{	
				//++++++Pasar VALORES DE la VISTA ++++//
				$titulo = $this->input->post('titulo');
				$autor = $this->input->post('autor');    
	            $descripcion = $this->input->post('descripcion');                            
	            $resumen = $this->input->post('resumen');
	            $carrera = $this->input->post('carrera');
	           	

	            date_default_timezone_set("Chile/Continental");
	            $fecha = date('Y-m-d');
	            $hora= date("H:i:s");

	           	//++++++Pasar VALORES DE la VISTA ++++//
		        

		        $data = array('upload_data' => $this->upload->data());
		        $file_info = $this->upload->data();        
		        $imagen = $file_info['file_name'];
		        
		        //++++++Manda datos al Modelo++++++//
		        $subir = $this->files_model->subir($titulo,$imagen,$autor,$descripcion,$resumen,$fecha,$hora,$carrera);      
		        //++++++Manda datos al Modelo++++++//

		        $data['imagen'] = $imagen;
		        
		        $this->load->view('upload_success', $data);

			}
		}
	} 
//************ SE OBTIENEN LOS NOMBRES DE LOS ARCHIVOS ****************

	public function info(){
		
		$files = get_filenames($this->folder, FALSE);
		
		if($files){
	        $data['files']=$files;
	             
	        }else{
	        	$data['files']=NULL;
	        }
	   $this->load->view('filenames',$data);	
	 
	}
	//************ DESCARGA DE ARCHIVOS ***********************

	public function downloads($name){
			 
		   $data = file_get_contents($this->folder.$name);  
	       force_download($name,$data); 
		  
	}

	public function agregar()
    {
        //Si Existe Post y es igual a uno
        if($this->input->post('post') && $this->input->post('post')==1)
        {
            $this->form_validation->set_rules('username', 'Usuario', 'required|trim|xss_clean|alpha_numeric|min_length[4]|is_unique[users.Username]');
            $this->form_validation->set_rules('password', 'Contraseña', 'required|trim|xss_clean|alpha_numeric|min_length[4]');
            $this->form_validation->set_rules('pass', 'Confirmar Contraseña', 'required|trim|xss_clean|matches[password]');
          
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            $this->form_validation->set_message('alpha_numeric','El Campo <b>%s</b> Solo Acepta Números y letras');
            $this->form_validation->set_message('matches','El Campo <b>%s</b> no coincide con el campo <b>%s</b>');
            $this->form_validation->set_message('min_length', 'Campo %s debe tener al menos %s car&aacute;cteres');
            $this->form_validation->set_message('is_unique','El Campo <b>%s</b> ya Existe');

            if ($this->form_validation->run() == TRUE)
            {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $hash = $this->encrypt->sha1($password);
                
                $this->files_model->agregar_usuario($username,$hash);               
            }
        }
        //obtenemos todos los usuarios
        $usuarios = $this->files_model->get_usuarios();
        //creamos una variable usuarios para pasarle a la vista
        $data['usuarios'] = $usuarios;
        //cargamos nuestra vista
        $this->load->view('index_view',$data);
    }
     
    public function editar($id=0)
    {
        //verificamos si existe el id
        $respuesta = $this->files_model->get_usuario($id);
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
            //Si existe el post para editar
            if($this->input->post('post') && $this->input->post('post')==1)
            {
            $this->form_validation->set_rules('username', 'Usuario', 'required|trim|xss_clean|alpha_numeric|min_length[4]');
            $this->form_validation->set_rules('password', 'Contraseña', 'required|trim|xss_clean|alpha_numeric|min_length[4]');
            $this->form_validation->set_rules('pass', 'Confirmar Contraseña', 'required|trim|xss_clean|matches[password]');
          
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            $this->form_validation->set_message('alpha_numeric','El Campo <b>%s</b> Solo Acepta Números y letras');
            $this->form_validation->set_message('matches','El Campo <b>%s</b> no coincide con el campo <b>%s</b>');
            $this->form_validation->set_message('min_length', 'Campo %s debe tener al menos %s car&aacute;cteres');
            
                if ($this->form_validation->run() == TRUE)
                {
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $hash = $this->encrypt->sha1($password);
                    
                    $this->files_model->actualizar_usuario($id,$username,$hash);
                    //redireccionamos al controlador CRUD
                    redirect('admin/agregar');               
                }
            }
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('editar_view',$data);
        }
    }
     
    public function eliminar($id=0)
    {
        //verificamos si existe el id
        $respuesta = $this->files_model->get_usuario($id);
        //si nos retorna FALSE mostramos la pag 404.
        if($respuesta==false)
        show_404();
        else
        {
            //si existe eliminamos el usuario
            $this->files_model->eliminar_usuario($id);
            //redireccionamos al controlador CRUD
            redirect('admin/agregar'); 
        }
    }


}
