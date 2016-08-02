<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Scategories extends MX_Controller
{

function __construct() {
parent::__construct();
}

function index() {
    $data['result'] = $this->_custom_query('SELECT * FROM categories ORDER BY name');
    
    $this->load->view('categories', $data);
    
}

function showByCat() {
	$cid = $_GET['cid'];
	 $data['prodcat'] = $this->_custom_query("SELECT * FROM products WHERE category_id = $cid ORDER BY name");

	if($data['prodcat']){
		// $ls = $data['prodcat']->result();
		// var_dump($ls);
		// exit;
		echo '<table border="1" style="margin: 0 auto;">';
		echo '<tr>';

			foreach($data['prodcat']->result() as $ewq) {
	            echo '<td><img src="'. base_url() . 'assets/uploads/thumbs/'. $ewq->image .
	            '" style=" display: inline;"><br>' . $ewq->name . '<br>PHP: ' . $ewq->price . 
	            '<br>Code: ' . $ewq->code . '<br>Manufacturer: ' . $ewq->unit . 
	            '<br><button class="btnaddcart">Add to Cart</button></td>';
			} 

		echo '</tr>';
		echo '</table>';

		echo '<script>'.
		"jQuery('.btnaddcart').click(function() {
        var val = jQuery('#valuer').val();

        console.log(val);
        ++val;
        jQuery('#cart').html(val);
        jQuery('#valuer').val(val);	
    });".
		'</script>';


    }else{
    	echo '<p style="color: red;">No record found.</p>';
    }         
}

function showBySubCat() {
	$scid = $_GET['scid'];
	 $data['prodscat'] = $this->_custom_query("SELECT * FROM products WHERE subcategory_id = $scid ORDER BY name");

	 	echo '<table border="1" style="margin: 0 auto;">';
		echo '<tr>';
			foreach($data['prodscat']->result() as $ewqs) {
	            echo '<td><img src="'. base_url() . 'assets/uploads/thumbs/'. $ewqs->image .
	            '" style=" display: inline;"><br>' . $ewqs->name . '<br>PHP: ' . $ewqs->price . 
	            '<br>Code: ' . $ewqs->code . '<br>Manufacturer: ' . $ewqs->unit . 
	            '<br><button class="btnaddcart">Add to Cart</button></td>';
			} 
		echo '</tr>';
		echo '</table>';

		echo '<script>'.
		"jQuery('.btnaddcart').click(function() {
        var val = jQuery('#valuer').val();

        console.log(val);
        ++val;
        jQuery('#cart').html(val);
        jQuery('#valuer').val(val);	
    	});".
		'</script>';
}

function get($order_by) {
$this->load->model('mdl_perfectcontroller');
$query = $this->mdl_perfectcontroller->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_perfectcontroller');
$query = $this->mdl_perfectcontroller->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_perfectcontroller');
$query = $this->mdl_perfectcontroller->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_perfectcontroller');
$query = $this->mdl_perfectcontroller->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_perfectcontroller');
$this->mdl_perfectcontroller->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_perfectcontroller');
$this->mdl_perfectcontroller->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_perfectcontroller');
$this->mdl_perfectcontroller->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_perfectcontroller');
$count = $this->mdl_perfectcontroller->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_perfectcontroller');
$max_id = $this->mdl_perfectcontroller->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_perfectcontroller');
$query = $this->mdl_perfectcontroller->_custom_query($mysql_query);
return $query;
}

}