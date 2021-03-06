<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Artikel_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get artikel by id_artikel
     */
    function get_artikel($id_artikel)
    {
        return $this->db->get_where('artikel',array('id_artikel'=>$id_artikel))->row_array();
    }
    
    /*
     * Get all artikel
     */
    function get_all_artikel()
    {
        return $this->db->get('artikel')->result_array();
    }
    
    /*
     * function to add new artikel
     */
    function add_artikel($params)
    {
        $this->db->insert('artikel',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update artikel
     */
    function update_artikel($id_artikel,$params)
    {
        $this->db->where('id_artikel',$id_artikel);
        $this->db->update('artikel',$params);
    }
    
    /*
     * function to delete artikel
     */
    function delete_artikel($id_artikel)
    {
        $this->db->delete('artikel',array('id_artikel'=>$id_artikel));
    }
}
