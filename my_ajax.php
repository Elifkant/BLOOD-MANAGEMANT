<?php
include('veritabani.php');
if($_POST['id']){
$id=$_POST['id'];
if($id==0){
 echo "<option>İl Secin</option>";
}else{
 $sql = mysqli_query($connect,"SELECT * FROM `ilce` WHERE il_no='$id'");
 while($row = mysqli_fetch_array($sql)){
 echo '<option value="'.$row['ilce_no'].'">'.$row['isim'].'</option>';
 }
 }
}
?>