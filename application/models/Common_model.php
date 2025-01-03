<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model{

    public function __construct(){
        $query = $this->db->query("SELECT * FROM ayarlar")->row();
        $this->config->set_item('base_url',$query->site_url);
    }

    public function get($where,$table){
        return $this->db->where($where)->get($table)->row();
    }

    public function getAll($where,$table){
        return $this->db->where($where)->get($table)->result();
    }

    public function getlistAll($where,$table,$orderbycolumn="id",$orderby="DESC"){
        return $this->db
        ->where($where)
        ->order_by($orderbycolumn,$orderby)
        ->get($table)
        ->result();
    }

    public function add($table,$where){
        return $this->db->insert($table,$where);
    }
    
    public function getcount($where,$table){
        return $this
            ->db
            ->where($where)
            ->count_all_results($table);
    }

    public function update($where,$data,$table){
        return $this->db->where($where)->update($table,$data);
    }

    public function custom($query,$status){
        if($status == true){
            return $this->db->query($query)->result();
        }else{
            return $this->db->query($query)->row();
        }
    }

   
    public function getLimitAll($where,$limit="",$pkCount="",$table,$orderbycolumn="id",$orderby="DESC",$select="*"){
        return $this
            ->db
            ->select($select) 
            ->where($where)
            ->order_by($orderbycolumn,$orderby)
            ->limit($limit,$pkCount)
            ->get($table)
            ->result();
    }

    public function Delete($id)
    {
        return $this ->db->where('urun_id',$id)->delete($this->tableName);
    }
    
}

?>