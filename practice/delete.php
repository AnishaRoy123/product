<?php
include('method.php');
$pid=$_GET['pid'];
$res=deletepro($pid);
if($res == 1)
{
 echo "deletion sucess";
}
else{
    echo "not deleted";
}

?>