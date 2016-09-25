<?php

/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 13.09.2016
 * Time: 18:52
 */
class User
{
    private $first_name;
    private $last_name;
    private $patronymic;
    private $birth;
    private $passport_series;
    private $passport_number;
    private $passport_from;
    private $passport_date;
    private $place_of_birth;

    public function checkIsValid()
    {
        return true;
    }

    private function checkEmail()
    {

    }

    /**
     * @return mixed
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */
    public function getPassportDate()
    {
        return $this->passport_date;
    }

    /**
     * @return mixed
     */
    public function getPassportFrom()
    {
        return $this->passport_from;
    }

    /**
     * @return mixed
     */
    public function getPassportNumber()
    {
        return $this->passport_number;
    }

    /**
     * @return mixed
     */
    public function getPassportSeries()
    {
        return $this->passport_series;
    }

    /**
     * @return mixed
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * @return mixed
     */
    public function getPlaceOfBirth()
    {
        return $this->place_of_birth;
    }

    /**
     * @param mixed $birth
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @param mixed $passport_date
     */
    public function setPassportDate($passport_date)
    {
        $this->passport_date = $passport_date;
    }

    /**
     * @param mixed $passport_from
     */
    public function setPassportFrom($passport_from)
    {
        $this->passport_from = $passport_from;
    }

    /**
     * @param mixed $passport_number
     */
    public function setPassportNumber($passport_number)
    {
        $this->passport_number = $passport_number;
    }

    /**
     * @param mixed $passport_series
     */
    public function setPassportSeries($passport_series)
    {
        $this->passport_series = $passport_series;
    }

    /**
     * @param mixed $patronymic
     */
    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
    }

    /**
     * @param mixed $place_of_birth
     */
    public function setPlaceOfBirth($place_of_birth)
    {
        $this->place_of_birth = $place_of_birth;
    }
}