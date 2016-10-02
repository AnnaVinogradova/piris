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
                passport_number, passport_from, passport_date, place_of_birth, city_id) VALUES 
                ('{$user->getFirstName()}','{$user->getLastName()}', '{$user->getPatronymic()}','{
                $user->getBirth()}','{$user->getPassportSeries()}', {$user->getPassportNumber()},
                '{$user->getPassportFrom()}', '{$user->getPassportDate()}','{$user->getPlaceOfBirth()}', 
                {$user->getCity()})";

        $this->db_connection->query($sql);
    }

    public function updateUser($user)
    {
        $sql = "UPDATE " . self::TABLE_NAME . " SET first_name='{$user->getFirstName()}', 
                last_name='{$user->getLastName()}', patronymic='{$user->getPatronymic()}', birth='
                {$user->getBirth()}', passport_series='{$user->getPassportSeries()}', passport_number=
                {$user->getPassportNumber()}, passport_from='{$user->getPassportFrom()}', passport_date='
                {$user->getPassportDate()}', place_of_birth='{$user->getPlaceOfBirth()}' WHERE id={$user->getId()}";

        $this->db_connection->query($sql);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM " . self::TABLE_NAME . " WHERE id = {$id}";

        $this->db_connection->query($sql);
    }

    public function getUserByCredentials($login, $password)
    {

    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE id = {$id}";

        $result = $this->db_connection->query($sql);
        $user = $this->getUserFromArray($result->fetch_assoc());
        return $user;
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
        $sql = "SELECT * FROM " . self::TABLE_NAME. " ORDER BY `last_name`";
        $result = $this->db_connection->query($sql);

        $users = Array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $this->getUserFromArray($row);
        }

        return $users;
    }

    private function getUserFromArray($arrayOfUserData)
    {
        $user = new User();
        $user->setId($arrayOfUserData["id"]);
        $user->setFirstName($arrayOfUserData["first_name"]);
        $user->setLastName($arrayOfUserData['last_name']);
        $user->setPatronymic($arrayOfUserData['patronymic']);
        $user->setBirth($arrayOfUserData['birth']);
        $user->setPassportSeries($arrayOfUserData['passport_series']);
        $user->setPassportNumber($arrayOfUserData['passport_number']);
        $user->setPassportFrom($arrayOfUserData['passport_from']);
        $user->setPassportDate($arrayOfUserData['passport_date']);
        $user->setPlaceOfBirth($arrayOfUserData['place_of_birth']);
        $user->setCity($arrayOfUserData['city_id']);

        return $user;
    }
}