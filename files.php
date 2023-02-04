<?php
session_start();
if($_SESSION["login"] == false){
		header("Location:http://localhost/died/index.php");
}
?>
<!DoctypeHTML>
<html>
<head>
</head>
<style>
h1{
text-align:center;
font-size:7rem;
}
h5{
text-align:center;
font-size:3rem;
}
.passf{
text-align:center;

}
,passf input{
width:500px;
}
</style>
<h1>Congrats Lad you unlock my old memories</h1>
<h5>Momories</h5>
<p style="text-align:center"><a href="http://localhost/died/log.php">logout</a></p>
<?php
if ($handle = opendir('./files')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
			
			?> <p style="text-align:center; font-size:50px;"><a href="https://localhost/died/files/<?php echo "$entry\n"; ?>"><?php echo "$entry\n"; ?></a></p>
			<?php
        }
    }

    closedir($handle);
}
?>

<body>
</body>
</html>
