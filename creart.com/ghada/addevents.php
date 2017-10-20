<?php 
include_once '..\common.php';

include('../session.php');

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Events</title>
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
        
        
        
        
        
        
        
          <div id="content">



  <img src="images\Event.jpg" alt="eventbackground" width="800" height="150" /> 
  
</div>
<br><br>
 <div id="content">
     <h2><?php echo $lang['H1']; ?></h2>
	 <br/>
	 <a href="consult_events.php"><h2><?php echo $lang['H2']; ?></h2></a>
	 
        <div  class="form">
    		
               <form id="contactform" name="addevent_form" method="post" action="insert_event.php"> 
 <p class="contact"><label for="name"><?php echo $lang['NAMEEVENT']; ?></label></p> 
<input id="name" name="eventname" placeholder="<?php echo $lang['NAMETEXT']; ?>" required="" tabindex="1" type="text">


<p class="contact"><label for="name"><?php echo $lang['CATEGORY']; ?></label></p>
    			 <select class="select-style gender"  name="category">
                    <option value="null">Category</option>
		            <option value="cinema">Cinema</option>
                    <option value="music">Music</option>         
		            <option value="photography">Photography</option>
		            <option value="literature">Literature</option>
                    
</select><br><br>

 <p class="contact"><label for="name"><?php echo $lang['ADRESSE']; ?></label></p>     

<input id="pac-input" name="adresse" class="controls" type="text"
        placeholder="<?php echo $lang['MAPTEXT']; ?>">
    <div id="type-selector" class="controls">
      <input type="radio" name="type" id="changetype-all" checked="checked" >
      <label for="changetype-all">All</label>

      <input type="radio" name="type" id="changetype-establishment">
      <label for="changetype-establishment">Establishments</label>

      <input type="radio" name="type" id="changetype-address">
      <label for="changetype-address">Addresses</label>

      <input type="radio" name="type" id="changetype-geocode">
      <label for="changetype-geocode">Geocodes</label>
    </div>
    <div id="map-canvas"></div>



<!-- champ Calendrier : script pour l'appel du calendrier-->

<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    </script>
 

 <p class="contact"><label for="name"><?php echo $lang['DATE']; ?></label></p>  
<p><input id="datepicker" name="date" type="date" size="28" required="required"  /></p>
 


<p class="contact"><label for="name"><?php echo $lang['DURATION']; ?></label></p>
<input class="birthday" maxlength="2" name="duration"  placeholder="<?php echo $lang['DAY']; ?>" min="1" max="31"  type="number" required=""><label> <?php echo $lang['DAY']; ?>(s)</label>

<p class="contact"><label for="name"><?php echo $lang['STARTTIME']; ?></label></p>
<input type="time" name="starttime"> 

<p class="contact"><label for="name"><?php echo $lang['ENDTIME']; ?></label></p>
 <input type="time" name="endtime"> 
