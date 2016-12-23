<?php
	class Model_product extends CI_Model{
		
		public function __construct(){
			
			parent::__construct();
		}
		
		public function getProducts(){

			$sql = $this->db->get("tbl_products"); 

			return $sql->result_array();
		}

		public function getSells(){

			$sql = $this->db->get("tbl_sell"); 

			return $sql->result_array();
		}

		public function insertProducts($data){

			 $this->db->insert("tbl_products",$data); 
		}

		public function deleteProducts($id){

			$this->db->where('p_code', $id);
			$this->db->delete('tbl_products');
		}

		public function insertSells($data){

			$this->db->insert("tbl_sell",$data); 
		}

}
?>
