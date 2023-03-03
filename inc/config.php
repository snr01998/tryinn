
<?php
   if(!defined('__CONFIG__')){
    exit('you dont have config file');

   }
   error_reporting(-1);
   ini_set('display_errors', 'On');
   
   include_once "classes/DB.php";
   include_once "classes/Filter.php";
   $con=DB::getConnection();
?>