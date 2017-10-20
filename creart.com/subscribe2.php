<?php
include_once 'common.php';

include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home_co.php");
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subscribe</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />
    <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">
 <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	

    <script type="text/javascript">
    
	function validatePass(password, p2) {
    if (password.value != p2.value || password.value == '' || p2.value == '') {
        p2.setCustomValidity('Password incorrect');
    } else {
        p2.setCustomValidity('');
    }
}
    
    </script>



   
    
<!--  <script type="text/javascript" language="javascript">
  
	
       
 alert("you should accept our terms and condition in order to use our services");
		 


	 </script>	-->



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
<script>


	swal("<?php echo $lang['warning']; ?>");

</script>
<div id="container">

<?php include('header_nav.php'); ?>

     <div id="featured">
     </div> <!--end featured-->
     
     
        <div id="main">
          <div id="content">

          <?php include('share.html'); ?>

	

    
      <div  class="form">
    		<form id="contactform" name="subscribe_form" method="post" action="addsubscriber.php" enctype="multipart/form-data"  > 
    			<p class="contact"><label for="name"><?php echo $lang['NAME']; ?></label></p> 
    			<input id="name" name="name" placeholder="<?php echo $lang['FIRST_AND_LAST_NAME']; ?>" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label><label for="email" id="error_subscribe"> <?php echo $erreur_mail ; ?> </label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
                <p class="contact"><label for="username"><?php echo $lang['CREATE_A_USERNAME']; ?></label> <label for="email" id="error_subscribe"> <?php echo $erreur_user ; ?> </label></p> 
    			<input id="username" name="username" placeholder="<?php echo $lang['USERNAME']; ?>" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="password"><?php echo $lang['CREATE_A_PASSWORD']; ?></label></p> 
    			<input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword"><?php echo $lang['CONFIRM_YOUR_PASSWORD']; ?></label></p> 
    			<input type="password" id="repassword" name="repassword" required="" onfocus="validatePass(document.getElementById('password'), this);" oninput="validatePass(document.getElementById('password'), this);" > 
        

        <p class="contact"><label for="Birthday"><?php echo $lang['YOUR_BIRTHDAY']; ?></label></p> 
    			<input  type="date" id="Birthday" name="Birthday" required="required"> 
        <!--
        
               <fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">Month</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </label>
                 </select>    
                <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" min="1" max="31"  type="number" required=""></label>
                <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" min="1920" type="number" required=""></label>
              </fieldset>
  -->
            <select class="select-style gender" name="gender" >
            <option value="null"><?php echo $lang['I_AM']; ?></option>         
             <option value="Male">Male</option>
            <option value="Female">Female</option>           
            </select><br><br>
            

            <p class="contact"><label for="phone"><?php echo $lang['MOBILE_PHONE']; ?></label></p> 
            <input id="phone" name="phone" placeholder="<?php echo $lang['PHONE_NUBMBER']; ?>" required="required"  type="number"> <br>







