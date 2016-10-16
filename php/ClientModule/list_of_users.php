<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 14.09.2016
 * Time: 13:01
 */

require_once("Classes/User.php");
require_once("Classes/UserHandler.php");
require_once("Classes/City.php");
require_once("Classes/CityHandler.php");
require_once("Classes/Nationality.php");
require_once("Classes/NationalityHandler.php");
require_once("../Database/DatabaseHandler.php");
require_once('../../lib/vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('Templates/');
$twig = new Twig_Environment($loader, array('debug' => true));

$handler = new UserHandler(DatabaseHandler::getConnection());
$users = $handler->findAll();

$city_handler = new CityHandler(DatabaseHandler::getConnection());
$nationality_handler = new NationalityHandler((DatabaseHandler::getConnection()));
foreach ($users as $user){
    $user->city_name = $city_handler->getCityNameById($user->getCity());
    $user->nationality_name = $nationality_handler->getNationalityNameById($user->getNationality());
}

$template = $twig->loadTemplate('list_of_users.html.twig');
echo $template->render(array('users' => $users));