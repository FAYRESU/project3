<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function showProduct()
	{
        echo "Product id" . $product_id;
		$this->_showProductName();
	}
	public function _showProductName()
	{
		echo "Product name : Iphone";
	}
}

//http://localhost/Project3/index.php/mngproduct/showproduct
//http://localhost/Project3/index.php/mngproduct/showproduct/2499