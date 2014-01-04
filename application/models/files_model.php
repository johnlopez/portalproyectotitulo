<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Files_model extends CI_Model {
 
    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($titulo,$imagen,$autor,$descripcion,$resumen,$fecha,$hora,$carrera,$fecha_r)
    {
        $data = array(
            'titulo' => $titulo,
            'autor' => $autor,
            'descripcion' => $descripcion,
            'resumen' => $resumen,
            'fecha' => $fecha_r,
            'hora' => $hora,            
            'ruta' => $imagen,
            'carrera'=>$carrera,
            'fecha_r'=>$fecha
        );
        return $this->db->insert('proyectotitulo', $data);
    }

    //hacemos la consulta a la base de datos para
    //mostrar los datos de nuestro buscador
    public function buscador_poblacion($abuscar)
    {
        //usamos after para decir que empiece a buscar por
        //el principio de la cadena
        //ej SELECT poblacion from poblacion
        //WHERE poblacion LIKE '%$abuscar' limit 12
        $this->db->select('poblacion');
 
        $this->db->like('poblacion',$abuscar,'after');
 
        $resultados = $this->db->get('poblacion', 12);
 
        //si existe algún resultado lo devolvemos
        if($resultados->num_rows() > 0)
        {
 
            return $resultados->result();
 
        //en otro caso devolvemos false
        }else{
 
            return FALSE;
 
        }
 
    }
    
    //hacemos la consulta a la base de datos para
    //mostrar los datos de nuestro buscador
    public function nueva_busqueda($campos)
    {
        
        //definimos si descripción viene vacio o no para utilizar el operador and or
        $and_or = $this->input->post('resumen') != '' ? ' AND ' : ' OR ';
        $and_or = $this->input->post('titulo') != '' ? ' AND ' : ' OR ';
        $and_or = $this->input->post('autor') != '' ? ' AND ' : ' OR ';
        $and_or = $this->input->post('descripción') != '' ? ' AND ' : ' OR ';
        $and_or = $this->input->post('fecha') != '' ? ' AND ' : ' OR ';
            
        $condiciones = array();
        
        //recorremos los campos del formulario
        foreach($campos as $campo){
            
            //si llegan las variables y no están vacias
            if($this->input->post($campo) && $this->input->post($campo) != '') 
            {
                
                //definimos la condición para hacer la búsqueda de los campos y de 
                //esta forma podemos hacer uso del array condiciones fuera del loop
                $condiciones[] = "$campo LIKE '%" . $this->input->post($campo) . "%'";
                
            }
            
        }
            
        //la consulta base a la que concatenaremos la búsqueda
        $sql = "SELECT * FROM proyectotitulo ";
        
        //si existen condiciones entramos
        if(count($condiciones) > 0) 
        {
            
            //aquí creamos la condición y la concatenamos a $query
            $sql .= "WHERE " . implode ($and_or, $condiciones);
            
        }

        //asignamos a $query la consulta final
        $query = $this->db->query($sql);
        
        //con la siguiente línea podéis ver lo que arroja la 
        //consulta escogiendo varios campos, es bueno entenderlo
        //var_dump($sql); exit;
        
        //si se ha encontrado algo 
        if($query->num_rows() > 0)
        {
                
            return $query->result();
                
        }else{
            
            return FALSE;
            
        }
        
    }
    public function num_noticias()
    {
        return $this->db->get('proyectotitulo')->num_rows();
    }
    public function get_noticias($per_page)
    {
        $datos=$this->db->get('proyectotitulo',$per_page,$this->uri->segment(3));
        return $datos->result_array();
    }

    function peliculas_titulo($buscador) {
        $this->db->like('titulo', $buscador);
        $consulta = $this->db->get('proyectotitulo');
        return $consulta->num_rows();
    }

    //obtenemos todos los posts a paginar con la función
    //total_posts_paginados pasando lo que buscamos, la cantidad por página y el segmento
    //como parámetros de la misma
    function total_posts_paginados_titulo($buscador, $por_pagina, $segmento) {
        $this->db->like('titulo', $buscador);
        $consulta = $this->db->get('proyectotitulo', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
            }
            return $data;
        }
    }

    function peliculas_autor($buscador) {
        $this->db->like('autor', $buscador);
        $consulta = $this->db->get('proyectotitulo');
        return $consulta->num_rows();
    }

    //obtenemos todos los posts a paginar con la función
    //total_posts_paginados pasando lo que buscamos, la cantidad por página y el segmento
    //como parámetros de la misma
    function total_posts_paginados_autor($buscador, $por_pagina, $segmento) {
        $this->db->like('autor', $buscador);
        $consulta = $this->db->get('proyectotitulo', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
            }
            return $data;
        }
    }
    function peliculas_carrera($buscador) {
        $this->db->like('carrera', $buscador);
        $consulta = $this->db->get('proyectotitulo');
        return $consulta->num_rows();
    }

    //obtenemos todos los posts a paginar con la función
    //total_posts_paginados pasando lo que buscamos, la cantidad por página y el segmento
    //como parámetros de la misma
    function total_posts_paginados_carrera($buscador, $por_pagina, $segmento) {
        $this->db->like('carrera', $buscador);
        $consulta = $this->db->get('proyectotitulo', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
            }
            return $data;
        }
    }

    function peliculas_fecha($buscador) {
        $this->db->like('fecha', $buscador);
        $consulta = $this->db->get('proyectotitulo');
        return $consulta->num_rows();
    }

    //obtenemos todos los posts a paginar con la función
    //total_posts_paginados pasando lo que buscamos, la cantidad por página y el segmento
    //como parámetros de la misma
    function total_posts_paginados_fecha($buscador, $por_pagina, $segmento) {
        $this->db->like('fecha', $buscador);
        $consulta = $this->db->get('proyectotitulo', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
            }
            return $data;
        }
    }

    function peliculas_descripcion($buscador) {
        $this->db->like('descripcion', $buscador);
        $consulta = $this->db->get('proyectotitulo');
        return $consulta->num_rows();
    }

    //obtenemos todos los posts a paginar con la función
    //total_posts_paginados pasando lo que buscamos, la cantidad por página y el segmento
    //como parámetros de la misma
    function total_posts_paginados_descripcion($buscador, $por_pagina, $segmento) {
        $this->db->like('descripcion', $buscador);
        $consulta = $this->db->get('proyectotitulo', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
            }
            return $data;
        }
    }

    function peliculas_resumen($buscador) {
        $this->db->like('resumen', $buscador);
        $consulta = $this->db->get('proyectotitulo');
        return $consulta->num_rows();
    }

    //obtenemos todos los posts a paginar con la función
    //total_posts_paginados pasando lo que buscamos, la cantidad por página y el segmento
    //como parámetros de la misma
    function total_posts_paginados_resumen($buscador, $por_pagina, $segmento) {
        $this->db->like('resumen', $buscador);
        $consulta = $this->db->get('proyectotitulo', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
            }
            return $data;
        }
    }

    public function get_usuarios()
    {
        $sql = $this->db->get('users');
        return $sql->result();
    }
    //agregamos un usuario
    public function agregar_usuario($username,$hash)
    {
        $this->db->insert('users',array(
            'username'=> $username,
            'password' => $hash,
            'perfil' => 'administrador'
        ));
    }
    //actualizamos los datos de un usuario por id
    public function actualizar_usuario($id,$username,$password)
    {
        $this->db->where('id', $id);
        $this->db->update('users',array(
            'username'=> $username,
            'password' => $password,
            'perfil' => 'administrador'
        ));
    }
    //eliminamos un usuario por id
    public function eliminar_usuario($id)
    {
        $this->db->delete('users', array('id' => $id));
    }
    //Obtenemos los datos de un usuario por id
    public function get_usuario($id)
    {
        $sql = $this->db->get_where('users',array('id'=>$id));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }


}