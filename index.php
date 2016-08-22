<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MrBBot Demo</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/reset.css" type='text/css'>
    <link rel="stylesheet" href="css/style.css" type='text/css'>
    
</head>
<body>
    <div id="header">
        MrBBot Demo
        <?php
            if(isset($_GET["site"])) {
                echo 
                    "<i id=\"btn-computer\" class=\"fa fa-television tooltip\">
                        <span class=\"tooltiptext\">Computer</span>
                    </i>
                    <i id=\"btn-tablet\" class=\"fa fa-tablet tooltip\">
                        <span class=\"tooltiptext\">Tablet</span>
                    </i>
                    <i id=\"btn-mobile\" class=\"fa fa-mobile tooltip\">
                        <span class=\"tooltiptext\">Phone</span>
                    </i>
                    <i id=\"btn-rotate\" class=\"fa fa-refresh tooltip\">
                        <span class=\"tooltiptext\">Switch Orientation</span>
                    </i>
                    <a href=\"" . $_GET["site"] . "\"><i id=\"btn-site\" class=\"fa fa-external-link tooltip\">
                        <span class=\"tooltiptext\">Visit Site</span>
                    </i></a>";
            }
        ?>
    </div>
    
    <?php
        if(isset($_GET["site"])) {
            echo
                "<div id=\"website-container\">
                    <iframe id=\"website\" class=\"size-computer\" src=\"" . $_GET["site"] . "\" frameborder=\"0\" height=\"100%\" width=\"100%\"></iframe>
                </div>";
        } else {
            echo
                "<div id=\"no-site-container\">
                    <div id=\"no-site\">
                        <div id=\"site-form\">
                            <div class=\"cell cell-input\">
                                <input id=\"demo-site\" type=\"text\" class=\"text-input\" name=\"site\" placeholder=\"Enter site address here\">
                            </div>
                            <div class=\"cell cell-button\">
                                <input id=\"demo-site-button\" type=\"submit\" class=\"button\" value=\"Demo Site\">
                            </div>
                        </div>
                    </div>
                </div>";
        }
    ?>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/main.js"></script>
    
    <?php
        if(!isset($_GET["site"])) {
            echo "<script src=\"js/input.js\"></script>";
        }
    ?>
    
    
</body>
</html>