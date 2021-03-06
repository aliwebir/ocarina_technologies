<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?></title>
        <link rel="stylesheet" type="text/css" href="/static/css/main.css"></link>
        <script src="//use.edgefonts.net/indie-flower:n4:all.js"></script>
        <script src="/static/js/jquery.js" type="text/javascript"></script>
        <script src="/static/js/timer.js"></script>
        <script src="/static/js/main.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=.5">
    </head>
    
    <body>
        <div id="header">
            <div class="header-text">
                <h1><?php echo $title;?></h1>
            </div>
            <div class="status">
                <div class="user-status">
                    <?php if ($user) { ?>
                        Welcome, <?= $user['name'] ?>.<br />
                        <a href="/User/logout">Logout</a>
                    <?php } else { ?>
                        Welcome, Please<br />
                        <a href="/User">Login</a>
                    <?php } ?>
                </div>
                <a href="" id="notifications">Notifications</a>
            </div>
            <div class="clear"></div>
            <div class="margin-break"></div>
        </div>           
    
        <div class="wrapper">
            <div class="left-wrap">
            <ul id="navbar">
                <li class="page"><a href="/Main/index" class="plinks">Home</a></li>
                <li class="page"><a href="/Main/settings" class="plinks">Settings</a></li>
                <li class="page"><a href="/Main/help" class="plinks">Help</a></li>
            </ul>
        </div>
        <div class="right-wrap">