<?
include("includes/common.php");

//correctness

if(correctness == yes)
{
    $sql = "UPDATE users SET points = points + 1 WHERE id = '$id'";
    mysql_query($sql);
}
else if(correctnes != no)
{
   $sql = "UPDATE users SET points = points - 1 WHERE id = '$id'";
   mysql_query($sql);
}
?>
