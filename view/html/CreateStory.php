<!DOCTYPE html>
<html>
    <head> 
        <title>Create Story</title>
        <link rel="stylesheet" type="text/css" href="createstory.css">
        <script src="http://use.edgefonts.net/indie-flower:n4:all.js"></script>
    </head>
    
    <body>
        <div id="header">
            <h1>Create a Story</h1>
            <a href="" id="notifications">Notifications</a>
        </div>           
    
        <ul id="navbar">
            <li class="page"><a href="index.html" class="plinks">Home</a></li>
            <li class="page"><a href="Friends.html" class="plinks">Friends</a></li>
            <li class="page"><a href="Settings.html" class="plinks">Settings</a></li>
            <li class="page"><a href="Help.html" class="plinks">Help</a></li>
        </ul>
        
        <div id="gentitle">
            <h2>Randomly Generated Title</h2>
            <form>
                <input id="regen" type="button" value="Regenerate Title">
            </form>
        </div>
        
        <form id="turns">
                Turns per person:
                <input type="text" name="numturns"><br><br><br><br>
                <input id="create" type="submit" value="Create Story">
        </form>
    </body>
</html>