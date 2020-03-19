<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();	
		$this->load->model('Model_user');
	}
	
	public function index()
	{
		$data['index'] = $this->Model_user->Mindex();
		$this->load->view('user/index', $data);

	}

	public function profil()
	{
		$data['profil'] = $this->Model_user->Mprofil();
		$data['visi'] = $this->Model_user->Mvisi();
		$data['misi'] = $this->Model_user->Mmisi();
		$data['client'] = $this->Model_user->Mclient();
		$this->load->view('user/profil', $data);
	}

	public function unit_dem()
	{
		$data['dem'] = $this->Model_user->Mdem();
		$data['pdem'] = $this->Model_user->Mdemproduct();
		$data['cdem'] = $this->Model_user->Mclient_dem();
		$data['sdem'] = $this->Model_user->Msertif_dem();
		$data['qcdem'] = $this->Model_user->Mqc_dem();
		$data['pfdem'] = $this->Model_user->Mpf_dem();
		$data['kpdem'] = $this->Model_user->Mkp_dem();
		$data['pjdem'] = $this->Model_user->Mpj_dem();
		$this->load->view('user/unit_dem', $data);
	}

	public function unit_mc()
	{
		$data['mc'] = $this->Model_user->Mmc();
		$data['pmc'] = $this->Model_user->Mmcproduct();
		$data['pmc2'] = $this->Model_user->Mmcproduct2();
		$data['smc'] = $this->Model_user->Msertif_mc();
		$data['cmc'] = $this->Model_user->Mclient_mc();

		$data['qcmc'] = $this->Model_user->Mqc_mc();
		$data['sfmc'] = $this->Model_user->Msf_mc();
		$this->load->view('user/unit_mc', $data);
	}

	public function unit_sm()
	{
		$data['sm'] = $this->Model_user->Msm();
		$data['psm'] = $this->Model_user->Msmproduct();
		$data['ssm'] = $this->Model_user->Msertif_sm();
		$data['csm'] = $this->Model_user->Mclient_sm();

		$data['vsm'] = $this->Model_user->Mvisi_sm();
		$data['msm'] = $this->Model_user->Mmisi_sm();
		$data['wsm'] = $this->Model_user->Mwhy_sm();
		$data['stsm'] = $this->Model_user->Msertiftext_sm();
		$data['dpsm'] = $this->Model_user->Mdivisipemb_sm();
		$data['dksm'] = $this->Model_user->Mdivisiperb_sm();
		$data['pmsm'] = $this->Model_user->Mpengmutu_sm();
		$this->load->view('user/unit_sm', $data);
	}

	public function galery()
	{
		$data['event'] = $this->Model_user->Mevent();
		$data['list'] = $this->Model_user->Mlist();
		$this->load->library('pagination');
		
		$config['base_url'] 	= base_url('home/galery/');
		$config['total_rows'] 	= $this->Model_user->countEvent();
		$config['per_page'] 	= 2;
		$data['start']			= $this->uri->segment(3);
		   // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);

		$data = array(
						'event' 	=> $this->Model_user->getEvent($config['per_page'],$data['start']),
						'list'		=> $this->Model_user->Mlist(),
					);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('user/galery', $data);

		$key = array('menu' => 'event_id',);
		$this->session->set_userdata($key);
	}

	public function karir()
	{
		$data['karir'] = $this->Model_user->Mkarir();
		$data['magang'] = $this->Model_user->Mmagang();
		$this->load->view('user/karir', $data);

		$key = array('menu' => 'karir',);
		$this->session->set_userdata($key);
	}

	public function sukses(){
		$this->load->view('user/sukses');

		$key = array('menu' => 'sukses',);
		$this->session->set_userdata($key);
	}

	public function kontak(){
		$this->load->view('user/kontak');

		$key = array('menu' => 'kontak',);
		$this->session->set_userdata($key);
	}

	public function insert() {
		$this->form_validation->set_rules('input_name', 'name', 'trim|required');
		$this->form_validation->set_rules('input_email', 'email', 'trim|required');
		$this->form_validation->set_rules('input_subject', 'subject', 'trim|required');
		$this->form_validation->set_rules('input_message', 'message', 'trim|required');

		if ($this->form_validation->run()==FALSE) {
			// $data['kontak'] = $this->Model_user->Mkontak();
			$this->load->view('user/kontak');
		} else {
			$send['name'] = $this->input->post('input_name');
			$send['email'] = $this->input->post('input_email');
			$send['subject'] = $this->input->post('input_subject');
			$send['message'] = $this->input->post('input_message');

			$insert['add'] = $this->Model_user->Mkontak($send);
			$this->load->view('user/kontak', $insert);

			$this->session->set_flashdata('msg', '');
			redirect('Home/sukses');
		}

		$key = array('menu' => 'insert_id',);
		$this->session->set_userdata($key);
	}

	public function qc_dem(){
		$this->load->view('user/qc_dem');

		$key = array('menu' => 'qc_dem_id',);
		$this->session->set_userdata($key);
	}

	public function qc_mc(){
		$this->load->view('user/qc_mc');

		$key = array('menu' => 'qc_mc_id',);
		$this->session->set_userdata($key);
	}

	// detail product dem
	public function detail_product($index){
		$data['parent'] = $this->Model_user->Mparent($index);
		$data['product'] = $this->Model_user->Mproduct_diamond();
		$data['product1'] = $this->Model_user->Mproduct_ratna();
		// $data['diamond'] = $this->Model_user->Mdiamond();
		$this->load->view('user/detail_product', $data);

		$key = array('menu' => 'det_prod_id',);
		$this->session->set_userdata($key);
	}

	public function detail_product2($index){
		$data['array'] = $this->Model_user->Mdetail_product($index);
		$data['lainnya'] = $this->Model_user->Mlainnya_dem();
		$this->load->view('user/detail_product2', $data);

		$key = array('menu' => 'det_prodd_id',);
		$this->session->set_userdata($key);
	}

	public function komponen(){
		$this->load->view('user/komponen');

		$key = array('menu' => 'komponen',);
		$this->session->set_userdata($key);
	}

	public function detail_event($index){
		$data['detail'] = $this->Model_user->Mdetail_event($index);
		$data['data'] = $this->Model_user->Mdetail_data($index);
		$this->load->view('user/detail_event', $data);

		$key = array('menu' => 'det_event',);
		$this->session->set_userdata($key);
	}

  	public function autocomplete()
    {
        // load model
    	$this->load->model('Model_user');
    	$search_data = $this->input->post('search_data');
    	$result = $this->Model_user->get_autocomplete($search_data);
    	if (!empty($result))
    	{
    		foreach ($result as $row) { ?>
    			<li  class='list-group-item'>
    			<a href="<?php echo site_url('Home/detail_event/'.$row->id_event);?>"><?php echo $row->title; ?></a>
    			<button><i class="fa fa-search"></i></button>
    		   </li>
    		<?php }
    	}
    	else
    	{
    		echo "<li class='list-group-item'> <em> Not found ... </em> </li>";
    	}

    }

    function error404()
    {
    	$this->output->set_status_header('404');
    	$this->load->view('errors/error_404');

    }

    function test(){
    	$data['pdem'] = $this->Model_user->Mdemproduct();
    	$this->load->view('user/test', $data);
    }

    function coba() {
    	$this->load->view('user/coba');
    }



}

?>