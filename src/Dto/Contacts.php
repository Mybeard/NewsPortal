<?php
/**
 * Created by PhpStorm.
 * User: boroda
 * Date: 18.12.18
 * Time: 21:41
 */

namespace App\Dto;


final class Contacts
{
    private $email;
    private $phone;
    private $address;

    /**
     * Contacts constructor.
     * @param $email
     * @param $phone
     * @param $address
     */
    public function __construct($email, $phone, $address)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getEmail() :string
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function getPhone() :string
    {
        return $this->phone;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function getAddress() :string
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }


}