<div class="mbl">
			<p class="contact"><label for="name"><?php echo $lang['TIMEZONE']; ?></label></p>
			 <select class="select-style gender"  name="timezone" type="text">(GMT-11:00) Midway Island</option><option value="Pacific/Samoa">(GMT-11:00) Samoa</option><option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option><option value="America/Anchorage">(GMT-09:00) Alaska</option><option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US and Canada)</option><option value="America/Tijuana">(GMT-08:00) Tijuana</option><option value="America/Phoenix">(GMT-07:00) Arizona</option><option value="America/Denver">(GMT-07:00) Mountain Time (US and Canada)</option><option value="America/Chihuahua">(GMT-07:00) Chihuahua</option><option value="America/Mazatlan">(GMT-07:00) Mazatlan</option><option value="America/Mexico_City">(GMT-06:00) Mexico City</option><option value="America/Monterrey">(GMT-06:00) Monterrey</option><option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option><option value="America/Chicago">(GMT-06:00) Central Time (US and Canada)</option><option value="America/New_York">(GMT-05:00) Eastern Time (US and Canada)</option><option value="America/Bogota">(GMT-05:00) Bogota</option><option value="America/Lima">(GMT-05:00) Lima</option><option value="America/Caracas">(GMT-04:30) Caracas</option><option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option><option value="America/La_Paz">(GMT-04:00) La Paz</option><option value="America/Santiago">(GMT-04:00) Santiago</option><option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option><option value="America/Buenos_Aires">(GMT-03:00) Buenos Aires</option><option value="Greenland">(GMT-03:00) Greenland</option><option value="Atlantic/Stanley">(GMT-02:00) Stanley</option><option value="Atlantic/Azores">(GMT-01:00) Azores</option><option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option><option value="Africa/Casablanca">(GMT) Casablanca</option><option value="Europe/Dublin">(GMT) Dublin</option><option value="Europe/Lisbon">(GMT) Lisbon</option><option value="Europe/London">(GMT) London</option><option value="Africa/Monrovia">(GMT) Monrovia</option><option value="Europe/Amsterdam">(GMT+01:00) Amsterdam</option><option value="Europe/Belgrade">(GMT+01:00) Belgrade</option><option value="Europe/Berlin" selected="selected">(GMT+01:00) Berlin</option><option value="Europe/Bratislava">(GMT+01:00) Bratislava</option><option value="Europe/Brussels">(GMT+01:00) Brussels</option><option value="Europe/Budapest">(GMT+01:00) Budapest</option><option value="Europe/Copenhagen">(GMT+01:00) Copenhagen</option><option value="Europe/Ljubljana">(GMT+01:00) Ljubljana</option><option value="Europe/Madrid">(GMT+01:00) Madrid</option><option value="Europe/Paris">(GMT+01:00) Paris</option><option value="Europe/Prague">(GMT+01:00) Prague</option><option value="Europe/Rome">(GMT+01:00) Rome</option><option value="Europe/Sarajevo">(GMT+01:00) Sarajevo</option><option value="Europe/Skopje">(GMT+01:00) Skopje</option><option value="Europe/Stockholm">(GMT+01:00) Stockholm</option><option value="Europe/Vienna">(GMT+01:00) Vienna</option><option value="Europe/Warsaw">(GMT+01:00) Warsaw</option><option value="Europe/Zagreb">(GMT+01:00) Zagreb</option><option value="Europe/Athens">(GMT+02:00) Athens</option><option value="Europe/Bucharest">(GMT+02:00) Bucharest</option><option value="Africa/Cairo">(GMT+02:00) Cairo</option><option value="Africa/Harare">(GMT+02:00) Harare</option><option value="Europe/Helsinki">(GMT+02:00) Helsinki</option><option value="Europe/Istanbul">(GMT+02:00) Istanbul</option><option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option><option value="Europe/Kiev">(GMT+02:00) Kyiv</option><option value="Europe/Minsk">(GMT+02:00) Minsk</option><option value="Europe/Riga">(GMT+02:00) Riga</option><option value="Europe/Sofia">(GMT+02:00) Sofia</option><option value="Europe/Tallinn">(GMT+02:00) Tallinn</option><option value="Europe/Vilnius">(GMT+02:00) Vilnius</option><option value="Asia/Baghdad">(GMT+03:00) Baghdad</option><option value="Asia/Kuwait">(GMT+03:00) Kuwait</option><option value="Africa/Nairobi">(GMT+03:00) Nairobi</option><option value="Asia/Riyadh">(GMT+03:00) Riyadh</option><option value="Asia/Tehran">(GMT+03:30) Tehran</option><option value="Europe/Moscow">(GMT+04:00) Moscow</option><option value="Asia/Baku">(GMT+04:00) Baku</option><option value="Europe/Volgograd">(GMT+04:00) Volgograd</option><option value="Asia/Muscat">(GMT+04:00) Muscat</option><option value="Asia/Tbilisi">(GMT+04:00) Tbilisi</option><option value="Asia/Yerevan">(GMT+04:00) Yerevan</option><option value="Asia/Kabul">(GMT+04:30) Kabul</option><option value="Asia/Karachi">(GMT+05:00) Karachi</option><option value="Asia/Tashkent">(GMT+05:00) Tashkent</option><option value="Asia/Kolkata">(GMT+05:30) Kolkata</option><option value="Asia/Kathmandu">(GMT+05:45) Kathmandu</option><option value="Asia/Yekaterinburg">(GMT+06:00) Ekaterinburg</option><option value="Asia/Almaty">(GMT+06:00) Almaty</option><option value="Asia/Dhaka">(GMT+06:00) Dhaka</option><option value="Asia/Novosibirsk">(GMT+07:00) Novosibirsk</option><option value="Asia/Bangkok">(GMT+07:00) Bangkok</option><option value="Asia/Jakarta">(GMT+07:00) Jakarta</option><option value="Asia/Krasnoyarsk">(GMT+08:00) Krasnoyarsk</option><option value="Asia/Chongqing">(GMT+08:00) Chongqing</option><option value="Asia/Hong_Kong">(GMT+08:00) Hong Kong</option><option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur</option><option value="Australia/Perth">(GMT+08:00) Perth</option><option value="Asia/Singapore">(GMT+08:00) Singapore</option><option value="Asia/Taipei">(GMT+08:00) Taipei</option><option value="Asia/Ulaanbaatar">(GMT+08:00) Ulaan Bataar</option><option value="Asia/Urumqi">(GMT+08:00) Urumqi</option><option value="Asia/Irkutsk">(GMT+09:00) Irkutsk</option><option value="Asia/Seoul">(GMT+09:00) Seoul</option><option value="Asia/Tokyo">(GMT+09:00) Tokyo</option><option value="Australia/Adelaide">(GMT+09:30) Adelaide</option><option value="Australia/Darwin">(GMT+09:30) Darwin</option><option value="Asia/Yakutsk">(GMT+10:00) Yakutsk</option><option value="Australia/Brisbane">(GMT+10:00) Brisbane</option><option value="Australia/Canberra">(GMT+10:00) Canberra</option><option value="Pacific/Guam">(GMT+10:00) Guam</option><option value="Australia/Hobart">(GMT+10:00) Hobart</option><option value="Australia/Melbourne">(GMT+10:00) Melbourne</option><option value="Pacific/Port_Moresby">(GMT+10:00) Port Moresby</option><option value="Australia/Sydney">(GMT+10:00) Sydney</option><option value="Asia/Vladivostok">(GMT+11:00) Vladivostok</option><option value="Asia/Magadan">(GMT+12:00) Magadan</option><option value="Pacific/Auckland">(GMT+12:00) Auckland</option><option value="Pacific/Fiji">(GMT+12:00) Fiji</option></select>
			
			
</div> <br />
 <p class="contact"><label for="name"><?php echo $lang['TICKETPRICE']; ?></label></p> 
<input id="name" name="ticketprice" placeholder="ex : 002.50DT" required="" tabindex="1" type="text" pattern="[0-9]{3}[.][0-9]{2}[A-Z]{2}">
 <p class="contact"><label for="name"><?php echo $lang['TICKETLINK']; ?></label></p> 
<input id="name" name="ticketlink" placeholder="<?php echo $lang['TICKETTEXT']; ?>" required="" tabindex="1" type="text" >
 </br>
  <p class="contact"><label for="name"><?php echo $lang['DESCRIPTION']; ?></label></p> 
<textarea id="notes" placeholder="<?php echo $lang['DESCTEXT']; ?>" rows="3" name="description" cols="50" type="text"></textarea>
 </br> </br>
 
 

       
<input class="buttom" name="submit" id="submit" tabindex="5" value="<?php echo $lang['ADDEVENT']; ?>" type="submit">
</form> 
</div>

<div class="main">
                
                
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




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>
</html>
