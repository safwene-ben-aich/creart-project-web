<?php include_once '../common.php';
include('../session.php');?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>

    <!-- Add the OuiBounce CSS & Font -->
 
    <link rel="stylesheet" href="..\ghada\css\ouibounce.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Load jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <!-- Add OuiBounce JS -->
    <script src="..\ghada\build\ouibounce.js"></script>
  

  </head>

  <body>


    <!-- OuiBounce Modal -->
    <div id="ouibounce-modal">
      <div class="underlay"></div>
      <div class="modal">
        <div class="modal-title">

        <?php $resultInterssed=mysql_query("select * from subscriber where username='$user_check'");
		 while ($row = mysql_fetch_array($resultInterssed)){
  $interestedBy=$row['interested'];
  $in = explode (" ", $interestedBy);

 }
 
  ?>
          <h3><?php echo $lang['HEY']; ?> <?php echo "".$interestedBy ;?>!?</h3>
        </div>
          <div class="modal-body">
          <h2><center><?php echo $lang['CHECK']; ?></center></h2>
          
          
           
          <?php 




// affich emp
if($in[0]=="cinema")
		{	$result=mysql_query("select * from events where category='Cinema' LIMIT 3");
		
		while($row=mysql_fetch_array($result))
{
	
echo "<ul>";
echo"<li>";
//eventname
	$nomrep=$row['eventname'];
	echo"<h4 class='h4'>";
	echo "&nbsp&nbsp".$nomrep ;
	echo"</h4>";
//adresse	
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";echo '<img src="..\ghada\images\place.png"  />';echo "&nbsp&nbsp".$row['adresse'] ;
	echo"<br />";
	echo"<br />";
	//date
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";echo '<img src="..\ghada\images\date.png"  />';echo "&nbsp&nbsp".$row['date'] ;

echo "</ul>";
echo"</li>";

}
		
	
	
		}

	elseif ($in[1]=="music")
		{	$result=mysql_query("select * from events where category='Music' LIMIT 3");
		
		while($row=mysql_fetch_array($result))
{
	
echo "<ul>";
echo"<li>";
//eventname
	$nomrep=$row['eventname'];
	echo"<h4 class='h4'>";
	echo "&nbsp&nbsp".$nomrep ;
	echo"</h4>";
//adresse	
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";echo '<img src="..\ghada\images\place.png"  />';echo "&nbsp&nbsp".$row['adresse'] ;
	echo"<br />";
	echo"<br />";
	//date
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";echo '<img src="..\ghada\images\date.png"  />';echo "&nbsp&nbsp".$row['date'] ;

echo "</ul>";
echo"</li>";

}
	


	
	
		}


  elseif ($in[2]=="photography")
    { $result=mysql_query("select * from events where category='Photography' LIMIT 3");
    
    while($row=mysql_fetch_array($result))
{
  
echo "<ul>";
echo"<li>";
//eventname
  $nomrep=$row['eventname'];
  echo"<h4 class='h4'>";
  echo "&nbsp&nbsp".$nomrep ;
  echo"</h4>";
//adresse 
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";echo '<img src="..\ghada\images\place.png"  />';echo "&nbsp&nbsp".$row['adresse'] ;
  echo"<br />";
  echo"<br />";
  //date
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";echo '<img src="..\ghada\images\date.png"  />';echo "&nbsp&nbsp".$row['date'] ;

echo "</ul>";
echo"</li>";

}
  


  
  
    }

  elseif ($in[3]=="literature")
    { $result=mysql_query("select * from events where category='Literature' LIMIT 3");
    
    while($row=mysql_fetch_array($result))
{
  
echo "<ul>";
echo"<li>";
//eventname
  $nomrep=$row['eventname'];
  echo"<h4 class='h4'>";
  echo "&nbsp&nbsp".$nomrep ;
  echo"</h4>";
//adresse 
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";echo '<img src="..\ghada\images\place.png"  />';echo "&nbsp&nbsp".$row['adresse'] ;
  echo"<br />";
  echo"<br />";
  //date
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";echo '<img src="..\ghada\images\date.png"  />';echo "&nbsp&nbsp".$row['date'] ;

echo "</ul>";
echo"</li>";

}
  


  
  
    }


else echo"error";
 
?>

          <form action="../ghada/more_details.php">
            
            <input type="submit" value="<?php echo $lang['MOREDETAILS']; ?> &raquo;" href="../ghada/more_details.php">
         
          </form>
         

        </div>

        <div class="modal-footer">
   
          <p><?php echo $lang['NOTHANKS']; ?></p>
        </div>
      </div>
    
    
    
    
    </div>

    <script>

      var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
        aggressive: true,
        timer: 0,
        callback: function() { console.log('ouibounce fired!'); }
      });

      $('body').on('click', function() {
        $('#ouibounce-modal').hide();
      });

      $('#ouibounce-modal .modal-footer').on('click', function() {
        $('#ouibounce-modal').hide();
      });

      $('#ouibounce-modal .modal').on('click', function(e) {
        e.stopPropagation();
      });
    </script>
  
  
  
  
  </body>
</html>
