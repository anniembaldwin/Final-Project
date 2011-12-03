 <!------Game page---->
 
 <!DOCTYPE html>
 
 <html>
    <head>
       <title>RecycleHarvard:The Game!</title>
       <script type = "text/javascript">
       function random_image ()
       {
           // return a random number between 0 and the length of the ITEMS array
           var random_integer = Math.floor(Math.random()*(ITEMS.length +1));
           
           // find the corresponding name in the array
           var name = ITEMS[random_integer].name;
           
           // define the img source
           return "Images/name.jpg"
       }
       </script>
    </head>
        <body>
            <h1>Play the Game</h1>
            <p>Click on the proper receptacle (trash bin, single-stream recycling, or electronic recycling),
                 and gain one point per correctly sorted item!</p>
            <table align = "center">
                <tr align = "center">
                    <td>
                    <img alt="Random item" src="random_image()"/>                      
                     </td>
                  </tr>
             </table>               
                 <div id = "bottom">
                    <a style = "postition:relative;left:200px" href="game.html"><img alt="Trash Can" src="Images/trashcan.jpg"></a> 
                    <a style="position:relative:left:200px" href="game.html"><img alt="Recycling Bin" src="Images/recyclingbin.jpg"></a>
                 </div>   
     </body>
  </html>   
 
