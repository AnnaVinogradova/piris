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
require_once('../../lib/vendor/autoload.php');

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('Templates/');
$twig = new Twig_Environment($loader, array(
    'cache' => '../../lib/vendor/cache',
));

$handler = new UserHandler(DatabaseHandler::getConnection());
$users = $handler->findAll();

$template = $twig->loadTemplate('list_of_users.html.twig');
echo $template->render(array('users' => $users));