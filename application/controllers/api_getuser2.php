<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
				

class api_getuser2 extends CI_Controller {


function index(){
   
    $q = strval($_GET['q']);
	$data = array("city"=>$q);
    $users = $this->public_model->ajaxget($data)->result_array();
           
    // var_dump($users);
    // $con = mysqli_connect('localhost','bloom','sygCeY^E?A@J','bloom_india');
    // if (mysqli_connect_errno()) {
    //   die('Could not connect: ' . mysqli_connect_error());
    // }
    
    
    // $sql="SELECT id, lat, lon, bloodgroup,name FROM location_table WHERE city = '".$q."' or district = '".$q."' ";
    
    
    // $result = mysqli_query($con,$sql);
    echo("{ \"Users\": [");
    foreach($users as $key=>$value) {
    // do stuff
		echo json_encode($value);
		if(! ($key == count($users)-1)){
		echo(",");}
    }
	
	
	
	//echo("{ 'Users': [");
	
    //foreach($users as $row) {
     

	//echo json_encode($row);
	//	echo(",");
    //}
	echo("] }");
	
}
}

?>

