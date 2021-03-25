
<?php 



?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uygun Bagiscilar</title>
<style>
#bagisci {
border-collapse: collapse;
width: 100%;
}
 
#bagisci td, #bagisci th {
border: 1px solid #ddd;
padding: 8px;
}
 
#bagisci tr:nth-child(even){background-color: #f2f2f2;}
 
#bagisci tr:hover {
background-color: #2ecc71;
color:#fff;
}
 
#bagisci th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #2c3e50;
color: white;
}
</style>
</head>
 
<body>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">
<table id="bagisci">
<tr>
<th>İsim</th>
<th>Soyisim</th>
<th>Gsm</th>
<th>E mail</th>
<th>Şehir</th>

</tr>

<tr>
<td>$r['name']</td>
<td></td>
<td></td>
<td></td>
<td></td>

</tr>


</table>
</body>
</html>