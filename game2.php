<?
/****************************************************************************
 *                               game2.php
 *
 *                          Computer Science 50
 *                              Problem Set 7
 *                              Anne Baldwin
 *
 *          Support the interface for a user to play a game.           
 ***************************************************************************/
<? 
        function points()
        {
         // remember the user's id from session id
         $id = $_SESSION["id"];
         
         // prepare sql
         $sql = "SELECT points FROM users WHERE id = $id";
        
         // execute update
         mysql_query($sql);  
       
         return false;
       }
 ?>












?>
