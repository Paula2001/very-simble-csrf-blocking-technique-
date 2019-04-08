<?php
session_start();
function csrf(){
    $random = rand(1, 10000000);
    $_SESSION['csrf'] = $random;
    return $random ;
}

?>
<form action="request.php" method="get">
    <input type="text" name="text" value="">
    <input type="hidden" name="csrf" value="<?php echo csrf();?>">

    <input type="submit" name="sub">
</form>

