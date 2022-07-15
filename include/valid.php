<?php

// This contains the game validation code for the index page and result page
// The game logic controller is added as an include

require_once ("game.inc.php"); //game logic controller

if(isset($_POST["submit"]))
{
   
    header("refresh: 20"); // the result page will automatically refresh after 15 seconds
    
}else
{

    exit();      //if the user try accessing the game without passing validation
                // exit the script or stop the code
}