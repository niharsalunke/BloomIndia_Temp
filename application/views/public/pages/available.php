
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
         integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
         crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
         integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
         crossorigin=""></script>
      <!-- Added New while Lasso Feature !-->
   
      <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
      <script src="https://unpkg.com/leaflet-lasso@2.1.0/dist/leaflet-lasso.umd.js"></script>
     
      <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
      <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  
 <script type="text/javascript">
 
 
      
      
 
$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});
</script>
<?php if($search_result > 0){

	$fn=$ln=$email=$number=$home_lat=$home_long=$work_lat=$work_long=$home_addr=$work_addr=array();
	
	foreach($search_result as $v){
		array_push($fn,$v['fname']);
		array_push($ln,$v['lname']);
		array_push($email, $v['email']);
		array_push($number,$v['phone_number']);
		array_push($home_lat,$v['home_address_latitude']+rand(-15,20)/1000);
    array_push($home_long, $v['home_address_longitude']+rand(-15,20)/1000);
    array_push($home_addr, $v['home_address']);
    
	}
	foreach($search_result_w as $v_w){
		array_push($work_lat,$v['work_address_latitude']);
    array_push($work_long,$v['work_address_longitude']);
    array_push($work_addr, $v['work_address']);
	}

?>
<div class="container">
    <div id="mapid" style = "height: 500px"></div>
    <div class = "row">
      <div class = "container col-sm-12 my-5">
          <input class = "col-sm-12" type = "range" min = "5" max = "100" value ="50" step="5" id = "myRange">
          <br>
          <label id ="opval">50</label><label> kms</label>
          <br>
          <label id = "test"  >0</label><label> Results</label>
      </div>
    </div>  
        <br>
        
      <div class = "row">
         <button id="toggleLasso" type="button" class="btn btn-primary btn-lg mx-5 px-3"><b>Bulk Select<b></button>
         
        <button id="selectall" type="button" class="btn btn-primary btn-lg mx-5 px-3"><b>Select All<b></button>
        
         <button id = "resetbtn" type="button" class="btn btn-warning btn-lg mx-5 px-3"><b>RESET<b> </button>
         
         
      </div>
    
      <br>
  
      
      </div>

    


   

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

  <!-- BASIC PLOT WITH MAINLOC !-->

    <!-- THESE ARE BOOTSTRAP DEPENDENCIES   -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
	
	
	 <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
      <script src="https://unpkg.com/leaflet-lasso@2.1.0/dist/leaflet-lasso.umd.js"></script>
     
      <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
      <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	<script>
	    // PLOTTING SCRIPT STARTS HERE
        // These are the coordinates of the DONEE ( or bloodbank )
        var mainloc = ['<?php echo $latitude; ?>','<?php echo $longitude; ?>']
        // var mainloc = ['18.516447','73.81187112070381']
        
        
        lats = [<?php echo implode(',', $home_lat); ?>] //just change variable name when u want to access other values
        longs = [<?php echo implode(', ', $home_long); ?>]
        names_donors = [<?php echo '"'.implode('","', $fn).'"'; ?>]
        emails =  [<?php echo '"'.implode('","', $email).'"'; ?>]
        //console.log("emails: "+emails);
        phone_nos = [<?php echo '"'.implode('"," ', $number).'"'; ?>];
        
        

		distances = []
        function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
            var R = 6371; // Radius of the earth in km
            var dLat = deg2rad(lat2-lat1);  // deg2rad below
            var dLon = deg2rad(lon2-lon1); 
            var a = Math.sin(dLat/2) * Math.sin(dLat/2)+Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dLon/2) * Math.sin(dLon/2); 
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
            var d = R * c; // Distance in km
            return d;
        }

        function deg2rad(deg) {
            return deg * (Math.PI/180)
        }
        for (i = 0; i < lats.length; i++) {
            distances.push(getDistanceFromLatLonInKm(parseFloat(mainloc[0]),parseFloat(mainloc[1]),parseFloat(lats[i]),parseFloat(longs[i])))
        }
        var slider = document.getElementById("myRange");
        var output = document.getElementById("opval");
        output.innerHTML = slider.value;
        
        
        function stringtoHTML(str) {
		var parser = new DOMParser();
		var doc = parser.parseFromString(str, 'text/html');
		return doc.body;
		};
        // Some new additions for the lasso feature
        const toggleLasso = document.querySelector('#toggleLasso');

        const lassoEnabled = document.querySelector('#lassoEnabled');
        const lassoResult = document.querySelector('#lassoResult');
        const SelectAll = document.querySelector('#selectall');
        
        
        
        
        
        
        
        
        
        
        
        
        slider.oninput = function()
        {
            
            
 // NO need to change this part ///////
  var output = document.getElementById("opval")

  output.innerHTML = slider.value;
  //////////////////////////////


  /// RESET THE MAP and clear every time slider is moved 

  document.getElementById('mapid').innerHTML = "<div id='map' style='width: 100%; height: 100%;'></div>";
  var mymap = L.map('map').setView([parseFloat(mainloc[0]), parseFloat(mainloc[1])], 11);



  //add lasso control to the map     //** LASSO ADDITION
  const lassoControl = L.control.lasso().addTo(mymap);
  lassoControl.setOptions({ intersect: true });



  //** LASSO ADDITION
  const mapElement = document.querySelector('#map');


           
    red_marker = "https://www.bloomindia.in/assets/public/img/marker_red.png"
    blue_marker = "https://www.bloomindia.in/assets/public/img/marker_blue.png"
    green_marker = "https://www.bloomindia.in/assets/public/img/marker_green.png"
    blue_marker_default = "https://unpkg.com/leaflet@1.6.0/dist/images/marker-icon-2x.png"

    // Main User's Location/ Centre of Circle
    var main_marker = L.marker([parseFloat(mainloc[0]), parseFloat(mainloc[1])]).addTo(mymap);
    main_marker._icon.src = red_marker
    main_marker.bindPopup("<h1>You Are Here !</h1><br><h3>" + mainloc[0] + " , " + mainloc[1] + "</h3>")




    final_emails_list = []
    final_phones_list = []
    final_contact_list = []
    
    function print3lists(final_contact_list, final_phones_list,final_emails_list)
        {
            console.log('Names: ', final_contact_list)
            console.log('Phones: ',final_phones_list)
            console.log('Emails: ',final_emails_list)
            
              var list= document.getElementById("filtered_table");
                list.innerHTML="";
                for (var i = 0; i < final_contact_list.length; i++) {
                var toAppend ='<tr>'+
                				'<td class="list-inline">'+
                				'</td>'+
                        '<td >'+
                          '<input class="name" name="check_email_list[]" value="'+final_emails_list[i]+'" type="checkbox"  checked>'+
                        '</td>'+
                        '<td >'+
                          '<input class="sms" name="check_sms_list[]" value="'+final_phones_list[i]+'" type="checkbox"  checked>'+
                        '</td>'+
                      '</tr>';
                    
                    list.innerHTML+= toAppend;
                    }
            
        }
    
    
    
    
    
    
    
    
    
    finlats = []
    finlongs = []
    finnames = []
    finemails = []
    finphones = []
    
    
    var markers_array = []
    
    // CALCULATE DISTANCES AND plot only those which are in given Range
    markers_array.push(main_marker)
    for (var i = 0; i < distances.length; i++) {
        if (parseFloat(distances[i]) <= parseFloat(this.value)) {
            finlats.push(lats[i])
            finlongs.push(longs[i])
            finnames.push(names_donors[i])
            finemails.push(emails[i])
            finphones.push(phone_nos[i])
            
            
//,{title:'Mymarker'}
            var marker = L.marker([parseFloat(lats[i]), parseFloat(longs[i])]).on('click', function(e) {
                
               // console.log(e)
                if (e.target._icon.src == green_marker ) {

                    // IF IT IS GREEN, Make BLUE and REMOVE
                    
                    var index = final_contact_list.indexOf(stringtoHTML(e.target._popup._content).childNodes[1].innerHTML);

                    final_contact_list.splice(index, 1);

                    final_emails_list.splice(index,1);
                    final_phones_list.splice(index,1);
                    
                    e.target._icon.src = blue_marker;
                } 


                else 
                {

                  // IF IT IS BLUE , Make GREEN and ADD to LIST
                    var index2 = names_donors.indexOf(stringtoHTML(e.target._popup._content).childNodes[1].innerHTML)

                    final_contact_list.push(names_donors[index2])
                    final_phones_list.push(phone_nos[index2])
                    final_emails_list.push(emails[index2])
                    
                    e.target._icon.src = green_marker;
                    
                    //call the update function 
                  
                    //console.log(e)
                }
                print3lists(final_contact_list,final_phones_list,final_emails_list)
            }).on('dblclick',function(e){});




            marker.bindPopup(
                /*"<h1 id='name_of_donor'>" + names_donors[i] + "</h1><br>* Here We can also add the other details of the person* " +
                "<br><br><input type = 'button' value = 'CONTACT PERSON'>"*/
                "<div class='accordion' id='accordionExample'><button class='btn btn-light' type='button'data-toggle='collapse' data-target='#collapseOne'aria-expanded='true' aria-controls='collapseOne'>"+
          names_donors[i]+"</button></div>"
          +
          "<div id='nameid' hidden>"+names_donors[i]+"</div>"



                , {
                    maxWidth: 70,
                    maxHeight: 50,
                    autoPanPadding: (0,0)
                }
            )
            markers_array.push(marker);
        }
    }
             
        
//console.log('Demo Marker',stringtoHTML(markers_array[5]._popup._content).childNodes[1].innerHTML)
      
        //this will help the map zoom on the coordinates and try to fit all the coordiantes in one view
        const layers = [...markers_array,];
        try{
        const featureGroup = L.featureGroup(layers).addTo(mymap);   
        mymap.fitBounds(featureGroup.getBounds(), { animate: true });}
        catch{
          console.log('featureGroup Error')
        }




    // output number of results found on the map
    document.getElementById('test').innerHTML = finlongs.length



    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidmlwZXJzdmVuZCIsImEiOiJja2E0NGV0NjcwYWllM2dtdmQ0NnpoYW5pIn0.hYJV-dqqe-RxsthI5fb_VQ', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoidmlwZXJzdmVuZCIsImEiOiJja2E0NGV0NjcwYWllM2dtdmQ0NnpoYW5pIn0.hYJV-dqqe-RxsthI5fb_VQ'
    }).addTo(mymap);







