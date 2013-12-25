<?php
class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los usuarios
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