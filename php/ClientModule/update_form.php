<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 10/1/16
 * Time: 2:51 PM
 */

require_once("Classes/User.php");
require_once("Classes/UserHandler.php");
require_once("../Database/DatabaseHandler.php");
require_once('../../lib/vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('Templates/');
$twig = new Twig_Environment($loader, array('debug' => true));

$id = $_GET["id"];
$handler = new UserHandler(DatabaseHandler::getConnection());
$user = $handler->getUserById($id);

$template = $twig->loadTemplate('update_user_form.html.twig');
echo $template->render(array('user' => $user));