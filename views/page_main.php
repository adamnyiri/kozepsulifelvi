.<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Középiskolai felvételi</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/alap_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
        <header>
            <div id="user"><em>
            <?php if(isset($_SESSION['login'])&&$_SESSION['userid']>0) { ?>Bejelentkezett: <strong><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname']." (".$_SESSION['login'].")" ?></strong><?php } ?>
            </em></div>
            <h1 class="header">Középiskolai felvételi</h1>
        </header>
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        <aside>
                <p>Felvételi információk: kozsulifelvi@felveteli.hu</p>
        </aside>
        <section>
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
        <footer>&copy; Középiskolai felvételi. All rights reserved. <?= date("Y") ?></footer>
    </body>
</html>