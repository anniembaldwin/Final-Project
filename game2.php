<?
/****************************************************************************
 *                               buy2.php
 *
 *                          Computer Science 50
 *                              Problem Set 7
 *                              Anne Baldwin
 *
 *          Support the interface for a user to buy a stock.           
 ***************************************************************************/
<? 
        function points()
        {
         // remember the user's id from session id
         $id = $_SESSION["id"];
         
         // prepare sql
         $sql = "SELECT points FROM users WHERE id = $id";
         
         // execute query on remembering the users' points
         $result = mysql_query($sql);  
        }
          ?>












?>
