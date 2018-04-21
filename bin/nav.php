<?php
include_once 'bin/forcelogin.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>SoT control</title>
        <link rel="stylesheet" href="index.css" />
        
    </head>
<body>
<?php
    $menu = array(
            'home' => array('text'=>'Home', 'url'=>'index.php'),
            'VT' => array('text'=>'VT API', 'url'=>'virusTotal.php'),
            'sesh' => array('text'=>'Session Info', 'url'=>'sessionInfo.php'),
            'addUser' => array('text'=>'Add User', 'url'=>'addUser.php'),
        );

        function generateMenu($items, $class) {
            $html = "<nav class='$class'>\n";
            foreach($items as $item) {
                $html .= "<li><a href='{$item['url']}'>{$item['text']}</a><br><br><br></div>\n";
            }
            $html .= "</nav>\n";
            return $html;
        }
        echo generateMenu($menu, "navbar");

?>
</body>
</html>