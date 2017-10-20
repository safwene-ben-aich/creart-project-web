<?php

$result=mysql_query("SELECT * 
FROM EVENTS WHERE (
DATE
BETWEEN  '2015/01/01'
AND  '2015/01/30'
) ");
 
    

	while($row=mysql_fetch_array($result)){;

	
	echo"<details>";
				
				    //titre
					 
   
    
					echo"<summary>&nbsp&nbsp".$row['eventname'];
					echo"</strong></summary><ul>";
	
					
					
    			    //adresse
					echo '<img src="images\place.png"  />&nbsp<span style="font-weight : bold;">Adresse:&nbsp&nbsp</span>';
	                echo "".$row['adresse'] ;
	                echo"<br /><br />";
					
					//date	
					echo '<img src="images\date.png"  />';
	                echo '<span style="font-weight : bold;">&nbspDate:&nbsp&nbsp</span>'.$row['date'] ;
	                echo"<br /><br />";;

					
					 //duration
					 echo '<img src="images\duration.png"  /><span style="font-weight : bold;">&nbspDuration:&nbsp&nbsp</span>';
	                 echo "".$row['duration'] ;
	                 echo"&nbspDay(s)";
	                 echo"<br /><br />";
	 

					
					
					
					  //start time + end time
	                 echo '<img src="images\start_end_time.png"  /><span style="font-weight : bold;">&nbspTime:&nbsp&nbsp</span>';
	                 echo "From&nbsp".$row['starttime'] ;
	                 echo "&nbsp&nbspTo&nbsp&nbsp".$row['endtime'] ;
	 
	                 echo"<br /><br />";

					
					
					
					  // time zone
	                 echo '<img src="images\time_zone.png"  /><span style="font-weight : bold;">&nbspTime Zone:&nbsp&nbsp</span>';
	                 echo "".$row['timezone'] ;
	                 echo"<br /><br />";

					
					//ticket price
						
					   echo '<img src="images\price.png"  /><span style="font-weight : bold;">&nbspTicket Price:&nbsp&nbsp</span>';
	                   echo "".$row['ticketprice'] ;
	                   echo"<br /><br />";

					
						
					//ticket link
		             echo '<img src="images\link.png"  /><span style="font-weight : bold;">&nbspTicket Link:&nbsp&nbsp</span>';
		             echo "".$row['ticketlink'] ;
	                 echo"<br /><br />";

					
					
                    
					
						 // description
		             echo '<img src="images\notes.png"  /><span style="font-weight : bold;">&nbspDescription:&nbsp&nbsp</span>';
		             echo "".$row['description'] ;
                     echo"<br /><br />";

						
	?>
		
<form  id="contactform" method='post' action="JoinEvent.php?id=<?php echo $row['id']; ?>"'#sthash.30q9iKvP.dpbs'> 

            
					<input class='buttom' name='submit' id='submit' tabindex='5' value='Participer' type='submit'>
                    

					 
		             <?php echo "&nbsp&nbsp".$row['participe_nb'] ;
					 
					 echo'<span style="font-weight : bold;">&nbspParticipants</span>';
					
?>
			</form>
            
            
           			  <br /><br />

            <?php
include('share_event.html');
?>


 
	
          
		<?php 
			   echo"<br /><br />";

                    
                   
			echo"
			
			</ul>	
				</details>";
		  }
		  ?>
		