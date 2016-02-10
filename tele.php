<html>

<head>

<title>Shellsec's Tools</title>



<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<style>

body {

	background-image: url('http://puu.sh/3K47j.png');

	background-repeat: repeat;

	color: green;


}
p {
	color: black;
}

</style>

</head>

<body>

<center>


<br /><br /><br /><br /><br />

<?php
if(isset($_GET['phonenumber'])) {
    $url = "http://reklamation.fk.dk/fk_reklamation/DataServlet?do=tlflookup&firmanr=7&lang=da&telefonnr={$_GET['phonenumber']}";
    $file = file_get_contents($url);
    echo $file;
}
?>

<form method="get">
    <input type="text" name="phonenumber">
    <input type="submit">
</form> 





<br/>

</center>

<footer>

<center>


</center>

</footer>

</html>