<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
				

class api_getuser extends CI_Controller {


function index(){
    header("Content-Type: text/html");
    $q = strval($_GET['q']);
	$data = array("city"=>$q,"district"=>$q);
    $users = $this->public_model->ajaxget($data)->result_array();
            
    // var_dump($users);
    // $con = mysqli_connect('localhost','bloom','sygCeY^E?A@J','bloom_india');
    // if (mysqli_connect_errno()) {
    //   die('Could not connect: ' . mysqli_connect_error());
    // }
    
    
    // $sql="SELECT id, lat, lon, bloodgroup,name FROM location_table WHERE city = '".$q."' or district = '".$q."' ";
    
    
    // $result = mysqli_query($con,$sql);
    
    
    foreach($users as $row) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['lat'] . "</td>";
      echo "<td>" . $row['lon'] . "</td>";
      echo "<td>" . $row['bloodgroup'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['plasma'] . "</td>";
      echo "</tr>";
    }
}
}

?>

