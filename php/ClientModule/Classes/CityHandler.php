<?php

/**
 * Created by PhpStorm.
 * User: anna
 * Date: 10/2/16
 * Time: 6:09 PM
 */
class CityHandler
{
    const TABLE_NAME = 'city';
    private $db_connection;

    public function __construct($db_connection)
    {
        $this->db_connection = $db_connection;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM ". self::TABLE_NAME;

        $result = $this->db_connection->query($sql);
        $cities = Array();
        while ($row = $result->fetch_assoc()) {
            $cities[] = $this->getCityFromArray($row);
        }

        return $cities;
    }

    public function getCityNameById($id)
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE id = {$id}";

        $result = $this->db_connection->query($sql);
        $city = $this->getCityFromArray($result->fetch_assoc());
        return $city->getName();
    }

    private function getCityFromArray($arrayOfCityData)
    {
        $city = new City();
        $city->setId($arrayOfCityData["id"]);
        $city->setName($arrayOfCityData["name"]);

        return $city;
    }

}