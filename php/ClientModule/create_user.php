<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 13.09.2016
 * Time: 18:21
 */
require_once("Classes/User.php");
require_once("Classes/UserHandler.php");
require_once("../Database/DatabaseHandler.php");

$user = new User();

$user->setFirstName($_POST["first_name"]);
$user->setLastName($_POST['last_name']);
$user->setPatronymic($_POST['patronymic']);
$user->setBirth($_POST['birth']);
$user->setPassportSeries($_POST['passport_series']);
$user->setPassportNumber($_POST['passport_number']);
$user->setPassportFrom($_POST['passport_from']);
$user->setPassportDate($_POST['passport_date']);
//$id = $_POST['id'];
$user->setPlaceOfBirth($_POST['place_of_birth']);

if($user->checkIsValid()){
    $handler = new UserHandler(DatabaseHandler::getConnection());
    if(!$handler->checkUserIsExists($user)){
        $handler->createUser($user);
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}