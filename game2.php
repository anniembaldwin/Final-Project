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

// remember session id
   $id = $_SESSION["id"];
   
// store the bin and status values
    $bin = $_GET["bin"];
    $status = $_GET["status"]; 
    
// if the clicked bin is the correct bin, tell the user so and update their points
if ($bin == $status)
{
     // update the user's points
     $sql = "UPDATE users SET points = points + 1 WHERE id = '$id'";
     mysql_query($sql);
     
     // prepare sql
     $sql = "SELECT points FROM users WHERE id = $id";
                     
     // execute query on remembering the users' points
     $result = mysql_query($sql);  
                     
     // access the data row
     $row = mysql_fetch_array($result); 
                     
     // access points
     $points = $row["points"];
     
     print("That's correct");
     // return correctness and points
   // print("{correct: 'You're correct!', points: $points}");
}
           
// if the clicked bin is the incorrect bin, tell the user so and subtract a point from their total
if ($bin != $status)
{
    $sql = "UPDATE users SET points = points - 1 WHERE id = '$id'";
    mysql_query($sql);       
 
    // prepare sql
    $sql = "SELECT points FROM users WHERE id = $id";
                     
    // execute query on remembering the users' points
    $result = mysql_query($sql);  
                     
    // access the data row
    $row = mysql_fetch_array($result); 
                     
    // access points
    $points = $row["points"];
    
    //print("That's incorrect"); 
     // return correctness and points
    print("that's incorrect");
}      


?>
