<?php
/**
 * Created by PhpStorm.
 * User: boroda
 * Date: 18.12.18
 * Time: 21:05
 */

namespace App\Controller;


use App\Dto\Contacts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class ContactsController extends AbstractController
{
        public function contacts(Contacts) : Response
        {
            return $this->render('default/contacts.html.twig');
        }


}