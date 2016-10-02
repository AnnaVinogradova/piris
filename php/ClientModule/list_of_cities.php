<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 10/2/16
 * Time: 6:08 PM
 */

require_once("Classes/City.php");
require_once("Classes/CityHandler.php");
require_once("../Database/DatabaseHandler.php");

$handler = new CityHandler(DatabaseHandler::getConnection());
$cities = $handler->findAll();

$id = 0;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

foreach ($cities as $city){
    if($id == $city->getId()){
        echo "<option value=\"{$city->getId()}\" selected>{$city->getName()}</option>";
    } else {
        echo "<option value=\"{$city->getId()}\">{$city->getName()}</option>";
    }

}

