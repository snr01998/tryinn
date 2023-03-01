<?php
   define('__CONFIG__',true);
    require_once "inc/config.php";
   
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css" />

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Login</h1>
        <div form="uk-section uk-container">
            <div class="uk-grid uk-child-width-l-3@s uk-child-width-l-l" uk-grid="">
        <form class="uk-form-stacked js-login">
    <div class="uk-margin ">
        <label class="uk-form-label" for="form-stacked-text">email</label>
        <div class="uk-form-controls">…
            <input class="uk-input" id="form-stacked-text" type="email" placeholder="emails" required='required'/>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">password</label>
        <div class="uk-form-controls">
        <input class="uk-input" id="form-stacked-text" type="password" placeholder="password" required='required'/>
        </div>
    </div>
    
    <div class="uk-margin">
        <button class="uk-button-default" type="submit">login</button>
    </div>


    </form>
    </div>
    </div>        
    <?php require_once "inc/footer.php";?>
    </body>
</html>