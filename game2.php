<?
/****************************************************************************
 *                               game2.php
 *
 *                          Computer Science 50
 *                              Problem Set 7
 *                      Anne Baldwin and Natalie Jacewicz
 *
 *          Support the interface for a user to play a game.           
 ***************************************************************************/


// require common code
   require("includes/common.php"); 

// store the bin and status values
    $bin = $_GET['bin'];
    $status = $_GET['status']; 

dump($_GET['bin']);
    
// if the clicked bin is the correct bin, tell the user so and update their points
if ($bin == $status)
{
     $sql = "UPDATE users SET points = points + 1 WHERE id = '$id'";
     mysql_query($sql);
     return "You're correct!!";
}
           
// if the clicked bin is the incorrect bin, tell the user so and subtract a point from their total
if ($bin != $status)
{
    $sql = "UPDATE users SET points = points - 1 WHERE id = '$id'";
    mysql_query($sql);       
    return "That's incorrect'";
}      


?>
