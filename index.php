<?php

// ------------------------------------------------------------------------- //
//                           Blogger.com for Xoopsv2.x                       //
//                              Version:  1.o                                //
// ------------------------------------------------------------------------- //
// Author: Arsenic                                                           //
// URL: http://www.arsenic-design.net                                        //
//---------------------------------------------------------------------------//
require_once 'header.php';
if ('blogger' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();
} else {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';
}
require 'conf.inc.php';
?>
    <!--- Begin bloc edito -->
    <table border="0" cellpadding="0" cellspacing="0" width="98%" class="item" align="center">
        <tr>
            <td class="itemHead"><?php echo BLOG_TITLE; ?></td>
        </tr>
        <tr>
            <td class="barbloc" height="10"></td>
        </tr>
        <tr>
            <td class="itemBody" valign="top" width="100%">
                <p><font Style="font-size: 11px;"><?php require_once 'edito.txt'; ?></font></p>
            </td>
        </tr>
        <tr>
            <td class="barbloc" height="10"></td>
        </tr>
    </table>
    <br>
    <!--- End bloc edito -->

<?php require_once 'blog/index.html'; ?>

    <!-- Begin footer -->
    <table border="0" cellpadding="0" cellspacing="0" width="98%" class="item" align="center">
        <tr>
            <td class="barbloc" height="10"></td>
        </tr>
        <tr>
            <td class="itemBody" valign="top" width="100%" align="center">
                <table cellpadding="0" cellspacing="0" width="90%">
                    <tr>
                        <td align="left" width="40%">
                            <font Style="font-size: 11px;">
                                <A HREF="#" onClick="window.open('archives.php','Weblog','toolbar=1, location=0, directories=0, status=0, scrollbars=1, resizable=1, copyhistory=0, menuBar=0, width=700, height=550, left=100, top=100');return(false)"><?php echo BLOG_ARCHIVES; ?></a></td>
                        <td align="left" width="60%"><a href="http://www.blogger.com">Powered by Blogger.com</a> - <a href="http://www.arsenic-design.net">Integrated by Arsenic</a></font></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="barbloc" height="10"></td>
        </tr>
    </table>
    <br>
    <!-- End footer -->

<?php
require XOOPS_ROOT_PATH . '/footer.php';
?>
