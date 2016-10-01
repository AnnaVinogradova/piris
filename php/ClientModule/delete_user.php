<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 10/1/16
 * Time: 2:19 PM
 */

require_once("Classes/User.php");
require_once("Classes/UserHandler.php");
require_once("../Database/DatabaseHandler.php");

$user_id = $_POST["id"];
$handler = new UserHandler(DatabaseHandler::getConnection());
$handler->deleteUser($user_id);
echo true;
