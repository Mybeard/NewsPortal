<?php
namespace App\Controller;
use App\Form\ContactForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class ContactsController extends AbstractController
{
    public function index(Request $request): Response
    {
        $formSuccess = false;
        $form = $this->createForm(ContactForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $formSuccess = true;
        }
        return $this->
        render(
            'contact/contacts.html.twig',
            [
                'form' => $form->createView(),
                'formSuccess' => $formSuccess,
            ]
        );
    }
}