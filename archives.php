<?php

// ------------------------------------------------------------------------- //
//                           Blogger.com for Xoopsv2.x                       //
//                              Version:  1.o                                //
// ------------------------------------------------------------------------- //
// Author: Arsenic                                                           //
// URL: http://www.arsenic-design.net                                        //
//---------------------------------------------------------------------------//
?>
<html>
<head>
    <title>Archives</title>
    <link rel="stylesheet" type="text/css" media="all" href="http://arsenic2.tonsite.biz/themes/arsenic-design-v1/style.css">
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="98%" class="item" align="center">
    <tr>
        <td class="itemHead">Archives</td>
    </tr>
    <tr>
        <td class="barbloc" height="10"></td>
    </tr>
    <tr>
        <td class="itemBody" valign="top" width="100%">
            <ul>
                <?php
                $current_dir = 'archives/';
                $dir = opendir($current_dir);
                while ($file = readdir($dir)) {
                    if (is_file($current_dir . $file)) {
                        if (('.' != $file) && ('..' != $file)) {
                            $format = mb_strrchr($file, '.');

                            if (('.html' == $format)) {
                                echo '<li><a href="' . $current_dir . $file . '">' . $file . '</a>';
                            }
                        }
                    }
                }
                closedir($dir);
                ?>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="barbloc" height="10"></td>
    </tr>
</table>
<br>
</body>
</html>
