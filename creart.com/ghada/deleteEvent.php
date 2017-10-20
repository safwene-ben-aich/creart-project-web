<?php 
include_once '..\common.php';
include('../session.php');?>
<?php



$login = $_GET['id'];


$query1 = "delete from events where id='$login'";
$res = mysql_query($query1);



?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consult Events</title>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  
 <style> 
 #map-canvas {
        height: 40%;
        
		margin-right: 10px;
        padding: 100px
      }
      .controls {
        margin-top: 2px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height:32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
	color: #fff;
	background-color: #4d90fe;
	padding-top: 5px;
	padding-right: 2px;
	padding-bottom: 0px;
	padding-left: 2px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 9px;
        font-weight: 50px;
      }
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="js/cntl.css">


<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
 <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />



  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() -500;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>

<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">

 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all" />
  <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
 
  <!--google map search -->

  
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>


    <script>
function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(-33.8688, 151.2195),
    zoom: 13
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    var radioButton = document.getElementById(id);
    google.maps.event.addDomListener(radioButton, 'click', function() {
      autocomplete.setTypes(types);
    });
  }

  setupClickListener('changetype-all', []);
  setupClickListener('changetype-address', ['address']);
  setupClickListener('changetype-establishment', ['establishment']);
  setupClickListener('changetype-geocode', ['geocode']);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>




<script>
 
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>




</head>

<body>

<div id="container">
 <?php include('../header_nav_co.php'); ?>

     
     
     <div id="featured">

     </div> <!--end  featured-->


        <div id="main">
        
        
        
        
        
        
 
<br><br>
<div id="content">
     <h1><?php echo $lang['HCONSULT']; ?> <?php echo"$user_check";?> </h1>

   
         <br/>

<div class="main">
                
                
        
        
      
        
        <?php

$result=mysql_query("SELECT * FROM EVENTS WHERE username='$user_check' ");
 
    

  while($row=mysql_fetch_array($result)){;

  
  echo"<details>";
        
            //titre
           
   
    
          echo"<summary>&nbsp&nbsp".$row['eventname'];
          echo"</strong></summary><ul><br/> ";
  
             
           
  ?>
    

            
          
                    
               
           
        
      
           


   <p class="setting"><span><?php echo $lang['NBPAR']; ?><?php echo "&nbsp&nbsp".$row['participe_nb'] ;?>  </span></br></p>


      

 <form  method='post' action="modifEvents.php?id=<?php echo $row['id']; ?>"> 

            
                    
               <p class="setting"><span><?php echo $lang['MODEVENT']; ?><button id="disableaccount"><img src="images/edit.png" alt="*Edit*"></button></span> </br></p>


      </form>
       <form  method='post' action="deleteEvent.php?id=<?php echo $row['id']; ?>"> 

            
                    
               <p class="setting"><span><?php echo $lang['SUPPEVENT']; ?><button id="disableaccount"><img src="images/edit.png" alt="*Edit*"></button></span> </p>


      </form>
      
        
            
  
          
    <?php 
         echo"<br /><br />";

                    
                   
      echo"
      
      </ul> 
        </details><br>";

      }
      ?>
    
        
            </div>







  </div> <!--end content--> 
     </div> <!--end main-->  
     




          
   
     
<div class="arrierefooter">
     <?php include('../footer.php'); ?>
          </div> <!--end arrierefooter-->
          <div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-up"></i>
	</span>
</div>
</div> <!--end contrainer-->



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>
</html>
