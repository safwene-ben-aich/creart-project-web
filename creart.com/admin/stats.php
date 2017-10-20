<?php
require_once 'config.php';
require_once 'hit.php';


$selectHits = mysql_query ("SELECT * FROM stats WHERE date='".$time."' GROUP BY ip") or die (mysql_error());
$uniqueToday =mysql_num_rows ($selectHits);
$hitsToday =mysql_result (mysql_query("SELECT SUM(hits) as total FROM stats WHERE date='".$time."' GROUP BY date"),0,"total");
$totalUHits =mysql_result (mysql_query("SELECT COUNT(hits)FROM stats"),0);
$totalHits= mysql_result(mysql_query("SELECT SUM(hits) as total FROM stats"),0,"total");
$diff = time()-300;
$countOnline=mysql_query ("SELECT * FROM stats WHERE online>'".$diff."'") or die(mysql_error());
$countOnline =mysql_num_rows($countOnline);
$annee=date('Y');
$age1=mysql_result( mysql_query ("SELECT count(id) as total FROM subscriber where  10<'$annee' - extract(year FROM birthday)&& '$annee' - extract(year FROM birthday)<25 "),0);
$age2=mysql_result( mysql_query ("SELECT count(id) as total FROM subscriber where  25<'$annee' - extract(year FROM birthday)&& '$annee' - extract(year FROM birthday)<50 "),0);
$age3=mysql_result( mysql_query ("SELECT count(id) as total FROM subscriber where  50<'$annee' - extract(year FROM birthday)&& '$annee' - extract(year FROM birthday)<70 "),0);
$age4=mysql_result( mysql_query ("SELECT count(id) as total FROM subscriber where  70<'$annee' - extract(year FROM birthday) "),0);
$age5=mysql_result( mysql_query ("SELECT count(id) as total FROM subscriber where  10>'$annee' - extract(year FROM birthday) "),0);
$sexe=mysql_result( mysql_query ("SELECT count(id) as total FROM subscriber where  gender='male'"),0);
$sexe2=mysql_result( mysql_query ("SELECT count(id) as total FROM subscriber where  gender='female'"),0);
//stat interest
$string=NULL;
$sql_query="SELECT * FROM subscriber";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))

{
$i=$row[10];
$string=$i.' '.$string;
}

$string=$string.' ';

$array=array();
$word="";
$j=-1;
for ($i=0;$i<strlen($string);$i++){
if ($string[$i]!=' '){
$word=$word.$string[$i];
}
else {
	$j++;
	$array[$j]=$word;
	$word="";
}
}
$nbCinema=$nbPhotography=$nbMusic=$nbLiterature=0;
foreach($array as $element){
switch ($element) {
	case 'cinema':
		$nbCinema++;
		
		break;
		case 'photography':
		$nbPhotography++;
		
		break;
		case 'music':
		$nbMusic++;
		
		break;
		case 'literature':
		$nbLiterature++;
		
		break;
	
	default:
		
		break;
}

}


?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['age interval', 'number if subscriber'],
          ['Age between 10 and 25', <?php echo $age1?>],
          ['Age between 25 ans 50', <?php echo $age2?>],
          ['Age between 50 and 70', <?php echo $age3?>],
          ['Age superior to 70', <?php echo $age4?>],
          ['Age inferior to 10', <?php echo $age5?>]
        ]);

        var options = {
          title: 'Age of the users'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['sexe', 'number of users'],
          ['male', <?php echo $sexe?>],
          ['female', <?php echo $sexe2?>],
          
        ]);

        var options = {
          title: 'Gender of the users'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['interest', 'number of users'],
          
          ['Music', <?php echo $nbMusic?>],
          ['Literature', <?php echo $nbLiterature?>],
          ['Cinema', <?php echo $nbCinema?>],
		  ['Photography', <?php echo $nbPhotography?>],
          
        ]);

        var options = {
          title: 'Interests of the users'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <center>
<h3>Unique visitors today : <?php echo $uniqueToday ?> <br/>
Number of loaded pages today : <?php echo $hitsToday ?> <br/>
<br/>
Total unique visitors :<?php echo $totalUHits ?> <br/>
Number of loaded pages :<?php echo $totalHits ?> <br/>

Current visitors online :<?php echo $countOnline ?> <br/></br> </br></h3>
</center>
 <center>  <div id="piechart" style="width: 800px; height: 400px;"></div> 
 <div id="piechart2" style="width: 800px; height: 400px;"></div> 
 <div id="piechart3" style="width: 800px; height: 400px; "></div> 
 </center>
           
  </body>
</html>

