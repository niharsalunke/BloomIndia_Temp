<link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/justified-nav/">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>Justified Nav Template for Bootstrap</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!--https://maps.googleapis.com/maps/api/js?key=AIzaSyALdl54vRrXBuYiYj6xl3HDa8uBKgENvIk&libraries=places-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZ-_qwKLm1gct8N4WzZaF9IRWhqnUMWGo&libraries=places" type="text/javascript"></script>
<style>
   .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
   background-image: linear-gradient(#fe9683,#f6755e);;
   color: black;
   }
   label{
       font-weight:500;
   }
   .btn-default{
   background-image: linear-gradient(white, #dadad5);
   }
   .btn-other {
   border: 2px solid #a8a8a8;
   background-image: linear-gradient(white, #dadad5);
   color: black;
   font-size: 17px;
   cursor: pointer;
   }
   .btn-other:hover, .btn-other:focus, .btn-other:active, .btn-other.active, .open > .dropdown-toggle.btn-other {
   border-color: #f6755e;
   color: #f6755e;
   }
   .slidecontainer {
   width: 100%; /* Width of the outside container */
   }
   /* The slider itself */
   .slider {
   -webkit-appearance: none;  /* Override default CSS styles */
   appearance: none;
   width: 100%; /* Full-width */
   height: 25px; /* Specified height */
   background-image: linear-gradient(white, #dadad5);/* Grey background */
   outline: none; /* Remove outline */
   opacity: 0.9; /* Set transparency (for mouse-over effects on hover) */
   -webkit-transition: .2s; /* 0.2 seconds transition on hover */
   transition: opacity .2s;
   border-radius:5px;
   }
   /* Mouse-over effects */
   .slider:hover {
   opacity: 1; /* Fully shown on mouse-over */
   }
   /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
   .slider::-webkit-slider-thumb {
   -webkit-appearance: none; /* Override default look */
   appearance: none;
   width: 25px; /* Set a specific slider handle width */
   height: 25px; /* Slider handle height */
   background-image: linear-gradient(#fe9683, #f6755e);
   /*background:#f6755e; /* Green background */
   cursor: pointer; /* Cursor on hover */
   }
   .slider::-moz-range-thumb {
   width: 25px; /* Set a specific slider handle width */
   height: 25px; /* Slider handle height */
   background-image: linear-gradient(#ffb6a8, #f6755e);
   cursor: pointer; /* Cursor on hover */
   }
   .btn-groups { 
   background-image: linear-gradient(white, #dadad5) ;
   font-size: 12px;
   margin-top:10px;
   margin-bottom: 10px;
   margin-right:10px;
   border: 0 none;
   border-radius: 10px;
   }
   .btn-groups:hover, .btn-groups:focus, .btn-groups:active, .btn-groups.active, .open > .dropdown-toggle.btn-groups {
   background-image: linear-gradient(#fe9683,#f6755e) ;
   color: black;
   }
   .custom-range:-webkit-slider-thumb {
   background: #f6755e;
   }
   .custom-range:-moz-range-thumb {
   background: #f6755e;
   }
   .custom-range:-ms-thumb {
   background: #f6755e;
   }
   .heading_bloom{
   color: #f6755e;
   font-family:Poppins;
   }
   .form-control:focus {
   border-color: grey;
   box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(0, 0, 0, 0.6);
   }
   *{
       font-family:Poppins;
   }
</style>
<div class="container" style="width: 100%;">
   <!-- The justified navigation menu is meant for single line per list item.
      Multiple lines will require custom codet not provided by Bootstrap. -->
   <!-- Jumbotron -->
   <div class="row" style = "margin-top: 20px; margin-bottom: 5px;">
      <div class="col-sm-1 col-lg-1">
      </div>
      <div class="col" style = "text-align: center;">
         <h1 class="heading_bloom" hidden >Find A Donor - Bloom India</h1>
      </div>
      <div class="col-sm-1 col-lg-1">
      </div>
   </div>
   <!-- Example row of columns -->
   <div class="row my-auto jumbotron" style = "background-color: white; width: 100%;">
      <div class="col-lg-4" style = " margin-bottom: 20px; margin-top: 25px; padding:0px;">
         <div class="input-group" style = " margin-bottom: 20px; margin-top: 25px ">
            <input onfocus="this.value=''" class = " form-control" id="searchTextField" type="text" size = "40" placeholder="Enter Your Location" autocomplete="on" runat="server" style = " font-size: 22px;"/>
            <label type="hidden" id="cityLat"  hidden name="cityLat" ></label>
            <label type="hidden" id="cityLng" hidden name="cityLng" ></label>
         </div>
         <div class="input-group col-xs-12" style = " margin-bottom: 20px; margin-top: 25px ">
            <label class = "col-xs-8" style= "font-size:15px;color:#f6755e;padding-left:0px;padding-right:0px;">Filter COVID19 Plasma Donors:</label>
            <div class="btn-group btn-toggle col-xs-4" style = "margin-top:0px;padding-left:0px;padding-top:0px;margin-left:0px;margin-right:0px;padding-right:0px;"> 
               <button id = "plasmaon" class="btn btn-md btn-groups" style = "margin-right:0px; margin-left:5px;margin-top:0px;">ON</button>
               <button id = "plasmaoff" class="btn btn-md btn-groups active" style = "margin-left:0px;margin-top:0px;margin-right:0px;">OFF</button>
            </div>
         </div>
         <div class="input-group col-xs-12">
            <div id = "bgdiv" data-toggle="buttons" onchange="plotmap2()">
               <label class="btn btn-groups  col-xs-2"  >
               <input type="radio" name="options" value = "A+" autocomplete="off" class="bggroup_radio"> A+
               </label>
               <label class="btn btn-groups col-xs-2" >
               <input type="radio" name="options" value = "B+" autocomplete="off" class="bggroup_radio">B+
               </label>
               <label class="btn btn-groups col-xs-2" >
               <input type="radio" name="options" value = "AB+" autocomplete="off" class="bggroup_radio"> AB+
               </label>
               <label class="btn btn-groups col-xs-2" >
               <input type="radio" name="options" value = "O+" autocomplete="off" class="bggroup_radio"> O+
               </label>
               <label class="btn btn-groups col-xs-2" >
               <input type="radio" name="options" value = "A-" autocomplete="off" class="bggroup_radio"> A-
               </label>
               <label class="btn btn-groups col-xs-2" >
               <input type="radio" name="options" value = "B-" autocomplete="off" class="bggroup_radio" > B-
               </label>
               <label class="btn btn-groups col-xs-2" >
               <input type="radio" name="options" value = "AB-" value = "AB-" autocomplete="off" class="bggroup_radio"> AB-
               </label>
               <label class="btn btn-groups col-xs-2">
               <input type="radio" name="options" value = "O-" autocomplete="off" class="bggroup_radio"> O-
               </label>
               <label class="btn btn-groups col-xs-2" style = "padding-left:5px;" >
               <input type="radio" name="options" value = "BOMBAY+" autocomplete="off" class="bggroup_radio"> BOMBAY
               </label>
               <label class="btn btn-groups col-xs-2" style = "padding-left:5px;" >
               <input type="radio" name="options" value = "GOLDEN+" autocomplete="off" class="bggroup_radio"> GOLDEN
               </label>
            </div>
         </div>
         <div class = "input-group col-xs-12" style="margin-top: 25px; margin-bottom: 10px;">
            <div class="slidecontainer" style="">
               <input type="range" min="5" max="40" value = "20" step="5" class="slider" id="myRange">
            </div>
         </div>
         <div class = "input-group col-xs-12">
            <div class = "row">
               <div class = "col-1"></div>
               <div class = "col-10 " style = "text-align: center;">
                  <label id ="opval">
                     <h2>20</h2>
                  </label>
                  <label >
                     <h5  class = "text-muted">kms</h5>
                  </label>
                  <label id = "test">
                     <h2>0</h2>
                  </label>
                  <label >
                     <h5 class = "text-muted">Donors</h5>
                  </label>
               </div>
               <div class = "col-1"></div>
            </div>
         </div>
         <br>
         <br>
         <div class = "input-group col-xs-12" >
            <div class = "row">
               <div class = "col-1"></div>
               <div class = "col-10 " style = "text-align: center;">
                  <button id="selectall" type="button" class="btn btn-other success px-auto" >Select All</button>
                  <button  id="toggleLasso"  type="button" class=" shadow btn btn-outline-primary col-12" style="display:none;">Bulk Select</button>
                  <button id="resetbtn" type="button" class="btn btn-other success px-auto" style="10px;">RESET</button>
               </div>
               <div class = "col-1"></div>
            </div>
         </div>
         <div class = "input-group col-xs-12">
            <div class = "row">
               <div class = "col-1"></div>
               <div class = "col-10 px-auto" style = "text-align: center;">
                  <label id ="selected">
                     <h2>0</h2>
                  </label>
                  <label >
                     <h2  class = "text-muted">/</h2>
                  </label>
                  <label id = "total">
                     <h2>0</h2>
                  </label>
                  <label >
                     <h5 class = "text-muted">Donors Selected</h5>
                  </label>
               </div>
               <div class = "col-1"></div>
            </div>
         </div>
      </div>
      <div class="col-lg-8" style = "margin-bottom: 20px; margin-top: 25px" >
         <div class = "input-group col-xs-12">
            <div class="row">
               <div class="col-sm-1 col-lg-1">
               </div>
               <div class="col-sm-10 col-lg-10 my-4 " style = "text-align: center">
                  <div  id="mapid" style = "width: 100%; height: 550px;border-radius: 0 !important;" ></div>
               </div>
               <div class="col-sm-1 col-lg-1">
               </div>
            </div>
         </div>
      </div>
      <table id="txtHint"  hidden></table>
   </div>
   <div class = "row">
      <div class="col-xs-2">
      </div>
      <div class=" container col-xs-8 my-4"  style = "text-align: center">
         <div class="jumbotron">
            <div class="container">
               <h2 style = "margin-bottom: 35px;font-family:Poppins;">Donee Details</h2>
               <form class= "mt-4 mx-3 mb-3" style= "font-family: Poppins; font-size: 17px;" method = 'post' action = "<?php echo base_url();?>seekerpopup">
                  <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="seeker_name" name = "seeker_name" required  >
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                        <input type="email" class="form-control" id="seeker_email" name = "seeker_email" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label  class="col-sm-2 col-form-label">Mobile No</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control"  id="seeker_mobileno" name = "seeker_mobileno" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="seeker_description" name = "seeker_description" required>
                     </div>
                  </div>
                  <input type="text"  class="form-control" id="finalcontacts" name = "finalcontacts" value = "" required style = "display:none">
                  <div class="form-group row">
                     <div class="col-xs-12">
                        <!--button class = "btn btn-outline-dark"><a href="<?php echo base_url();?>seekerpopup">REACH OUT</a></button!-->
                        <button style = "margin-top:15px;" type = "submit" class = "btn btn-default">REACH OUT</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="col-xs-2">
      </div>
   </div>
   <!-- Site footer -->
</div>
<!-- /container -->




		
	<script type = "text/javascript">	

		
	function plasmastatus(){
		
		var yesonly = ["yes"]
		var yesno = ["yes","no"]
		if(document.getElementById('plasmaon').classList[2] == "active"){
			return yesonly;
		}
		else{
			return yesno;
		}
	}
		
		
		
	$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');

    if ($(this).find('.btn-groups').size() > 0) {
        $(this).find('.btn').toggleClass('btn-groups');

    }


    $(this).find('.btn').toggleClass('btn-groups');
	
	console.log(plasmastatus());
	plotmap2();
});



function randomNumber() {
    min = -2500;
    max = 2500;

    return (Math.random() * (max - min) + min) / 100000;
}
		

var mainloc = []
var lats = []
var longs = []
var distances = []
var names_donors = []
var plasma = []
var real_names_donors = []



function stringtoHTML(str) {
    var parser = new DOMParser();
    var doc = parser.parseFromString(str, 'text/html');
    return doc.body;
};

function get_blood_group() {


    var inputs = document.getElementsByClassName("bggroup_radio");


    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].checked) {
            console.log(inputs[i].value);
            return inputs[i].value;
        }
    }
}


function initialize() {



    //var res = String.fromCharCode(65);

    document.getElementById('mapid').innerHTML = "<div class = 'container' id='map' style='width: 100%; height: 100%;'></div>";
    var mymap = L.map('map').setView([23.2599, 77.4126], 4.5);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidmlwZXJzdmVuZCIsImEiOiJja2E0NGV0NjcwYWllM2dtdmQ0NnpoYW5pIn0.hYJV-dqqe-RxsthI5fb_VQ', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoidmlwZXJzdmVuZCIsImEiOiJja2E0NGV0NjcwYWllM2dtdmQ0NnpoYW5pIn0.hYJV-dqqe-RxsthI5fb_VQ'
    }).addTo(mymap);


    var input = document.getElementById('searchTextField');
    var autocomplete = new google.maps.places.Autocomplete(input);
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
        var place = autocomplete.getPlace();
        //document.getElementById('city2').innerHTML = place.name;

        //cleaning previous cache
        mainloc, lats, longs, distances, names_donors = []
        document.getElementById('txtHint').innerHTML = "";


        var target_places = stringtoHTML(place.adr_address).childNodes;
        var query_name = "";

        for (var i = 0; i < target_places.length; i += 1) {
            if (target_places[i].className == "locality") {
                query_name = target_places[i].textContent;
            }
        }


        //Cleaning the Fields
        document.getElementById('test').childNodes[1].innerHTML = 0
        document.getElementById('total').childNodes[1].innerHTML = 0
        document.getElementById('selected').childNodes[1].innerHTML = 0

        document.getElementById('cityLat').innerHTML = place.geometry.location.lat();
        document.getElementById('cityLng').innerHTML = place.geometry.location.lng();
        //console.log('City name:',place.address_components[0].long_name)
        //console.log('State name:',place.address_components[2].long_name)
        //console.log('Country name:',place.address_components[3].long_name)
        //console.log('Place: ',place)

        document.getElementById('txtHint').innerHTML = "<table id = 'detailstable'><tr><td>" + "YOUR LOCATION" + "</td><td>" + place.geometry.location.lat() + "</td><td>" + place.geometry.location.lng() + "</td></tr></table>"
        mainloc = [place.geometry.location.lat(), place.geometry.location.lng()];
        // PLOT THE TABLE WITH DETAILS
        showUser(query_name)




    });
}
google.maps.event.addDomListener(window, 'load', initialize);


