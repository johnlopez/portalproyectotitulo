<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Resultados extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('files_model');
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/';
        $this->load->library('form_validation','pagination');
        
    }

    public function validar_titulo() {
        $this->session->unset_userdata('buscar_autor');
        $this->session->unset_userdata('buscar_fecha');
        $this->session->unset_userdata('buscar_descripcion');
        $this->session->unset_userdata('buscar_resumen');

        $this->form_validation->set_rules('buscar_titulo', 'buscador', 'required|min_length[2]|max_length[20]|trim|xss_clean');
        $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El %s no puede tener más de %s carácteres');
        if ($this->form_validation->run() == TRUE) {

            $buscador = $this->input->post('buscar_titulo');
            $this->session->set_userdata('buscar_titulo', $buscador);
            redirect(base_url().'resultados', 'refresh');
        } else {

            $this->load->view('listado_view'); //display search form
        }
    }
    public function validar_autor() {
        $this->session->unset_userdata('buscar_titulo');
        $this->session->unset_userdata('buscar_fecha');
        $this->session->unset_userdata('buscar_descripcion');
        $this->session->unset_userdata('buscar_resumen');

        $this->form_validation->set_rules('buscar_autor', 'buscador', 'required|min_length[2]|max_length[20]|trim|xss_clean');
        $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El %s no puede tener más de %s carácteres');
        if ($this->form_validation->run() == TRUE) {

            $buscador = $this->input->post('buscar_autor');
            $this->session->set_userdata('buscar_autor', $buscador);
            redirect(base_url().'resultados', 'refresh');
        } else {

            $this->load->view('listado_view'); //display search form
        }
    }
    
       public function validar_fecha() {
        $this->session->unset_userdata('buscar_autor');
        $this->session->unset_userdata('buscar_titulo');
        $this->session->unset_userdata('buscar_descripcion');
        $this->session->unset_userdata('buscar_resumen');

        $this->form_validation->set_rules('buscar_fecha', 'buscador', 'required|min_length[2]|max_length[20]|trim|xss_clean');
        $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El %s no puede tener más de %s carácteres');
        if ($this->form_validation->run() == TRUE) {

            $buscador = $this->input->post('buscar_fecha');
            $this->session->set_userdata('buscar_fecha', $buscador);
            redirect(base_url().'resultados', 'refresh');
        } else {

            $this->load->view('listado_view'); //display search form
        }
    }

        public function validar_descripcion() {
        $this->session->unset_userdata('buscar_autor');
        $this->session->unset_userdata('buscar_fecha');
        $this->session->unset_userdata('buscar_titulo');
        $this->session->unset_userdata('buscar_resumen');    

        $this->form_validation->set_rules('buscar_descripcion', 'buscador', 'required|min_length[2]|max_length[20]|trim|xss_clean');
        $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El %s no puede tener más de %s carácteres');
        if ($this->form_validation->run() == TRUE) {

            $buscador = $this->input->post('buscar_descripcion');
            $this->session->set_userdata('buscar_descripcion', $buscador);
            redirect(base_url().'resultados', 'refresh');
        } else {

            $this->load->view('listado_view'); //display search form
        }
    }

    public function validar_resumen() {
        $this->session->unset_userdata('buscar_autor');
        $this->session->unset_userdata('buscar_fecha');
        $this->session->unset_userdata('buscar_descripcion');
        $this->session->unset_userdata('buscar_titulo');
        
        $this->form_validation->set_rules('buscar_resumen', 'buscador', 'required|min_length[2]|max_length[20]|trim|xss_clean');
        $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El %s no puede tener más de %s carácteres');
        if ($this->form_validation->run() == TRUE) {

            $buscador = $this->input->post('buscar_resumen');
            $this->session->set_userdata('buscar_resumen', $buscador);
            redirect(base_url().'resultados', 'refresh');
        } else {

            $this->load->view('listado_view'); //display search form
        }
    }



    function index() {
        $files = get_filenames($this->folder, FALSE);
    
        if($files){
            $data = array('titulo' => 'Buscador', 
                      
                      'files'=>$files
                      
                      );
             
        
            if ($buscador = $this->session->userdata('buscar_titulo')) {

            $buscador = $this->session->userdata('buscar_titulo');
            $pages = 2; //Número de registros mostrados por páginas
            $this->load->library('pagination'); //Cargamos la librería de paginación
            $config['base_url'] = base_url() . 'resultados/pagina'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
            $config['total_rows'] = $this->files_model->peliculas_titulo($buscador); //calcula el número de filas
            $config['per_page'] = $pages; //Número de registros mostrados por páginas
            $config['num_links'] = 20; //Número de links mostrados en la paginación
            $config['first_link'] = 'Primera'; //primer link
            $config['last_link'] = 'Última'; //último link
            $config['next_link'] = 'Siguiente'; //siguiente link
            $config['prev_link'] = 'Anterior'; //anterior link
            $config['full_tag_open'] = '<div id="paginacion">'; //el div que debemos maquetar si queremos
            $config['full_tag_close'] = '</div>'; //el cierre del div de la paginación
            $this->pagination->initialize($config); //inicializamos la paginación
            //el array con los datos a paginar ya preparados
            $data["peliculas"] = $this->files_model->total_posts_paginados_titulo($buscador, $config['per_page'], $this->uri->segment(3));

            }
            if ($buscador = $this->session->userdata('buscar_autor')) {

            $buscador = $this->session->userdata('buscar_autor');
            $pages = 2; //Número de registros mostrados por páginas
            $this->load->library('pagination'); //Cargamos la librería de paginación
            $config['base_url'] = base_url() . 'resultados/pagina'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
            $config['total_rows'] = $this->files_model->peliculas_autor($buscador); //calcula el número de filas
            $config['per_page'] = $pages; //Número de registros mostrados por páginas
            $config['num_links'] = 20; //Número de links mostrados en la paginación
            $config['first_link'] = 'Primera'; //primer link
            $config['last_link'] = 'Última'; //último link
            $config['next_link'] = 'Siguiente'; //siguiente link
            $config['prev_link'] = 'Anterior'; //anterior link
            $config['full_tag_open'] = '<div id="paginacion">'; //el div que debemos maquetar si queremos
            $config['full_tag_close'] = '</div>'; //el cierre del div de la paginación
            $this->pagination->initialize($config); //inicializamos la paginación
            //el array con los datos a paginar ya preparados
            $data["peliculas"] = $this->files_model->total_posts_paginados_autor($buscador, $config['per_page'], $this->uri->segment(3));

            }
            if ($buscador = $this->session->userdata('buscar_fecha')) {

            $buscador = $this->session->userdata('buscar_fecha');
            $pages = 2; //Número de registros mostrados por páginas
            $this->load->library('pagination'); //Cargamos la librería de paginación
            $config['base_url'] = base_url() . 'resultados/pagina'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
            $config['total_rows'] = $this->files_model->peliculas_fecha($buscador); //calcula el número de filas
            $config['per_page'] = $pages; //Número de registros mostrados por páginas
            $config['num_links'] = 20; //Número de links mostrados en la paginación
            $config['first_link'] = 'Primera'; //primer link
            $config['last_link'] = 'Última'; //último link
            $config['next_link'] = 'Siguiente'; //siguiente link
            $config['prev_link'] = 'Anterior'; //anterior link
            $config['full_tag_open'] = '<div id="paginacion">'; //el div que debemos maquetar si queremos
            $config['full_tag_close'] = '</div>'; //el cierre del div de la paginación
            $this->pagination->initialize($config); //inicializamos la paginación
            //el array con los datos a paginar ya preparados
            $data["peliculas"] = $this->files_model->total_posts_paginados_fecha($buscador, $config['per_page'], $this->uri->segment(3));

            }
            if ($buscador = $this->session->userdata('buscar_descripcion')) {

            $buscador = $this->session->userdata('buscar_descripcion');
            $pages = 2; //Número de registros mostrados por páginas
            $this->load->library('pagination'); //Cargamos la librería de paginación
            $config['base_url'] = base_url() . 'resultados/pagina'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
            $config['total_rows'] = $this->files_model->peliculas_descripcion($buscador); //calcula el número de filas
            $config['per_page'] = $pages; //Número de registros mostrados por páginas
            $config['num_links'] = 20; //Número de links mostrados en la paginación
            $config['first_link'] = 'Primera'; //primer link
            $config['last_link'] = 'Última'; //último link
            $config['next_link'] = 'Siguiente'; //siguiente link
            $config['prev_link'] = 'Anterior'; //anterior link
            $config['full_tag_open'] = '<div id="paginacion">'; //el div que debemos maquetar si queremos
            $config['full_tag_close'] = '</div>'; //el cierre del div de la paginación
            $this->pagination->initialize($config); //inicializamos la paginación
            //el array con los datos a paginar ya preparados
            $data["peliculas"] = $this->files_model->total_posts_paginados_descripcion($buscador, $config['per_page'], $this->uri->segment(3));

            }
            if ($buscador = $this->session->userdata('buscar_resumen')) {

            $buscador = $this->session->userdata('buscar_resumen');
            $pages = 2; //Número de registros mostrados por páginas
            $this->load->library('pagination'); //Cargamos la librería de paginación
            $config['base_url'] = base_url() . 'resultados/pagina'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
            $config['total_rows'] = $this->files_model->peliculas_resumen($buscador); //calcula el número de filas
            $config['per_page'] = $pages; //Número de registros mostrados por páginas
            $config['num_links'] = 20; //Número de links mostrados en la paginación
            $config['first_link'] = 'Primera'; //primer link
            $config['last_link'] = 'Última'; //último link
            $config['next_link'] = 'Siguiente'; //siguiente link
            $config['prev_link'] = 'Anterior'; //anterior link
            $config['full_tag_open'] = '<div id="paginacion">'; //el div que debemos maquetar si queremos
            $config['full_tag_close'] = '</div>'; //el cierre del div de la paginación
            $this->pagination->initialize($config); //inicializamos la paginación
            //el array con los datos a paginar ya preparados
            $data["peliculas"] = $this->files_model->total_posts_paginados_resumen($buscador, $config['per_page'], $this->uri->segment(3));

            }
        }
        //cargamos la vista y el array data
        $this->load->view('resultados_view', $data);


        
    }
}
/*application/controllers/peliculas.php
 * el controlador
 */