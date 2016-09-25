<?php

/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 13.09.2016
 * Time: 18:59
 */
class UserHandler
{
    const TABLE_NAME = 'user';
    private $db_connection;

    public function __construct($db_connection)
    {
        $this->db_connection = $db_connection;
    }

    public function createUser($user)
    {
        $sql = "INSERT INTO ". self::TABLE_NAME ."(first_name, last_name, patronymic, birth, passport_series, 
                passport_number, passport_from, passport_date, place_of_birth) VALUES 
                ('".$user->getFirstName()."','". $user->getLastName()."', '".$user->getPatronymic()."','" .
                $user->getBirth()."','". $user->getPassportSeries()."',". $user->getPassportNumber() .",'".
                $user->getPassportFrom()."', '". $user->getPassportDate()."','". $user->getPlaceOfBirth()."')";
        $this->db_connection->query($sql);
    }

    public function getUserByCredentials($login, $password)
    {

    }

    public function getUserById($id)
    {

    }

    public function checkUserIsExists($user)
    {
        $sql = "SELECT COUNT(*) FROM ". self::TABLE_NAME ." WHERE first_name='{$user->getFirstName()}' AND 
                last_name='{$user->getLastName()}' AND patronymic='{$user->getPatronymic()}' AND birth='
                {$user->getBirth()}' AND passport_series='{$user->getPassportSeries()}' AND passport_number='
                {$user->getPassportNumber()}' AND passport_from='{$user->getPassportFrom()}' AND passport_date='
                {$user->getPassportDate()}' AND place_of_birth='{$user->getPlaceOfBirth()}'";

        $result = $this->db_connection->query($sql);
        $count = $result->fetch_row();
        if($count[0] > 0 ){
            return true;
        }
        return false;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME;
        $result = $this->db_connection->query($sql);

        $users = Array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }

        return $users;
    }
}