function showUser(str) {


    console.log("Querying Table With: ", str)
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                console.log('RESPONSE TEXT:', this.responseText)
                console.log('Table Insertion Complete ...')
                console.log('Query Complete, Data Imported...')
                console.log('Initializing Plot_1 Process...')
                plotmap1();

            }
        };
        xmlhttp.open("GET", "/api_getuser?q=" + str, true);

        xmlhttp.send();
    }



}



const toggleLasso = document.querySelector('#toggleLasso');
const inputsdiv = document.querySelector('#inputsdiv');
const lassoEnabled = document.querySelector('#lassoEnabled');
const lassoResult = document.querySelector('#lassoResult');


const SelectAll = document.querySelector('#selectall');

////////////******* Variables Needed for changing HTML VALUES  ********////////////
function plotmap1() {


    mainloc = [document.getElementById('cityLat').innerHTML, document.getElementById('cityLng').innerHTML] // Location of Donee




    document.getElementById('mapid').innerHTML = "<div class = 'container' id='map' style='width: 100%; height: 100%;'></div>";
    var mymap = L.map('map').setView([mainloc[0], mainloc[1]], 11);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidmlwZXJzdmVuZCIsImEiOiJja2E0NGV0NjcwYWllM2dtdmQ0NnpoYW5pIn0.hYJV-dqqe-RxsthI5fb_VQ', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoidmlwZXJzdmVuZCIsImEiOiJja2E0NGV0NjcwYWllM2dtdmQ0NnpoYW5pIn0.hYJV-dqqe-RxsthI5fb_VQ'
    }).addTo(mymap);




    try {
        rows = document.getElementById('txtHint').childNodes[1].childNodes;
    } catch {
        lats = []
        longs = []
        names_donors = []
        blood_groups = []
        distances = []
        real_names_donors = []
		plasma = []
        console.log('Problematic Statement')
        plotmap2();
    }
    console.log('ROWS : ', rows)



    lats = []
    longs = []
    names_donors = []
    blood_groups = []
    real_names_donors = []
	plasma = []
    //k[0].innerText.split(String.fromCharCode(9))
    for (var iterator = 0; iterator < rows.length; iterator += 1) { //temp0[iterator].childNodes[0].innerText
        //row_instance =      //split(String.fromCharCode(9))
        lats.push(rows[iterator].childNodes[1].innerText) //stringtoHTML(rows[iterator].innerHTML).childNodes[1])
        longs.push(rows[iterator].childNodes[2].innerText) //stringtoHTML(rows[iterator].innerHTML).childNodes[2])
        names_donors.push(rows[iterator].childNodes[0].innerText) //stringtoHTML(rows[iterator].innerHTML).childNodes[0])
        blood_groups.push(rows[iterator].childNodes[3].innerText)
        real_names_donors.push(rows[iterator].childNodes[4].innerText)
		plasma.push(rows[iterator].childNodes[5].innerText)
    }
    console.log('assigned: ', lats, longs, names_donors, blood_groups)



    console.log(names_donors.length)
    console.log(lats.length)
    console.log(longs.length)
    distances = []


    // GET DISTANCES B/W 2 points
    function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
        var R = 6371; // Radius of the earth in km
        var dLat = deg2rad(lat2 - lat1); // deg2rad below
        var dLon = deg2rad(lon2 - lon1);
        var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        var d = R * c; // Distance in km
        return d;
    }

    function deg2rad(deg) {
        return deg * (Math.PI / 180)
    }

    //Calculate DISTANCES
    for (i = 0; i < lats.length; i++) {
        distances.push(getDistanceFromLatLonInKm(parseFloat(mainloc[0]), parseFloat(mainloc[1]), parseFloat(lats[i]), parseFloat(longs[i])))
    }

    console.log('calling plotmap2');
    plotmap2();
} // PLOTMAP 1 Ends