<select class="select-style gender"  name="Country">
		            <option value="null"> <?php echo $lang['COUNTRY']; ?></option>         
		            <option value="AX">Åland Islands</option>
		            <option value="AF">Afghanistan</option>
		            <option value="AL">Albania</option>
		            <option value="DZ">Algeria</option>
		            <option value="AS">American Samoa</option>
		            <option value="AD">Andorra</option>
		            <option value="AO">Angola</option>
		            <option value="AI">Anguilla</option>
		            <option value="AQ">Antarctica</option>
		            <option value="AG">Antigua And Barbuda</option>
		            <option value="AR">Argentina</option>
		            <option value="AM">Armenia</option>
		            <option value="AW">Aruba</option>
		            <option value="AU">Australia</option>
		            <option value="AT">Austria</option>
		            <option value="AZ">Azerbaijan</option>
		            <option value="BS">Bahamas</option>
		            <option value="BH">Bahrain</option>
		            <option value="BD">Bangladesh</option>
		            <option value="BB">Barbados</option>
		            <option value="BY">Belarus</option>
		            <option value="BE">Belgium</option>
		            <option value="BZ">Belize</option>
		            <option value="BJ">Benin</option>
		            <option value="BM">Bermuda</option>
		            <option value="BT">Bhutan</option>
		            <option value="BO">Bolivia</option>
		            <option value="BA">Bosnia and Herzegovina</option>
		            <option value="BW">Botswana</option>
		            <option value="BV">Bouvet Island</option>
		            <option value="BR">Brazil</option>
		            <option value="IO">British Indian Ocean Territory</option>
		            <option value="BN">Brunei</option>
		            <option value="BG">Bulgaria</option>
		            <option value="BF">Burkina Faso</option>
		            <option value="BI">Burundi</option>
		            <option value="KH">Cambodia</option>
		            <option value="CM">Cameroon</option>
		            <option value="CA">Canada</option>
		            <option value="CV">Cape Verde</option>
		            <option value="KY">Cayman Islands</option>
		            <option value="CF">Central African Republic</option>
		            <option value="TD">Chad</option>
		            <option value="CL">Chile</option>
		            <option value="CN">China</option>
		            <option value="CX">Christmas Island</option>
		            <option value="CC">Cocos (Keeling) Islands</option>
		            <option value="CO">Colombia</option>
		            <option value="KM">Comoros</option>
		            <option value="CG">Congo</option>
		            <option value="CD">Congo, Democractic Republic</option>
		            <option value="CK">Cook Islands</option>
		            <option value="CR">Costa Rica</option>
		            <option value="CI">Cote D'Ivoire (Ivory Coast)</option>
		            <option value="HR">Croatia (Hrvatska)</option>
		            <option value="CU">Cuba</option>
		            <option value="CY">Cyprus</option>
		            <option value="CZ">Czech Republic</option>
		            <option value="DK">Denmark</option>
		            <option value="DJ">Djibouti</option>
		            <option value="DM">Dominica</option>
		            <option value="DO">Dominican Republic</option>
		            <option value="TP">East Timor</option>
		            <option value="EC">Ecuador</option>
		            <option value="EG">Egypt</option>
		            <option value="SV">El Salvador</option>
		            <option value="GQ">Equatorial Guinea</option>
		            <option value="ER">Eritrea</option>
		            <option value="EE">Estonia</option>
		            <option value="ET">Ethiopia</option>
		            <option value="FK">Falkland Islands (Islas Malvinas)</option>
		            <option value="FO">Faroe Islands</option>
		            <option value="FJ">Fiji Islands</option>
		            <option value="FI">Finland</option>
		            <option value="FR">France</option>
		            <option value="FX">France, Metropolitan</option>
		            <option value="GF">French Guiana</option>
		            <option value="PF">French Polynesia</option>
		            <option value="TF">French Southern Territories</option>
		            <option value="GA">Gabon</option>
		            <option value="GM">Gambia, The</option>
		            <option value="GE">Georgia</option>
		            <option value="DE">Germany</option>
		            <option value="GH">Ghana</option>
		            <option value="GI">Gibraltar</option>
		            <option value="GR">Greece</option>
		            <option value="GL">Greenland</option>
		            <option value="GD">Grenada</option>
		            <option value="GP">Guadeloupe</option>
		            <option value="GU">Guam</option>
		            <option value="GT">Guatemala</option>
		            <option value="GG">Guernsey</option>
		            <option value="GN">Guinea</option>
		            <option value="GW">Guinea-Bissau</option>
		            <option value="GY">Guyana</option>
		            <option value="HT">Haiti</option>
		            <option value="HM">Heard and McDonald Islands</option>
		            <option value="HN">Honduras</option>
		            <option value="HK">Hong Kong S.A.R.</option>
		            <option value="HU">Hungary</option>
		            <option value="IS">Iceland</option>
		            <option value="IN">India</option>
		            <option value="ID">Indonesia</option>
		            <option value="IR">Iran</option>
		            <option value="IQ">Iraq</option>
		            <option value="IE">Ireland</option>
		            <option value="IM">Isle of Man</option>
		            <option value="IT">Italy</option>
		            <option value="JM">Jamaica</option>
		            <option value="JP">Japan</option>
		            <option value="JE">Jersey</option>
		            <option value="JO">Jordan</option>
		            <option value="KZ">Kazakhstan</option>
		            <option value="KE">Kenya</option>
		            <option value="KI">Kiribati</option>
		            <option value="KR">Korea</option>
		            <option value="KP">Korea, North</option>
		            <option value="KW">Kuwait</option>
		            <option value="KG">Kyrgyzstan</option>
		            <option value="LA">Laos</option>
		            <option value="LV">Latvia</option>
		            <option value="LB">Lebanon</option>
		            <option value="LS">Lesotho</option>
		            <option value="LR">Liberia</option>
		            <option value="LY">Libya</option>
		            <option value="LI">Liechtenstein</option>
		            <option value="LT">Lithuania</option>
		            <option value="LU">Luxembourg</option>
		            <option value="MO">Macau S.A.R.</option>
		            <option value="MK">Macedonia</option>
		            <option value="MG">Madagascar</option>
		            <option value="MW">Malawi</option>
		            <option value="MY">Malaysia</option>
		            <option value="MV">Maldives</option>
		            <option value="ML">Mali</option>
		            <option value="MT">Malta</option>
		            <option value="MH">Marshall Islands</option>
		            <option value="MQ">Martinique</option>
		            <option value="MR">Mauritania</option>
		            <option value="MU">Mauritius</option>
		            <option value="YT">Mayotte</option>
		            <option value="MX">Mexico</option>
		            <option value="FM">Micronesia</option>
		            <option value="MD">Moldova</option>
		            <option value="MC">Monaco</option>
		            <option value="MN">Mongolia</option>
		            <option value="ME">Montenegro</option>
		            <option value="MS">Montserrat</option>
		            <option value="MA">Morocco</option>
		            <option value="MZ">Mozambique</option>
		            <option value="MM">Myanmar</option>
		            <option value="NA">Namibia</option>
		            <option value="NR">Nauru</option>
		            <option value="NP">Nepal</option>
		            <option value="NL">Netherlands</option>
		            <option value="AN">Netherlands Antilles</option>
		            <option value="NC">New Caledonia</option>
		            <option value="NZ">New Zealand</option>
		            <option value="NI">Nicaragua</option>
		            <option value="NE">Niger</option>
		            <option value="NG">Nigeria</option>
		            <option value="NU">Niue</option>
		            <option value="NF">Norfolk Island</option>
		            <option value="MP">Northern Mariana Islands</option>
		            <option value="NO">Norway</option>
		            <option value="OM">Oman</option>
		            <option value="PK">Pakistan</option>
		            <option value="PW">Palau</option>
		            <option value="PS">Palestinian Territory, Occupied</option>
		            <option value="PA">Panama</option>
		            <option value="PG">Papua new Guinea</option>
		            <option value="PY">Paraguay</option>
		            <option value="PE">Peru</option>
		            <option value="PH">Philippines</option>
		            <option value="PN">Pitcairn Island</option>
		            <option value="PL">Poland</option>
		            <option value="PT">Portugal</option>
		            <option value="PR">Puerto Rico</option>
		            <option value="QA">Qatar</option>
		            <option value="RE">Reunion</option>
		            <option value="RO">Romania</option>
		            <option value="RU">Russia</option>
		            <option value="RW">Rwanda</option>
		            <option value="SH">Saint Helena</option>
		            <option value="KN">Saint Kitts And Nevis</option>
		            <option value="LC">Saint Lucia</option>
		            <option value="PM">Saint Pierre and Miquelon</option>
		            <option value="VC">Saint Vincent And The Grenadines</option>
		            <option value="WS">Samoa</option>
		            <option value="SM">San Marino</option>
		            <option value="ST">Sao Tome and Principe</option>
		            <option value="SA">Saudi Arabia</option>
		            <option value="SN">Senegal</option>
		            <option value="RS">Serbia</option>
		            <option value="SC">Seychelles</option>
		            <option value="SL">Sierra Leone</option>
		            <option value="SG">Singapore</option>
		            <option value="SX">Sint Maarten</option>
		            <option value="SK">Slovakia</option>
		            <option value="SI">Slovenia</option>
		            <option value="SB">Solomon Islands</option>
		            <option value="SO">Somalia</option>
		            <option value="ZA">South Africa</option>
		            <option value="GS">South Georgia And The South Sandwich Islands</option>
		            <option value="ES">Spain</option>
		            <option value="LK">Sri Lanka</option>
		            <option value="SD">Sudan</option>
		            <option value="SR">Suriname</option>
		            <option value="SJ">Svalbard And Jan Mayen Islands</option>
		            <option value="SZ">Swaziland</option>
		            <option value="SE">Sweden</option>
		            <option value="CH">Switzerland</option>
		            <option value="SY">Syria</option>
		            <option value="TW">Taiwan</option>
		            <option value="TJ">Tajikistan</option>
		            <option value="TZ">Tanzania</option>
		            <option value="TH">Thailand</option>
		            <option value="TL">Timor-Leste</option>
		            <option value="TG">Togo</option>
		            <option value="TK">Tokelau</option>
		            <option value="TO">Tonga</option>
		            <option value="TT">Trinidad And Tobago</option>
		            <option value="TN">Tunisia</option>
		            <option value="TR">Turkey</option>
		            <option value="TM">Turkmenistan</option>
		            <option value="TC">Turks And Caicos Islands</option>
		            <option value="TV">Tuvalu</option>
		            <option value="UG">Uganda</option>
		            <option value="UA">Ukraine</option>
		            <option value="AE">United Arab Emirates</option>
		            <option value="GB">United Kingdom</option>
		            <option value="US">United States</option>
		            <option value="UM">United States Minor Outlying Islands</option>
		            <option value="UY">Uruguay</option>
		            <option value="UZ">Uzbekistan</option>
		            <option value="VU">Vanuatu</option>
		            <option value="VA">Vatican City State (Holy See)</option>
		            <option value="VE">Venezuela</option>
		            <option value="VN">Vietnam</option>
		            <option value="VG">Virgin Islands (British)</option>
		            <option value="VI">Virgin Islands (US)</option>
		            <option value="WF">Wallis And Futuna Islands</option>
		            <option value="EH">WESTERN SAHARA</option>
		            <option value="YE">Yemen</option>
		            <option value="ZM">Zambia</option>
		            <option value="ZW">Zimbabwe</option>
            </select><br><br>
            
            
            <p class="contact"><label for="Pic"><?php echo $lang['YOUR_PIC']; ?></label></p> 

            <input type="file" id="exampleInputFile" name="pic">
            
            
