<?
/****************************************************************************
 *                             register2.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                              Anne Baldwin
 *
 *                   Supports interface to register a user.
 ***************************************************************************/
    
    // require common code
    require_once("includes/common.php"); 

    // escape username and passwords to avoid SQL injection attacks
    $username = mysql_real_escape_string($_POST["username"]);
    
    // define a hash of the password
    $hash = crypt($password);
    
    // make sure that username is actually unique
    if ($result == NULL)
        apologize("that username is already taken"); 
    
    // make sure that $_POST["username"] or $_POST["password"] is blank, return to apology page
    if (empty($username)  || empty($password))
        apologize("please fill in all required fields"); 
    
   // make sure that both passwords are the same
    if ($password != $password2)
        apologize("please make sure both passwords are the same"); 
    
    // prepare SQL
    $sql = "INSERT INTO users (username, hash, house) VALUES('$username', '$hash', '$_POST[house]')";
    
    // execute insertion
    $result = mysql_query($sql);
    
    // find out which id was assigned to that user
    $id = mysql_insert_id();
    
    // remember that user's now logged in by caching user's ID in session
    $_SESSION["id"] = $id;
               
    // redirect to portfolio
    redirect("index.php");
    
?>
