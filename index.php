<?php
session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
		header("Location:http://localhost/died/files.php");
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
.passf{
text-align:center;

}
,passf input{
width:500px;
}
</style>
<h1>if i die please open</h1>
<<form action="validate.php" method="post">
<div class="passf">
<input name="password" placeholder="enter the passcode" type="password" style="
    width: 21rem;
    height: 17pt;
">
<input type="submit">
</div>
</form>
<body>
</body>
</html>