function resetSelectedState() {
            mymap.eachLayer(layer => {

                if (layer instanceof L.Marker) {
                  if (layer._icon.src == blue_marker || layer._icon.src == blue_marker_default || layer._icon.src == red_marker){
                      //do nothing
                  }
                  else if(layer._icon.src == green_marker)
                  {
                    layer._icon.src = blue_marker
                    final_contact_list = [];
                    final_phones_list = [];
                    final_emails_list = [];
                    
                  }
                } 
            });

           print3lists(final_contact_list,final_phones_list,final_emails_list)
        }


        function setSelectedLayers(layers) {
    
            
            //looping through each layer/marker and making the selected ones red
            layers.forEach(layer => {
                
                if (layer instanceof L.Marker) {

                  if(layer._icon.src == blue_marker || layer._icon.src ==blue_marker_default)
                  {
                      layer._icon.src = green_marker
                      var index_val = names_donors.indexOf(stringtoHTML(layer._popup._content).childNodes[1].innerHTML)
                      final_contact_list.push(names_donors[index_val])
                      final_phones_list.push(phone_nos[index_val])
                      final_emails_list.push(emails[index_val])
                      
                  }
                
             

                 }
                 
                 print3lists(final_contact_list,final_phones_list,final_emails_list)
                 
                 
            });
           
       
        }

       
        function selectall(markers_array)
        {
         
          for(var i = 0; i<markers_array.length;i+=1)
          {
            marker = markers_array[i]

             if(marker._icon.src == blue_marker || marker._icon.src ==blue_marker_default)
                  {
                      marker._icon.src = green_marker
                      var index_val = names_donors.indexOf(stringtoHTML(marker._popup._content).childNodes[1].innerHTML)
                      final_contact_list.push(names_donors[index_val])
                      final_phones_list.push(phone_nos[index_val])
                      final_emails_list.push(emails[index_val])
                      
                  }
          }
    print3lists(final_contact_list,final_phones_list,final_emails_list)
        
        }
        
        
        
        
        
        
        
        
        mymap.on('lasso.finished', event => {
            setSelectedLayers(event.layers);
        });
        /*mymap.on('lasso.enabled', () => {
            lassoEnabled.innerHTML = 'Bulk Select Enabled';
            resetSelectedState();
        });*/
        /*mymap.on('lasso.disabled', () => {
            lassoEnabled.innerHTML = 'Bulk Select Disabled';
        });*/

        toggleLasso.addEventListener('click', () => {
            if (lassoControl.enabled()) {
                lassoControl.disable();
            } else {
                lassoControl.enable();
            }
        });
       
       
       SelectAll.addEventListener('click',function() {
        selectall(markers_array);
    });
       


       document.getElementById ("resetbtn").addEventListener ("click", resetSelectedState, false);


   	 }
		</script>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<div class="col-lg-12">
  <form action="<?php echo base_url();?>seekerpopup" method="POST" onsubmit="return checkReq();">
				<table class="" >
				<thead class="cth" >
					<tbody style="margin-bottom:15px; display:none" id = "filtered_table">
                    </tbody>	
					
          <input type="hidden" name="bloodgroup" value="<?php echo $pv_search['bloodgroup'];?>">
						<input type="hidden" name="place" value="<?php echo $pv_search['place'];?>">
						<input type="hidden" name="distance" value="<?php echo $pv_search['distance'];?>">
						<input type="hidden" name="rh_factor" value="<?php echo $pv_search['rh_factor'];?>">
						<input type="hidden" name="Address" value="<?php echo urldecode($pv_search['Address']);?>">
						<input type="hidden" name="Lat" value="<?php echo $pv_search['Lat'];?>">
						<input type="hidden" name="Lon" value="<?php echo $pv_search['Lon'];?>">
										
				</table>
				<div class="col-lg-3 mb-3 form-group">
                    <label for="email">Donee Name<span style="color:red">*</span></label>
                    <input type="text" name="seeker_name" class="form-control" placeholder="Donee Name" required>
                </div>
                <div class="col-lg-3 mb-3 form-group">
                    <label for="email">Mobile Number<span style="color:red">*</span></label>
                    <input type="text" name="seeker_mobileno" class="form-control" placeholder="Mobile Number" required="" pattern="[0-9]{10,10}" title="Please enter 10 numbers">
                </div>
                <div class="col-lg-3 mb-3 form-group">
                    <label for="email">Email Id<span style="color:red">*</span></label>
                    <input type="email" name="seeker_emailid" class="form-control" required placeholder="Email id">
                </div>
                <div class="col-lg-3 mb-3 form-group">
                    <label for="email">Description<span style="color:red">*</span></label>
                    <input type="text" name="seeker_description" class="form-control" placeholder="Eg: Where you need blood how many units..!">
                </div>
			    <center><input type="submit" name="submit"  id="checkBtn" class="btn btn-primary" value="REACH OUT" style="cursor:pointer; width:50%"></center>
			</form>
<?php }else{
    if($search_result=='no'){
		echo "<h1 style='color:#A9A9A9;text-align:center;'>No Records Found</h1>";
	}else{
		echo "<h1 style='color:#A9A9A9;text-align:center;'>".$search_result."</h1>";
	}
	echo "<br/><center><a href='".base_url()."'><img width=10% src='".public_img_url()."home.png'></a></center>";
	}?>
<br/><br/>
</div>

