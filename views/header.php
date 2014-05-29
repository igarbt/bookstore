<!doctype html>
<html>
    <head>
        <title>Kalosa Books Store</title>
        <link rel="stylesheet" href="<?=URL?>public/css/default.css" />
        <script type="text/javascript" src="<?=URL?>public/js/jquery.js" ></script>
        <script type="text/javascript" src="<?=URL?>public/js/custom.js" ></script>
    </head>
    <body>
        <div id="header">
            <h2>Kalosa Books Store</h2>
            <a href="<?=URL?>index">Index</a>
            <a href="<?=URL?>products">Products</a>
            <a href="<?=URL?>about">About</a>
            <?php if(Session::get('loggedIn') == true): ?>
                <a href="<?=URL?>dashboard/logout">Logout</a>
            <?php else: ?>
                <a href="<?=URL?>login">Login</a>
            <?php endif; ?>
        </div>
        <div id="content">