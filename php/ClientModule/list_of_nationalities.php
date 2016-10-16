<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 10/16/16
 * Time: 1:25 PM
 */

require_once("Classes/Nationality.php");
require_once("Classes/NationalityHandler.php");
require_once("../Database/DatabaseHandler.php");

$handler = new NationalityHandler(DatabaseHandler::getConnection());
$nationalities = $handler->findAll();

$id = 0;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

foreach ($nationalities as $nationality){
    if($id == $nationality->getId()){
        echo "<option value=\"{$nationality->getId()}\" selected>{$nationality->getName()}</option>";
    } else {
        echo "<option value=\"{$nationality->getId()}\">{$nationality->getName()}</option>";
    }

}