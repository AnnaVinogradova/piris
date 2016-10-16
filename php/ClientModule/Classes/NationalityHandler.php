<?php

/**
 * Created by PhpStorm.
 * User: anna
 * Date: 10/16/16
 * Time: 1:27 PM
 */
class NationalityHandler
{
    const TABLE_NAME = 'nationality';
    private $db_connection;

    public function __construct($db_connection)
    {
        $this->db_connection = $db_connection;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM ". self::TABLE_NAME;

        $result = $this->db_connection->query($sql);
        $nationalities = Array();
        while ($row = $result->fetch_assoc()) {
            $nationalities[] = $this->getNationalityFromArray($row);
        }

        return $nationalities;
    }

    public function getNationalityNameById($id)
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE id = {$id}";

        $result = $this->db_connection->query($sql);
        $nationality = $this->getNationalityFromArray($result->fetch_assoc());
        return $nationality->getName();
    }

    private function getNationalityFromArray($arrayOfNationalityData)
    {
        $nationality = new Nationality();
        $nationality->setId($arrayOfNationalityData["id"]);
        $nationality->setName($arrayOfNationalityData["name"]);

        return $nationality;
    }
}