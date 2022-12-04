<?php 
class Persona extends CI_Model {

    public function agregar($usuario)
    {
        $this->db->insert('personas', $usuario);
    }

    public function seleccionar_todo()
    {
        $this->db->select('*');
        $this->db->from('personas');
        return $this->db->get()->result();
    }

    public function eliminarPersona($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("personas");
        return true;
    }

    public function editar($id_editable)
    {
        $query = $this->db->where('id', $id_editable)->get('personas')->result();
        return $query;
    }

    public function updatePersona( $atrapar)
    {
        $update = $this->db->where('id', $atrapar['id'])->update('personas', $atrapar);
        if($update == true) {
            return $msg = "Datos actualizados con éxito";
        }
    }




}


?>