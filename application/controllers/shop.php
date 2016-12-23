<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_product');
		$data['products']=$this->Model_product->getProducts();
		$this->parser->parse('view_productsList',$data);
	}

	public function delete($id)
	{
		$this->load->model('Model_product');
		$this->Model_product->deleteProducts($id);

		redirect(base_url().'shop/index');
	}


	public function addProduct()
	{
		if($this->input->post('submitAddProduct')==FALSE)
		{
			redirect(base_url().'shop/index');
			
		}
		else{


			if ($this->form_validation->run('addProductValidation') == FALSE)
            {
                    $this->load->model('Model_product');
					$data['products']=$this->Model_product->getProducts();
					$this->parser->parse('view_productsList.php',$data);
            }
            else
            {
                    $data = array(

						'p_code' => $this->input->post('product_code'),
						'color' => $this->input->post('product_color'),
						'price' => $this->input->post('product_price'),
						'quantity' => $this->input->post('product_quantity')					
					);

                    $this->load->model('Model_product');
					$this->Model_product->insertProducts($data);
					redirect(base_url().'shop/index');
            }		
		}	
	}


	public function checkout()
		{
			if($this->input->post('submitCheckout')==FALSE)
			{
				redirect(base_url().'shop/index');
				
			}
			else{


				
	                    $data = array(

							'client_name' => $this->input->post('customername'),
							'mobile' => $this->input->post('phoneNumber'),
							'email' => $this->input->post('email'),
							'address' => $this->input->post('address'),

							'memo_no' => uniqid('memo',TRUE),
							'total_price' => $this->input->post('fianlPrice'),
							'total_collection' => $this->input->post('advanced'),
							'due' => $this->input->post('due')	,
							'selling_date' => $this->input->post('sellingDate'),
							'delivary_date' => $this->input->post('deliveryDate')				
						);

	                    $this->load->model('Model_product');
						$this->Model_product->insertSells($data);
						
	            		redirect(base_url().'shop/report');			
			}
		}

		public function report()
		{
			 $this->load->model('Model_product');
			$data['sells']=$this->Model_product->getSells();
			$this->parser->parse('view_report',$data);	
		}

	
		
}

