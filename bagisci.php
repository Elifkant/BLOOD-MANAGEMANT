
<?php     

require_once("veritabani.php");


?>

<style>
<?php include 'style.css'; ?>
</style>

<form action="elements_veriyorum.php" method="post">

 TC: <br/>
 <input type="text" name="tc_id" placeholder="Tc Giriniz" /><br/>


 İsim: <br/>
 <input type="text" name="name" placeholder="İsim Giriniz"/><br/>


 Soyisim: <br/>
 <input type="text" name="surname" placeholder="Soyisim Giriniz" /><br/>

  GSM: <br/>
 <input type="text" name="gsm" placeholder="GSM Giriniz" /><br/>

 E-mail: <br/>
 <input type="text" name="email" placeholder="Mail Giriniz" /><br/>

  <br/> <br/>


<label>Sehir :</label>
<select name="city" id="city"  class="city_class">

<option value="0">Sehir Secin</option>
<?php
include('veritabani.php');
$sql = mysqli_query($connect,"SELECT * FROM il");
while($row=mysqli_fetch_array($sql))
{
echo '<option value="'.$row['il_no'].'">'.$row['isim'].'</option>';
} ?>
</select><br/><br/>
<label>İlce :</label>

<select name="district" id="district" class="city">
<option>İlce Secin</option>
</select>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function()
{
$(".city_class").change(function()
{
var country_id=$(this).val();
var post_id = 'id='+ country_id;
 
$.ajax
({
type: "POST",
url: "my_ajax.php",
data: post_id,
cache: false,
success: function(cities)
{
$(".city").html(cities);
} 
});
 
});
});
</script>





<br/>
<br/>
 <br/>

 Adres: <br/>
 <input type="text" name="adress" /><br/>

 Dogum Gunu: <br/>
 <input type="text" name="dob" /><br/>
 






<label>Kan Grubu Secin :</label>
 <select id="kan" name="kan">  





<?php
     $sql="SELECT * FROM kan_t";
     if($result=mysqli_query($connect,$sql)){
   if(mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_array($result)){

      echo '<option value = "'.$row['1'].'">'.$row['1'].'</option>';

    }
  }
}



?>

<br><br/><br/>

Pazartesi<input type="checkbox" name="gunler[]" value="Pazartesi" /><br>
Sali   <input type="checkbox" name="gunler[]" value="sali" /><br>
Carsamba <input type="checkbox" name="gunler[]" value="carsamba" /><br>
Persembe <input type="checkbox" name="gunler[]" value="persembe" /><br>
Cuma   <input type="checkbox" name="gunler[]" value="cuma" /><br>
Cumartesi <input type="checkbox" name="gunler[]" value="persembe" /><br>
Pazar   <input type="checkbox" name="gunler[]" value="cuma" /><br>


<input type="submit"  name="submit_b"  class="btn" value="Bagisci Formu gönder" />


 
 </form>