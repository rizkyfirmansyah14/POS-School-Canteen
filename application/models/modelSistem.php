<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelSistem extends CI_Model {

    public function simpanMenu(){
        $data = array(
            'id_order' => "",
            'nama_menu' =>  $this->input->post('nama'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga'),
            'sub' => $this->input->post('jumlah') * $this->input->post('harga')
        );

        if ($this->db->insert('pesan', $data) > 0) {
            header("Location:".base_url().'sistem/dataAdmin');
        }else {
            echo "erroer";
        }
        echo "data berhasil di simpan";
    }

    public function simpanDaftarMenu(){
        $data = array(
            'id' => "",
            'no_m' => $this->input->post('meja'),
            'tot_har' => $this->input->post('tot_har'),
            'date' => date("Y/m/d"),
            'status' => "onproses"
        );

        if ($this->db->insert('invoice', $data) > 0) {
            header("Location:".base_url().'sistem/dataAdmin');
        }else {
            echo "erroer";
        }
        echo "data berhasil di simpan";
    }

    public function simpanProduk(){
        $data = array(
            'id' => "",
            'nama' => $this->input->post('nama_menu'),
            'desc' => $this->input->post('desc'),
            'jenis' => $this->input->post('jenis'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'gambar' => $this->input->post('gambar'),
             
        );

        if ($this->db->insert('produk', $data) > 0) {
            header("Location:".base_url().'sistem/dataKasir');
        }else {
            echo "erroer";
        }
        echo "data berhasil di simpan";
    }

    public function delete($id){
        $where = array('id_order' => $id);
        $this->db->where($where);
        $this->db->delete('pesan');
        header("Location:".base_url()."sistem/dataAdmin");
    }

    public function delete_P($id){
        $where = array('id' => $id);
        $this->db->where($where);
        $this->db->delete('produk');
        header("Location:".base_url()."sistem/dataKasir");
    }

    public function deleteall(){
        $this->db->empty_table('pesan');
        header("Location:".base_url()."sistem/dataAdmin");
    }
    

	public function get_user(){
        $data = $this->db->get('user');
        return $data->result(); 
    }

    public function count_user(){
        $data = $this->db->get('user');
        return $data->num_rows();
    }

    public function get_i(){
        $data = $this->db->get('invoice');
        return $data->result(); 
    }

    public function count_i(){
        $data = $this->db->get('invoice');
        return $data->num_rows();
    }

    public function getAll()
     {
          $this->db->select('*');
          $this->db->from('invoice');
          return $this->db->get();
     }


    public function get_p(){
        $data = $this->db->get('produk');
        return $data->result();
    }

    public function count_p(){
        $data = $this->db->get('produk');
        return $data->num_rows();
    }

    public function get_o(){
        $data = $this->db->get('pesan');
        return $data->result();
    }

    public function count_o(){
        $data = $this->db->get('pesan');
        return $data->num_rows();
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }


    public function cek_login($table, $where){
        return $this->db->get_where($table, $where);
    }

    function edit_menu($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_menu($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
    }	
    

    function edit_p($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_p($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
    }	
    

}