<?php
function tr ($param1,$param2,$param3) {
    if $param1>$param2){
    if ($param1>$param3){
        return $param1;
    }else{
        return $param3;
    }
    }else {
    if ($param2<$param3){
        return $param2;
    }else {
        return $param3;
    }
    }
}
?>
<html>
<head></head>
<body>
<form action="" method="POST">
    A: <input type="text" name ="a" />
    B: <input type="text" name ="b" />
    C: <input type="text" name ="c" />
    <input type="submit" value ="ok" name="send" />


</form>

</body>
</html>
