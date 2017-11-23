<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class blog extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form')); //mengambil helper yang sudah disediakan CI
    }
    public function index()
    {
        $this->load->view("mtk"); //maksudanya menampilkan file hello.php yg difolder view
    }
    
    public function perkalian() //membuat function perkalian
    {
        $this->load->library('form_validation'); //mengambil validasi di library yg sudah disediakan CI
        $this->form_validation->set_rules('v1','Variabel 1','required|integer');
        $this->form_validation->set_rules('v2','Variabel 2','required|integer');
        if ($this->form_validation->run())
        {
        $data['v1']=(int)$this->input->post('v1',true); //mengambil nilai yg dimasukan
        $data['v2']=(int)$this->input->post('v2',true); //mengambil nilai yg dimasukan
        $data['hasil']=$data['v1']*$data['v2']; //proses data
        }
        else
        {
        $data['v1']=0;
        $data['v2']=0;
        $data['hasil']=0;
        }
        $this->load->view('perkalian',$data); //menampilkan hasil proses data
    }
    
    public function luassegitiga() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('v1','Variabel 1','required|integer');
        $this->form_validation->set_rules('v2','Variabel 2','required|integer');
        if($this->form_validation->run()){
            $data['v1']=(int)$this->input->post('v1',true); //mengambil nilai yg dimasukan
            $data['v2']=(int)$this->input->post('v2',true); //mengambil nilai yg dimasukan
            $data['v3']=2;
            $data['hasil']=$data['v1']*$data['v2']/$data['v3']; //proses data
        } else {
            $data['v1']=0;
            $data['v2']=0;
            $data['hasil']=0;
        }
        $this->load->view('luassegitiga',$data);

    }
    public function pertambahan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('v1','Variabel 1','required|integer');
        $this->form_validation->set_rules('v2','Variabel 2','required|integer');
        if($this->form_validation->run()){
        $data['v1']=(int)$this->input->post('v1',true);
        $data['v2']=(int)$this->input->post('v2',true);
        $data['hasil']=$data['v1']+$data['v2'];
        } else {
            $data['v1']=0;
            $data['v2']=0;
            $data['hasil']=0;
        }
        $this->load->view('pertambahan',$data);
    }
    public function pengurangan()
    {
        $data['v1']=(int)$this->input->post('v1',true);
        $data['v2']=(int)$this->input->post('v2',true);
        $data['hasil']=$data['v1']-$data['v2'];;
        $this->load->view('pengurangan',$data);
    }
    
    public function pembagian()
    {
        $this->load->library('form_validation');
        $data['v1']=(int)$this->input->post('v1',true);
        $data['v2']=(int)$this->input->post('v2',true);
        if ($data['v2']>0)
        $data['hasil']=$data['v1']/$data['v2'];
        else
        $data['hasil']='Error, v2 tidak boleh 0 !';
        $this->load->view('pembagian',$data);
    }
    public function luaspersegipanjang()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('v1','Variabel 1','required|integer');
        $this->form_validation->set_rules('v2','Variabel 2','required|integer');
        if($this->form_validation->run()){
            $data['v1']=(int)$this->input->post('v1',true); //mengambil nilai yg dimasukan
            $data['v2']=(int)$this->input->post('v2',true); //mengambil nilai yg dimasukan
            $data['v3']=2;
            $data['hasil']=$data['v1']*$data['v2']; //proses data
        } else {
            $data['v1']=0;
            $data['v2']=0;
            $data['hasil']=0;
        }
        $this->load->view('luaspersegipanjang',$data);
    }
    public function luaslingkaran() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('v1','Variabel 1','required|integer');
    if($this->form_validation->run()){
        $data['v1']=(int)$this->input->post('v1',true); //mengambil nilai yg dimasukan
        $data['v2']=22; //mengambil nilai yg dimasukan
        $data['v3']=7;
        $data['jari']=$data['v1']*$data['v1'];
        $data['hasil']=$data['v2']/$data['v3']*$data['jari']; //proses data
    } else {
        $data['v1']=0;
        $data['v2']=0;
        $data['v3']=0;
        $data['hasil']=0;
    }
    $this->load->view('luaslingkaran',$data);
}
 public function layanglayang() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('v1','Variable 1','required|integer');
    $this->form_validation->set_rules('v2','Variable 2','required|integer');

    if($this->form_validation->run()){
       $data['v1']=(int)$this->input->post('v1',true); //mengambil nilai yg dimasukan
       $data['v2']=(int)$this->input->post('v2',true); //mengambil nilai yg dimasukan
       $data['v5']=2;
       $data['hasil']=$data['v1']*$data['v2']/$data['v5']; //proses data
    } else {
       $data['v1']=0;
       $data['v2']=0;
       $data['v5']=0;
       $data['hasil']=0;
    }
    $this->load->view('layanglayang',$data);
}
public function luaskubus() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('v1','Variabel 1','required|integer');
    if($this->form_validation->run()){
        $data['v1']=(int)$this->input->post('v1',true); //mengambil nilai yg dimasukan
        $data['hasil']=$data['v1']*$data['v1']*$data['v1']*$data['v1']; //proses data
    } else {
        $data['v1']=0;
        $data['hasil']=0;
    }
    $this->load->view('luaskubus',$data);
}
}