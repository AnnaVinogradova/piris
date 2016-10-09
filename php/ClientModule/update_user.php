<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 10/1/16
 * Time: 4:12 PM
 */

require_once("Classes/User.php");
require_once("Classes/UserHandler.php");
require_once("../Database/DatabaseHandler.php");

$user = new User();

$user->setId($_POST["id"]);
$user->setFirstName($_POST["first_name"]);
$user->setLastName($_POST['last_name']);
$user->setPatronymic($_POST['patronymic']);
$user->setBirth($_POST['birth']);
$user->setPassportSeries($_POST['passport_series']);
$user->setPassportNumber($_POST['passport_number']);
$user->setPassportFrom($_POST['passport_from']);
$user->setPassportDate($_POST['passport_date']);
$user->setPlaceOfBirth($_POST['place_of_birth']);
$user->setCity($_POST['city']);
$user->setPrivateNumber($_POST['private_number']);
$user->setAddress($_POST['address']);
$user->setHomePhone($_POST['phone_number']);
$user->setMobilePhone($_POST['mobile_number']);
$user->setEmail($_POST['email']);
$user->setPlaceOfWork($_POST['place_of_work']);
$user->setPosition($_POST['position']);
$user->setMaritalStatus($_POST['marital_status']);
$user->setDisability($_POST['disability']);
$user->setPensioner($_POST['pensioner']);
$user->setMilitary($_POST['military']);
$user->setIncome($_POST['income']);$user->setPrivateNumber($_POST['private_number']);
$user->setAddress($_POST['address']);
$user->setHomePhone($_POST['phone_number']);
$user->setMobilePhone($_POST['mobile_number']);
$user->setEmail($_POST['email']);
$user->setPlaceOfWork($_POST['place_of_work']);
$user->setPosition($_POST['position']);
$user->setMaritalStatus($_POST['marital_status']);
$user->setDisability($_POST['disability']);
$user->setPensioner($_POST['pensioner']);
$user->setMilitary($_POST['military']);
$user->setIncome($_POST['income']);

if($user->checkIsValid()){
    $handler = new UserHandler(DatabaseHandler::getConnection());
    if($handler->checkUniqueValues($user)){
        $handler->updateUser($user);
        echo '';
    }
} else {
    echo "Something was wrong";
}