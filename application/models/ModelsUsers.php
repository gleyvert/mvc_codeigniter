<?php
class ModelsUsers extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }
    public function save($user, $user_info)
    {
        $this->db->trans_start(); //true dentro del metodo para que retorne el resultado sin ejecutal la accion de insert
        $this->db->insert('usuarios',$user);
        $user_info['id_usuario'] = $this->db->insert_id();
        $this->db->insert('medicos', $user_info);

         $this->db->trans_complete();
         return !$this->db->trans_status() ? false : true;
    }
    public function getUsers(){
        $sql = $this->db->order_by('id_usuario','DESC')->get('usuarios');
        return $sql->result();
    }
    public function getPaginate($limit,$offset){
        $sql = $this->db->order_by('id_usuario','DESC')->get('usuarios',$limit,$offset);
        return $sql->result();
    }
    public function getUser($id){
        // SELECT *
        // FROM usuarios
        // JOIN medicos
        //     ON usuarios.id_usuario = medicos.id_usuario
        // WHERE usuarios.id_usuario = $id LIMIT 1
        $this->db->join('medicos','usuarios.id_usuario = medicos.id_usuario');
        $user = $this->db->get_where('usuarios', array('usuarios.id_usuario'=>$id),1);
        return $user->row_array();
    }
}
