<!doctype html>
<html>
<head>
    <title>Kalosa Books Store</title>
    <link rel="stylesheet" href="<?=URL?>public/css/default.css" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/smoothness/jquery-ui.css" />
    <script type="text/javascript" src="<?=URL?>public/js/jquery.js" ></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <?php
    if(isset($this->js)){
        foreach($this->js as $js){
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'" ></script>';
        }
    }
    ?>
    </head>
    <body>
    <div id="header">
        <h2>Kalosa Books Store</h2>
        <?php if(Session::get('loggedIn') == false): ?>
            <a href="<?=URL?>index">Index</a>
            <a href="<?=URL?>products">Products</a>
            <a href="<?=URL?>about">About</a>
        <?php endif; ?>
        <?php if(Session::get('loggedIn') == true): ?>
            <a href="<?=URL?>dashboard">Dashboard</a>
            <?php if(Session::get('role') == 'owner'): ?>
                <a href="<?=URL?>user">Users</a>
            <?php endif; ?>
            <a href="<?=URL?>dashboard/logout">Logout</a>
        <?php else: ?>
            <a href="<?=URL?>login">Login</a>
        <?php endif; ?>
    </div>
    <div id="content">