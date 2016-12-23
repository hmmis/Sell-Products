<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



$config = array(
    'addProductValidation' => array(
                array(
                        'field' => 'product_code',
                        'label' => 'Product Code',
                        'rules' => 'required|is_unique[tbl_products.p_code]',
                        
                	),
                array(
                        'field' => 'product_price',
                        'label' => 'Price',
                        'rules' => 'required|numeric',
                        
                	),
                array(
                        'field' => 'product_quantity',
                        'label' => 'Quantity',
                        'rules' => 'required|numeric',
                        
                    )
        )
);

