<?php
class blogs extends CI_Controller
 {
 	function __construct()
 	{
         parent::__construct();
    }
 	public function index()
 	{
 		$this->load->database();
 		$query=$this->db->query("SELECT * FROM blog");
 		$data['blogs']=$query->result_array();
 		$this->load->view('viewsblog',$data);
 

 		$data['blogs']= array (
			['title'=>'Artikel Pertama',
			'content'=>'<p> blablablablablablablablablabla.</p>'],
			['title'=>'Artikel Kedua',
			'content'=>'<p> blablablablablablablablablabla.</p>'],
			['title'=>'Artikel Ketiga',
			'content'=>'<p> blablablablablablablablablabla.</p>'],
			
		);
		
		
		
		
 	}
 	 }
 	
 ?>
			
