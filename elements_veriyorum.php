<?php
   
   require_once("veritabani.php");
   require_once("bagisci.php");
   


     if(isset($_POST['submit_b']))//Kan arıyorum sayfasındaki submit
    {


$hostname = "localhost";
$username = "root";
$password = "";
$dbname="veritabani";

$connect= mysqli_connect($hostname,$username,$password,$dbname);



    
    $tc_id = $_POST['tc_id'];
    $name = $_POST['name'];
    $surname=$_POST['surname'];
    $gsm=$_POST['gsm'];
   
    $email=$_POST['email'];
    $adress=$_POST['adress'];
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



    $query = "INSERT INTO bagisci  (tc_id, name, surname,gsm,email,city,district,address,dob,type,available_day)

                        VALUES ('$tc_id','$name','$surname','$gsm','$email','$city','$district','$adress',
                        '$dob', '$kan','$chk')";
     
     $result=mysqli_query($connect,$query);

                        if($result){
                        	echo "kayit eklendi";
                        }


                         else{
                         	 echo "kayit yapilamadi";
                         }

                        
                         mysqli_close($connect);
                       

       
    }




    ?>