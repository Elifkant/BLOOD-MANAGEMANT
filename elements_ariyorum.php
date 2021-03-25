<?php

   require_once("veritabani.php");
   require_once("kanariyorum.php");
   
?>




<table width="100%"  border="1">

	<style >
		
		table{

padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #2c3e50;
color: white;
}
	</style>
	
	<tr>
		<td >
<th>İSİM</th>
<th>SOYİSİM</th>
<th>GSM</th>
<th>MAİL</th>
<th>ŞEHİR</th>



		</td>
		<td>
			


<?php
   
   require_once("veritabani.php");
   require_once("kanariyorum.php");
   

     if(isset($_POST['buton_arayan']))//Kan arıyorum sayfasındaki submit
    {


$hostname = "localhost";
$username = "root";
$password = "";
$dbname="veritabani";

$connect= mysqli_connect($hostname,$username,$password,$dbname);



    
    $tc_id = $_POST['tc_id'];
    $name = $_POST['name'];
    $surname=$_POST['surname'];
 
   
   
    $city=$_POST['city'];
    $district=$_POST['district'];
    $dob=$_POST['dob'];
    $kan=$_POST['kan'];
   

   


$checkbox1=$_POST['gunler'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  







    $query = "INSERT INTO kan_ariyan  (tc_id, name, surname,city,district,dob,type,available_day)
                        VALUES ('$tc_id','$name','$surname','$city','$district',
                        '$dob', '$kan','$chk')";
     
     $result=mysqli_query($connect,$query);

                        if($result){
                        	echo "kayit eklendi <br>";
                        }


                         else{
                         	 echo "kayit yapilamadi";
                         }

$stmt = "SELECT * FROM bagisci WHERE available_day='$chk' AND city='$city' AND district='$district' AND type='$kan'";

    if($my_query = $connect->query($stmt)){
        if($my_query->num_rows > 0){
            $r = $my_query->fetch_array();
            
 echo "<tr><td>" .$r["name"]."</td><td>".$r["surname"]."</td><td>".$r["gsm"]."</td><td>".$r["email"]."</td><td>".$r["city"]."</td><td>";


  
       






        }

        echo " </table>";

        
       
    }
    


       
    ?>



		</td>
	</tr>
</table>

<?php

mysqli_close($connect);
                       
}

?>