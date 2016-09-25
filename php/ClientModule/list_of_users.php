<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 14.09.2016
 * Time: 13:01
 */

require_once("Classes/User.php");
require_once("Classes/UserHandler.php");
require_once("../Database/DatabaseHandler.php");

$handler = new UserHandler(DatabaseHandler::getConnection());
$users = $handler->findAll();

foreach ($users as $user){
    //echo $user['first_name'].',';
}