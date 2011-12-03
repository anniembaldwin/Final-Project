 <!------Game page------------------------------>
 
 <!DOCTYPE html>
 
 <html>
    <head>
       <title>RecycleHarvard:Welcome to the Game!</title>
       <script src = "items.js"></script>
       <script type = "text/javascript">
       
       function validate(bin)
       {
           // return a random number between 0 and the length of the ITEMS array
           random_integer = Math.floor(Math.random()*(ITEMS.length +1));
           
           // get the loaded item's status (recyclable, disposable, or electronic recyclable)
           var status = ITEMS[random_integer].status;
           
           // if the clicked bin is the correct bin, tell the user so
           if (status == bin)
                document.getElementById("Correctness").innerHTML = "Correct";
           
           // if the clicked bin is the correct bin, tell the user so
           if (status != bin)
                document.getElementById("Correctness").innerHTML = "Incorrect";
                
           random_image();
       }      
       
        function random_image ()
        {
           /* return a random number between 0 and the length of the ITEMS array
           random_integer = Math.floor(Math.random()*(ITEMS.length +1));*/
           
           // find the corresponding name in the array
           var name = ITEMS[random_integer].name;
           
           // define the img source
           var picture = "Images/" + name + ".jpg";
           
           // set the src attribute of the picture
           document.getElementById("Random Item").setAttribute("src", picture);
           
           // set the caption attribute of the picture
           document.getElementById("Caption").innerHTML = ITEMS[random_integer].caption;
       }
       </script>
    </head>
        <body onload = "random_image()">
            <h1>Play the Game! WEeee yyayy</h1>
            <p>Click on the proper receptacle (trash bin, single-stream recycling, or electronic recycling),
                 and gain one point per correctly sorted item!</p>
            <table align = "center">
                <tr align = "center">
                    <td id ="Correctness" style ="color:green">Are you right or wrong?</td>
                <tr>    
                    <td>
                    <img id="Random Item" alt="Item to Sort" src=""/>                      
                    </td>
                </tr>
                <tr id= "Caption" style="text-align:center"> </tr>
             </table>               
             <div id = "bottom">
                    <a style = "postition:relative;left:200px" href="game.php"><img alt="Trash Can" src="Images/trashcan.jpg" onclick = "validate('trash');"></a> 
                    <a style="position:relative:left:200px" href="game.php"><img alt="Recycling Bin" src="Images/recyclingbin.jpg" onclick = "validate('recycle');"></a>
             </div>   
     </body>
  </html>   
 
