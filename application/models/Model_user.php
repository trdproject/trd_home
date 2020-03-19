<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function Mindex() {
		$query = $this->db->query('select * from client where id_kategori=2 or id_kategori=3');
		return $query->result_array();
	}

	////////////////////////////////////////////////////////profil

	public function Mprofil()
	{
		$query = $this->db->query('select * from post where id_kategori=1');
		return $query->row();
	}

	public function Mvisi(){
		$query = $this->db->query('select * from post where id_kategori=2');
		return $query->row();
	}

	public function Mmisi(){
		$query = $this->db->query('select * from post where id_kategori=3');
		return $query->row();
	}

	////////////////////////////////////////////////////////////profil end


	///////////////////////////////////////////////////////////////////dem
	public function Mdem() {
		$query = $this->db->query('select * from post where id_kategori=4');
		return $query->row();
	}

	public function Mdemproduct() {
		$query = $this->db->query('SELECT * FROM product WHERE id_kategori=1 AND id_parent="0"');
		return $query->result_array();
	}

	public function Mqc_dem() {
		$query = $this->db->query("select * from post where id_post='PST-007' and id_kategori=4 ");
		return $query->row();
	}

	public function Mpf_dem() {
		$query = $this->db->query("select * from post where id_post='PST-008' and id_kategori=4 ");
		return $query->row();
	}

	public function Mkp_dem() {
		$query = $this->db->query("select * from post where id_post='PST-009' and id_kategori=4 ");
		return $query->row();
	}

	public function Mpj_dem() {
		$query = $this->db->query("select * from post where id_post='PST-010' and id_kategori=4 ");
		return $query->row();
	}

	/////////////////////////////////////////////////////////////////dem end


	/////////////////////////////////////////////////////////////////////sm
	public function Msm() {
		$query = $this->db->query('select * from post where id_kategori=5 and id_post="PST-005"');
		return $query->row();
	}

	public function Msmproduct(){
		$query = $this->db->query('select * from product where id_kategori=2');
		return $query->result_array();
	}

	public function Mvisi_sm() {
		$query = $this->db->query('select * from post where id_kategori=5 and id_post="PST-013"');
		return $query->row();
	}

	public function Mmisi_sm() {
		$query = $this->db->query('select * from post where id_kategori=5 and id_post="PST-014"');
		return $query->row();
	}

	public function Mwhy_sm() {
		$query = $this->db->query('select * from post where id_kategori=5 and id_post="PST-015"');
		return $query->row();
	}

	public function Msertiftext_sm() {
		$query = $this->db->query('select * from post where id_kategori=5 and id_post="PST-016"');
		return $query->row();
	}

	public function Mdivisipemb_sm() {
		$query = $this->db->query('select * from post where id_kategori=5 and id_post="PST-017"');
		return $query->row();
	}

	public function Mdivisiperb_sm() {
		$query = $this->db->query('select * from post where id_kategori=5 and id_post="PST-018"');
		return $query->row();
	}

	public function Mpengmutu_sm() {
		$query = $this->db->query('select * from post where id_kategori=5 and id_post="PST-019"');
		return $query->row();
	}
	///////////////////////////////////////////////////////////////////sm end

	///////////////////////////////////////////////////////////////////////mc
	public function Mmc(){
		$query = $this->db->query('select * from post where id_kategori=6 and id_post="PST-006"');
		return $query->row();
	}

	public function Mmcproduct() {
		$query = $this->db->query('select * from product where id_kategori=3 AND id_product != "MC-021"');
		return $query->result_array();
	}

	public function Mmcproduct2() {
		$query = $this->db->query('select * from product where id_product = "MC-021"');
		return $query->result_array();
	}

	public function Mqc_mc() {
		$query = $this->db->query("select * from post where id_post = 'PST-020' and id_kategori=6");
		return $query->row();
	}

	public function Msf_mc() {
		$query = $this->db->query('select * from post where id_post = "PST-011" and id_kategori=6');
		return $query->row();
	}

	/////////////////////////////////////////////////////////////////////////////mc end

	public function Mclient() {
		$query = $this->db->query('select * from client WHERE id_kategori=2 or id_kategori=3');
		return $query->result_array();
	}

	public function Mevent() 
	{
		$hasil = $this->db->select('*')
						  ->from('event as a')
						  ->join('files as b','a.id_event = b.id_event','inner')
						  ->group_by('b.id_event')
						  ->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result_array();
		}else{
			return array();
		}

	}

	public function Mkarir() {
		$query = $this->db->query('select * from karir where kategori=2');
		return $query->result_array();
	}

	public function Mmagang() {
		$query = $this->db->query('select * from karir where kategori=1');
		return $query->result_array();
	}

	public function Mkontak($key){
		$sql="insert into messages (name, email, subject, message, date_create) values(?,?,?,?,?);";
		$this->db->query($sql, array($key['name'], $key['email'], $key['subject'], $key['message'], date('Y-m-d')));
		return $this->db->affected_rows();
	}

	///////////////////////////////////////////////// detail product dem
	public function Mdetail_product($index){
		$sql = "SELECT * FROM product WHERE id_kategori=1 AND id_product = ?";
		$query = $this->db->query($sql,$index);
		return $query->row();

	}

	public function Mproduct_diamond() {
		$sql = $this->db->select("*")
    					->from("product")
    					->where("id_kategori=1 and id_parent = (SELECT id_product FROM product WHERE nama='Diamond Engine')")
    					->get();
      	return $sql;
	}

	public function Mproduct_ratna() {
		$sql = $this->db->select("*")
    					->from("product")
    					->where("id_kategori=1 and id_parent = (SELECT id_product FROM product WHERE nama='Ratna Engine')")
    					->get();
      	return $sql;
	}

	public function Mparent($index) {
		$sql = 'select * from product where id_kategori=1 AND id_parent = ? ';
		$query = $this->db->query($sql,$index);
		return $query->result_array();
	}

	

	/////////////////////////////////////////////////////////////////end


	///////////////////////////////////////////////////////client
	public function Mclient_dem(){
		$query = $this->db->query('select * from client where id_kategori=1');
		return $query->result_array();
	}

	public function Mclient_mc(){
		$query = $this->db->query('select * from client where id_kategori=3');
		return $query->result_array();
	}

	public function Mclient_sm(){
		$query = $this->db->query('select * from client where id_kategori=2');
		return $query->result_array();
	}
	///////////////////////////////////////////////////client end

	//sertif
	public function Msertif_dem(){
		$query = $this->db->query('select * from sertifikat where id_kategori=1');
		return $query->result_array();
	}

	public function Msertif_mc(){
		$query = $this->db->query('select * from sertifikat where id_kategori=3');
		return $query->result_array();
	}

	public function Msertif_sm(){
		$query = $this->db->query('select * from sertifikat where id_kategori=2');
		return $query->result_array();
	}

	//page
	public function view(){
   
    $query = $this->db->select('*')
    				  ->from("event as e")
    				  ->get();
	    
	 return $query->result_array();
  	}

  	public function Mlist() {
  		$query = $this->db->query('SELECT * FROM event AS e INNER JOIN files AS f ON e.id_event=f.id_event GROUP BY f.id_event desc limit 3');
  		return $query->result_array();

  	}

  	public function Mdetail_event($index) {
  		$sql = 'select * from event as e inner join files as f on e.id_event=f.id_event where f.status=1 AND e.id_event= ?';
  		$query = $this->db->query($sql, $index);
  		return $query->result_array();
  	}

  	public function Mdetail_data($index) {
  		$sql = "select * from event where id_event = ?";
  		$query = $this->db->query($sql, $index);
  		return $query->row();
  	}

  	function getEvent($limit,$start)
  	{
  		$hasil = $this->db->select('*')
						  ->from('event as a')
						  ->join('files as b','a.id_event = b.id_event','inner')
						  ->group_by('a.id_event')
						  ->limit($limit,$start)
						  ->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result_array();
		}else{
			return array();
		}
  	}

  	function countEvent()
  	{
  		return $this->db->get('event')->num_rows();
  	}

  	function get_autocomplete($search_data)
    {
    	$this->db->select('*');
    	$this->db->like('title', $search_data);
    	return $this->db->get('event', 10)->result();
    }

    function Mlainnya_dem() {
    	$query = $this->db->query("SELECT * FROM `product` WHERE id_kategori=1 AND id_parent='0' ORDER BY id_product DESC LIMIT 3");
		return $query->result_array();
    }

  
}
?>