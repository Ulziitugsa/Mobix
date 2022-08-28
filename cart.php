	<?php

class Item {

    var $productID;
    var $model;
    var $qty;
    var $price;
    var $deleted = false;

    function get_item_cost() {
        return $this->qty * $this->price;
    } 	 	

    function delete_item() {
        $this->deleted = true;
    }

    function __construct($productID, $model, $qty, $price) {
        $this->productID = $productID;
        $this->model = $model;
        $this->qty = 1;
        $this->price = $price;
		

    }

    function get_productID() {
        return $this->productID;
    }

    function get_model() {
        return $this->model;
    }

    function get_qty() {
        return $this->qty;
    }

    function get_price() {
        return $this->price;
    }

}

class Cart {

    var $items;
    var $depth;

    function __construct() {
        $this->items = array();
        $this->depth = 0;
    }

    function add_item($item) {
        $this->items[$this->depth] = $item;
        $this->depth++;
    }

    function delete_item($productID) {
		for($i=0; $i<$this->depth; $i++)
		{
			
			if($this->items[$i]->get_ProductID()==$productID)
			{
				$this->items[$i]->delete_item();
			}
		}

    }

    function get_depth() {
        return $this->depth;
    }
	
	function find_item($productID){
		for($i=0; $i<$this->depth; $i++)
		{
			if($this->items[$i]->get_ProductID()==$productID)
			{
				return true;
			}
		}
	}

    function get_item($item_no) {
        return $this->items[$item_no];
    }

}

?>