<?php

/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 13.09.2016
 * Time: 21:51
 */
class DatabaseHandler
{
    const HOST_NAME = 'localhost';
    const USER_NAME = 'admin';
    const DB_NAME = 'piris';
    const DB_PASSWORD = '123456';

    public static function getConnection()
    {
        $connection = new mysqli(self::HOST_NAME, self::USER_NAME, self::DB_PASSWORD, self::DB_NAME);
        if ($connection->connect_errno) {
            echo "Sorry, this website is experiencing problems.";
            exit;
        }
        $connection->set_charset("utf8");
        return $connection;
    }

    public static function closeConnection($connection)
    {
        $connection->close();
    }

}