<div>
    			<p class="contact"><label for="checkbox"><?php echo $lang['INTERESTED_IN']; ?></label></p> </br>
                
                </div>
				<div class="p-container">
				<label class="checkbox two"><input type="checkbox" name="Interested1" value="cinema"><i></i></label><h2>Cinema</h2></br>
                <label class="checkbox two"><input type="checkbox" name="Interested2" value="music"><i></i></label><h2>Music</h2></br>
			    <label class="checkbox two"><input type="checkbox" name="Interested3" value="photography"><i></i></label><h2>Photography</h2></br>
                <label class="checkbox two"><input type="checkbox" name="Interested4" value="literature"><i></i></label><h2>Literature</h2></br>
                </div>

</br></br>
    			
                
                
                

           <p class="contact"><label> <?php echo $lang['I_ACCEPT_THE']; ?> <a id="cond-about" href="aboutus.html" target="_blank"><?php echo $lang['TERMS_AND_CONDITIONS']; ?></a></label></p>
                
                <div class="p-container2">
           <label class="checkbox two"><input type="checkbox" name="conditions"   value="yes" required="required" ><i></i></label> 
             </br></br>
                </div>









                             </br>


 




            
            <input class="buttom" name="submit" id="submit" tabindex="5" value="<?php echo $lang['SIGN_ME_UP']; ?>"  type="submit"   > 	 
   </form> 
</div>      








     </div> <!--end content--> 
     </div> <!--end main-->  
     
     
<div class="arrierefooter">
<?php include('footer.php'); ?>

          </div> <!--end arrierefooter-->
                                        <div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-up"></i>
	</span>
</div>
         
</div> <!--end contrainer-->

 <!--   <script>
function(){
	swal("Good job!", "you have been subscribed!", "success");
	}
 </script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


</body>
</html>
