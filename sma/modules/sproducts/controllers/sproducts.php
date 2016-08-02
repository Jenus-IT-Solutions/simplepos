<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Sproducts extends MX_Controller
{

function __construct() {
parent::__construct();
}

function index() {
//    echo 'Hello Pow';
    //$this->load->model('mdl_products');
    $data['query'] = $this->get('id');
     //$data['query'] = $this->mdl_products->get('id');
    
    $this->load->module('ssubcategories');
    $this->ssubcategories->index();
    $this->load->view('products', $data);
}

function search() {
    $input = $_GET['input'];
   	$data['query'] = $this->_custom_query("SELECT * FROM products WHERE name LIKE '%$input%'");

   	// foreach($data['query']->result() as $qwe){
   	// 	echo '<b>'. $qwe->name .'</b><br>';
   	// }

   	echo '<table border="1" style="margin: 0 auto;">';
	echo '<tr>';
	foreach($data['query']->result() as $rw) {
        echo '<td><img src="'. base_url() . 'assets/uploads/thumbs/'. $rw->image .
        '" style=" display: inline;"><br>' . $rw->name . '<br>PHP ' . $rw->price . 
        '<br>Code: ' . $rw->code . '<br>Manufacturer: ' . $rw->unit . 
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