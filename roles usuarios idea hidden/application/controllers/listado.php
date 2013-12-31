<?php

class Listado extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->folder = 'uploads/';
		$this->load->library('form_validation','pagination');
		$this->load->model('files_model');
		

	}


	
public function index()
	{
		$files = get_filenames($this->folder, FALSE);
	
		if($files){

		$config['base_url']=base_url().'listado/index';
		$config['total_rows']=$this->files_model->num_noticias();
		$config['per_page']=6;
		$config['num_links']=5;
		$config['first_link']='Primero';
		$config['last_link']='Ultimo';
		$config['next_link']='Siguiente';
		$config['prev_link']='Anterior';
		
		$config['curt_tag_open'] = '<b class = "actual">';
		$config['curt_tag_close'] = '</b>';

		$config['full_tag_open'] = '<b id="paginacion">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);

		$data = array('titulo' => 'Buscador', 
					  'resultados' => $this->busqueda(),					  
					  'files'=>$files,
					  'noticias'=>$this->files_model->get_noticias($config['per_page']), 'paginacion' =>$this->pagination->create_links()
					  );
             
        }else{
        	$config['base_url']=base_url().'listado/index';
		$config['total_rows']=$this->files_model->num_noticias();
		$config['per_page']=6;
		$config['num_links']=5;
		$config['first_link']='Primero';
		$config['last_link']='Ultimo';
		$config['next_link']='Siguiente';
		$config['prev_link']='Anterior';
		
		$config['curt_tag_open'] = '<b class = "actual">';
		$config['curt_tag_close'] = '</b>';

		$config['full_tag_open'] = '<b id="paginacion">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);
    		$data = array('titulo' => 'Buscador', 
				  'resultados' => $this->busqueda(),
				  'files'=>NULL,
				  'noticias'=>$this->files_model->get_noticias($config['per_page']), 'paginacion' =>$this->pagination->create_links()
				  );
        	
        }

        $this->load->view('listado_view',$data);	
		
	}

//************ SE OBTIENEN LOS NOMBRES DE LOS ARCHIVOS ****************

//************ DESCARGA DE ARCHIVOS ***********************

public function downloads($name){
		 
	   $data = file_get_contents($this->folder.$name);  
       force_download($name,$data); 
	  
}



	
	//aquí es donde hacemos toda la búsqueda del buscador
	
	public function busqueda()
	{
		
		if($this->input->post('buscar'))
		{
			
			//limpiamos los campos del formulario, no necesitamos validar
			$this->form_validation->set_rules('titulo', 'titulo', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('resumen', 'resumen', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('autor', 'autor', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('descripcion', 'descripcion', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('fecha', 'fecha', 'trim|max_length[40]|xss_clean');		 

	        $this->form_validation->set_rules('sector', 'sector', 'trim|xss_clean');
	 		$this->form_validation->set_rules('poblacion', 'poblacion', 'trim|xss_clean');
				
			//los campos del formulario deben tener el mismo nombre
			//que los de la base de datos a buscar, esto luego lo 
			//recorremos para comprobar como vienen				
			$campos = array('sector', 'poblacion', 'resumen','titulo','autor','descripcion','fecha');
			
			//envíamos los datos al modelo para hacer la búsqueda
			$resultados = $this->files_model->nueva_busqueda($campos);
			
			if($resultados !== FALSE)
			{
				
				return $resultados;
				
			}
			
		}
		
		
	}

	//a través de jquery llenamos el autocompletado
	public function poblaciones()
    {
        //si es una petición ajax y existe una variable post
        //llamada info dejamos pasar
        if($this->input->is_ajax_request() && $this->input->post('info'))
        {
 
            $abuscar = $this->security->xss_clean($this->input->post('info'));
 
            $search = $this->files_model->buscador_poblacion($abuscar);
 
            //si search es distinto de false significa que hay resultados
            //y los mostramos con un loop foreach
            if($search !== FALSE)
            {
 
                foreach($search as $fila)
                {
                ?>
 
                    <p><a title="<?php echo $fila->poblacion ?>" href="" 
                    	onclick="$('.poblacion').val($(this).attr('title')); ">
                    	<?php echo $fila->poblacion ?>
                    </a></p>
 
                <?php
                }
 
            //en otro caso decimos que no hay resultados
            }else{
            ?>
 
                <p><?php echo 'No hay resultados' ?></p>
 
            <?php
            }
 
        }
 
    }

    //*********** Ver Detalles de un archivos*************
public function detalles(){	

   $files = get_filenames($this->folder, FALSE);
	
		if($files){
		$data = array('titulo' => 'Buscador', 
					  'resultados' => $this->busqueda(),
					  'files'=>$files
					  );
             
        }else{
    		$data = array('titulo' => 'Buscador', 
				  'resultados' => $this->busqueda(),
				  'files'=>NULL
				  );
        	
        }

        
        
   $this->load->view('detalles_view',$data);	
 
}

}