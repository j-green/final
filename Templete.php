<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a>
                    <li><a href="#">New Player</a>
                    <li><a href="#">Edit Player</a>
                    <li><a href="#">Search Player</a>
                 </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
                <form role="form" method="post">
    <?php
    $data='a:3:{i:0;s:14:"Value in Box 1";i:1;s:7:"Value 2";i:2;s:11:"Box 3 Value";}';
    if( !empty( $data ) )
    {
        foreach( unserialize($data) as $key => $value ) :
    ?>
            <p class="text-box">
                <label for="box<?php echo $key + 1; ?>">Box <span class="box-number"><?php echo $key + 1; ?></span></label>
                <input type="textl" name="boxes[]" id="box<?php echo $key + 1; ?>" value="<?php echo $value; ?>" />
                <?php echo ( 0 == $key ? '<a href="#" class="add-box">Add More</a>' : '<a href="#" class="remove-box">Remove</a>' ); ?>
            </p>
    <?php
        endforeach;
    }
    else
    {
    ?>
        <p class="text-box">
            <label for="box1">Box <span class="box-number">1</span></label>
            <input type="text" name="boxes[]" value="" id="box1" />
            <a class="add-box" href="#">Add More</a>
        </p>
    <?php
    }
    ?>
    <p><input type="submit" value="Submit" /></p>
</form>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
