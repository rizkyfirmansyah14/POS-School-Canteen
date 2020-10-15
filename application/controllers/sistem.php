<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class sistem extends CI_Controller {

	public function __construct(){
        parent ::__construct();
        $this->load->model('modelSistem');
    }

    public function base(){
        $data['title'] = "base";

        $data['user'] = $this->modelsistem->get_user();
        $data['c_user'] = $this->modelsistem->count_user();
    }


    public function login(){
        $judul['title'] = "Login";
        $this->load->view('index', $judul);
	}
	
	public function index()
	{
		$this->load->view('index');
    }
    
    public function home()
	{
		$this->load->view('home');
	}

	public function pelayan()
	{
		$this->load->view('pelayan/index');
    }

    public function insert()
	{
		$this->load->view('edit/index3');
    }


    public function modal1()
	{
        $data['title'] = "Auction";
        $data['user2'] = $this->modelSistem->get_i();
        $data['c_user2'] = $this->modelSistem->count_i();

		$this->load->view('modal/index2');
    }
    

    public function simpan(){
        $this->modelSistem->simpanMenu();
    }

    public function simpan1(){
        $this->modelSistem->simpanDaftarMenu();
    }

    public function simpanp(){
        $this->modelSistem->simpanProduk();
    }

    public function deleteData($id)
    {
        
        $this->modelSistem->delete($id);
    }

    public function deleteData_p($id)
    {
        
        $this->modelSistem->delete_p($id);
    }



    function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->modelSistem->edit_data($where,'produk')->result();
        $this->load->view('order/index',$data);
    }


    public function sum(){
        $data['sum'] = $this->modelSistem->get_sum();
        $this->load->view('modal/index1',$data);
    }

	// load data
    public function datauser(){
        $data['title'] = "Auction";
        $data['user'] = $this->modelSistem->get_user();
        $data['c_user'] = $this->modelSistem->count_user();

        $this->load->view('home', $data);
    }

    public function dataAdmin(){
        $data['title'] = "Auction";
        $data['user'] = $this->modelSistem->get_p();
        $data['c_user'] = $this->modelSistem->count_p();
        $data['title'] = "Auction";
        $data['user1'] = $this->modelSistem->get_o();
        $data['c_user1'] = $this->modelSistem->count_o();
        $data['title'] = "Auction";
        $data['user2'] = $this->modelSistem->get_i();
        $data['c_user2'] = $this->modelSistem->count_i();

        $this->load->view('home', $data);
    }

    public function dataKasir(){
        $data['title'] = "Auction";
        $data['user'] = $this->modelSistem->get_p();
        $data['c_user'] = $this->modelSistem->count_p();
        $data['title'] = "Auction";
        $data['user1'] = $this->modelSistem->get_o();
        $data['c_user1'] = $this->modelSistem->count_o();
        $data['title'] = "Auction";
        $data['user2'] = $this->modelSistem->get_i();
        $data['c_user2'] = $this->modelSistem->count_i();

        $this->load->view('kasir/index', $data);
    }
	

	 // login_user
	 public function loginUser(){
        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => md5($passwords),
        );
        $cek = $this->modelSistem->cek_login("user", $where)->num_rows();

        if ($cek > 0) {
        $cek_roel = $this->modelSistem->cek_login("user", $where)->row(0)->level;
            $data_session = array(
                'usernama' => $usernames,
                'level' => $cek_roel,
            );

            $this->session->set_userdata($data_session);

            if ($this->session->userdata('level') == '1') {
                $data['title'] = "Auction";
                $data['user'] = $this->modelSistem->get_p();
                $data['c_user'] = $this->modelSistem->count_p();
                $data['title'] = "Auction";
                $data['user1'] = $this->modelSistem->get_o();
                $data['c_user1'] = $this->modelSistem->count_o();
                $data['user2'] = $this->modelSistem->get_i();
                $data['c_user2'] = $this->modelSistem->count_i();
                
                $this->load->view('modal/index1',$data);
                $this->load->view('modal/index2',$data);
                $this->load->view('home', $data);
            }else if($this->session->userdata('level') == '2'){
                $data['title'] = "Auction";
                $data['user'] = $this->modelSistem->get_user();
                $data['c_user'] = $this->modelSistem->count_user();
                $data['title'] = "Auction";
                $data['user'] = $this->modelSistem->get_p();
                $data['c_user'] = $this->modelSistem->count_p();
                $data['user1'] = $this->modelSistem->get_o();
                $data['c_user1'] = $this->modelSistem->count_o();
                $data['user2'] = $this->modelSistem->get_i();
                $data['c_user2'] = $this->modelSistem->count_i();


                $this->load->view("kasir/index", $data);
            }
        }else {
            echo "data tidak temukan";
        }
    }

    function edit_menu($id){
        $where = array('id_order' => $id);
        $data['user1'] = $this->modelSistem->edit_menu($where,'pesan')->result();
        $this->load->view('edit/index',$data);
    }

    function update(){

        $id = $this->input->post('id');
        $judul = $this->input->post('nama_menu');
        $isi = $this->input->post('jumlah');

        $data = array(
            'nama_menu' => $judul,
            'jumlah' => $isi
        );
    
        $where = array(
            'id_order' => $id
        );
        $this->modelSistem->update_menu($where,$data,'pesan');
        redirect('sistem/dataAdmin');
    }

    function edit_p($id){
        $where = array('id' => $id);
        $data['user'] = $this->modelSistem->edit_menu($where,'produk')->result();
        $this->load->view('edit/index2',$data);
    }

    function update_p(){

        $id = $this->input->post('id');
        $nama = $this->input->post('nama_menu');
        $desc = $this->input->post('desc');
        $jenis = $this->input->post('jenis');
        $harga = $this->input->post('harga');
        $isi = $this->input->post('jumlah');
        $pic = $this->input->post('gambar');

        $data = array(
            'nama' => $nama,
            'desc' => $desc,
            'jenis' => $jenis,
            'harga' => $harga,
            'jumlah' => $isi,
            'gambar' => $pic
        );
    
        $where = array(
            'id' => $id
        );
        $this->modelSistem->update_p($where,$data,'produk');
        redirect('sistem/dataKasir');
    }

     // export to exel
     public function export()
     {
         ob_start();
 
         $data['c_user2'] = $this->modelSistem->count_i();
         $data['user2'] = $this->modelSistem->get_i();
         $this->load->view('modal/index2',$data);
 
          $user = $this->modelSistem->getAll()->result();
 
          $spreadsheet = new Spreadsheet;
 
          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Nomor Pesanan')
                      ->setCellValue('C1', 'Nomor Meja')
                      ->setCellValue('D1', 'Total Harga')
                      ->setCellValue('E1', 'Tanggal')
                      ->setCellValue('F1', 'Status');
 
          $kolom = 2;
          $nomor = 1;
          $id=1;
          foreach($user as $masyarakat) {
               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $id++)
                           ->setCellValue('B' . $kolom, $masyarakat->no_p)
                           ->setCellValue('C' . $kolom, $masyarakat->no_m)
                           ->setCellValue('D' . $kolom, $masyarakat->tot_har)
                           ->setCellValue('E' . $kolom, $masyarakat->date)
                           ->setCellValue('F' . $kolom, $masyarakat->status);
 
               $kolom++;
               $nomor++;
 
          }
 
         $writer =  new Xlsx($spreadsheet);
         ob_end_clean();
         
         header('Content-Type: application/vnd.ms-excel');
         header('Content-Disposition: attachment;filename="order.xlsx"');
         header('Cache-Control: max-age=0');
 
         $writer->save('php://output');
     }

	function logout(){
        $this->session->sess_destroy();
        redirect('sistem/index');
    }
}