/// THIS IS THE HEART OF operation... every time, slider is changed, this function executes



var slider = document.getElementById("myRange");
slider.oninput = function() {
    plotmap2()
};




function plotmap2() {
    var slider = document.getElementById("myRange");
    var blood_reqd = get_blood_group(); //document.getElementById('bloodgroup').value;

    console.log('Call at plotmap2')

    console.log('So far', lats, longs, distances)

    // NO need to change this part ///////
    var output = document.getElementById("opval").childNodes[0]

    output.innerHTML = slider.value;
    //////////////////////////////


    /// RESET THE MAP and clear every time slider is moved 

    document.getElementById('mapid').innerHTML = "<div class = 'container' id='map' style='width: 100%; height: 100%;'></div>";
    var mymap = L.map('map').setView([parseFloat(mainloc[0]), parseFloat(mainloc[1])], 11);


    //add lasso control to the map     //** LASSO ADDITION
    const lassoControl = L.control.lasso().addTo(mymap);
    lassoControl.setOptions({
        intersect: true
    });



    //** LASSO ADDITION
    const mapElement = document.querySelector('#map');



    red_marker = "<?php echo public_img_url();?>marker_red.png"
    blue_marker = "<?php echo public_img_url();?>marker_blue.png"
    green_marker = "<?php echo public_img_url();?>marker_green.png"
    blue_marker_default = "https://unpkg.com/leaflet@1.6.0/dist/images/marker-icon-2x.png"

    // Main User's Location/ Centre of Circle
    var main_marker = L.marker([parseFloat(mainloc[0]), parseFloat(mainloc[1])]).addTo(mymap);
    main_marker._icon.src = red_marker
    main_marker.bindPopup("<h3>You Are Here !</h3><br><h3>" + mainloc[0] + " , " + mainloc[1] + "</h3>")




    final_emails_list = []
    final_phones_list = []
    final_contact_list = []

    finlats = []
    finlongs = []
    finnames = []
    console.log('Finding donors in ', output.innerHTML, ' range ')
    var markers_array = []
    // CALCULATE DISTANCES AND plot only those which are in given Range
    markers_array.push(main_marker)
    for (var i = 0; i < distances.length; i++) {
        if ((parseFloat(distances[i]) <= parseFloat(output.innerHTML)) && blood_groups[i] == blood_reqd && plasmastatus().includes(plasma[i])) {
            finlats.push(lats[i])
            finlongs.push(longs[i])
            finnames.push(names_donors[i])

            //,{title:'Mymarker'}
            var marker = L.marker([parseFloat(lats[i]) + randomNumber(), parseFloat(longs[i]) + randomNumber()]).on('click', function(e) {

                console.log(e)
                if (e.target._icon.src == green_marker) {

                    // IF IT IS GREEN, Make BLUE and REMOVE

                    var index = final_contact_list.indexOf(stringtoHTML(e.target._popup._content).childNodes[1].innerHTML);

                    final_contact_list.splice(index, 1);


                    e.target._icon.src = blue_marker;
                } else {

                    // IF IT IS BLUE , Make GREEN and REMOVE
                    var index2 = names_donors.indexOf(stringtoHTML(e.target._popup._content).childNodes[1].innerHTML)

                    final_contact_list.push(names_donors[index2])

                    e.target._icon.src = green_marker;

                    //console.log(e)
                }


                console.log(final_contact_list)
                document.getElementById('selected').childNodes[1].innerHTML = final_contact_list.length
                document.getElementById('finalcontacts').value = final_contact_list.join(' and ')

                //console.log(final_emails_list)
                //console.log(final_phones_list)
            }).on('dblclick', function(e) {});




            marker.bindPopup(
                /*"<h1 id='name_of_donor'>" + names_donors[i] + "</h1><br>* Here We can also add the other details of the person* " +
                "<br><br><input type = 'button' value = 'CONTACT PERSON'>"*/
                "<div><label hidden>" +
                real_names_donors[i] + "</label></div>" +
                "<div id='nameid' hidden>" + names_donors[i] + "</div>" +
                "<div >" + "Doner" + "</div>"




                , {
                    maxWidth: 70,
                    maxHeight: 50,
                    autoPanPadding: (0, 0)
                }
            )
            markers_array.push(marker);
        }
    }




    //this will help the map zoom on the coordinates and try to fit all the coordiantes in one view
    const layers = [...markers_array, ];
    try {
        const featureGroup = L.featureGroup(layers).addTo(mymap);
        mymap.fitBounds(featureGroup.getBounds(), {
            animate: false
        });
    } catch {
        console.log('featureGroup Error')
    }

    // NEW LINE for update5 FEATURE
    console.log('MARKERS ARRAY Length: ', markers_array.length)
	console.log('HEY NIHAR MARKERS ARRAY LENGTH IS : ',markers_array.length - 1);
    document.getElementById('total').childNodes[1].innerHTML = markers_array.length - 1;

//document.getElementById('total').childNodes[1].innerHTML = 30
    // output number of results found on the map
    document.getElementById('test').childNodes[1].innerHTML = finlongs.length



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
                if (layer._icon.src == blue_marker || layer._icon.src == blue_marker_default || layer._icon.src == red_marker) {
                    //do nothing
                } else if (layer._icon.src == green_marker) {
                    layer._icon.src = blue_marker
                    final_contact_list = [];
                }
            }
        });

        console.log(final_contact_list)
        document.getElementById('selected').childNodes[1].innerHTML = final_contact_list.length
        
        document.getElementById('finalcontacts').value = final_contact_list.join(' and ')
    }




    function setSelectedLayers(layers) {


        //looping through each layer/marker and making the selected ones red
        layers.forEach(layer => {

            if (layer instanceof L.Marker) {

                if (layer._icon.src == blue_marker || layer._icon.src == blue_marker_default) {
                    layer._icon.src = green_marker
                    final_contact_list.push(stringtoHTML(layer._popup._content).childNodes[1].innerHTML)

                } else if (layer._icon.src == red_marker) {
                    // do nothing
                } else if (layer._icon.src == green_marker) {
                    // do nothing
                }

            }
            console.log(final_contact_list)
            document.getElementById('selected').childNodes[1].innerHTML = final_contact_list.length
            document.getElementById('finalcontacts').value = final_contact_list.join(' and ')
        });


    }




    function selectall() {
        final_contact_list = []
        mymap.eachLayer(layer => {

            if (layer instanceof L.Marker) {
                if (layer._icon.src == blue_marker || layer._icon.src == blue_marker_default || layer._icon.src == green_marker) {

                    layer._icon.src = green_marker;
                    final_contact_list.push(stringtoHTML(layer._popup._content).childNodes[1].innerHTML)
                } else if (layer._icon.src == green_marker || layer._icon.src == red_marker) {
                    //do nothing


                }
            }
        });

        console.log(final_contact_list)
        document.getElementById('selected').childNodes[1].innerHTML = final_contact_list.length
        document.getElementById('finalcontacts').value = final_contact_list.join(' and ')
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
        //if (lassoControl.enabled()) {
        //    lassoControl.disable();
        //} else {
        //      lassoControl.enable();
        //  }
    });




    SelectAll.addEventListener('click', function() {
        selectall();
    });




    document.getElementById("resetbtn").addEventListener("click", resetSelectedState, false);

} // ON INPUT ENDS HERE 



/// OTHER FUNCTIONS WHICH WERE REQUIRED for LASSO SELECT 
		
	  </script>



