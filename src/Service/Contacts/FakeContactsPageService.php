<?php
/**
 * Created by PhpStorm.
 * User: boroda
 * Date: 18.12.18
 * Time: 21:39
 */

namespace App\Service\Contacts;


use App\Dto\Contacts;

class FakeContactsPageService
{
    public function getContacts()
    {
        $faker = \Faker\Factory::create();
        return new Contacts(
            $faker->freeEmail,
            $faker->phoneNumber,
            $faker->address
        );


    }

}