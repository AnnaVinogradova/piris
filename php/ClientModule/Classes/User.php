<?php

/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 13.09.2016
 * Time: 18:52
 */
class User
{
    private $id;
    private $first_name;
    private $last_name;
    private $patronymic;
    private $birth;
    private $passport_series;
    private $passport_number;
    private $passport_from;
    private $passport_date;
    private $place_of_birth;
    private $city;
    private $private_number;
    private $address;
    private $home_phone;
    private $mobile_phone;
    private $email;
    private $place_of_work;
    private $position;
    private $marital_status;
    private $disability;
    private $pensioner;
    private $military;
    private $income;

    public function checkIsValid()
    {
        return true;
    }

    private function checkEmail()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getDisability()
    {
        return $this->disability;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getHomePhone()
    {
        return $this->home_phone;
    }

    /**
     * @return mixed
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * @return mixed
     */
    public function getMaritalStatus()
    {
        return $this->marital_status;
    }

    /**
     * @return mixed
     */
    public function getMilitary()
    {
        return $this->military;
    }

    /**
     * @return mixed
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     * @return mixed
     */
    public function getPensioner()
    {
        return $this->pensioner;
    }

    /**
     * @return mixed
     */
    public function getPlaceOfWork()
    {
        return $this->place_of_work;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function getPrivateNumber()
    {
        return $this->private_number;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $disability
     */
    public function setDisability($disability)
    {
        $this->disability = $disability;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $home_phone
     */
    public function setHomePhone($home_phone)
    {
        $this->home_phone = $home_phone;
    }

    /**
     * @param mixed $income
     */
    public function setIncome($income)
    {
        $this->income = $income;
    }

    /**
     * @param mixed $marital_status
     */
    public function setMaritalStatus($marital_status)
    {
        $this->marital_status = $marital_status;
    }

    /**
     * @param mixed $military
     */
    public function setMilitary($military)
    {
        $this->military = $military;
    }

    /**
     * @param mixed $mobile_phone
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->mobile_phone = $mobile_phone;
    }

    /**
     * @param mixed $pensioner
     */
    public function setPensioner($pensioner)
    {
        $this->pensioner = $pensioner;
    }

    /**
     * @param mixed $place_of_work
     */
    public function setPlaceOfWork($place_of_work)
    {
        $this->place_of_work = $place_of_work;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @param mixed $private_number
     */
    public function setPrivateNumber($private_number)
    {
        $this->private_number = $private_number;
    }
}