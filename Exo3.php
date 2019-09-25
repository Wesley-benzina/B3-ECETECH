<?php
?>

<html>
<head></head>
<body>


SESSION_START();
if (!isset($_SESSION['nb'])){
$_SESSION['nb'] = rand(0,100);
}
echo $_SESSION['nb'];
<form action="" method="POST">
    <input type="text" name ="nb" /><br />
    <input type="submit" value ="send" name="testeur" />
</form>

</body>
</html>