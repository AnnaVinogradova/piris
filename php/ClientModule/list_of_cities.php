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

foreach ($cities as $city){
    echo "<option value=\"{$city->getId()}\">{$city->getName()}</option>";
}

