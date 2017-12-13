<?php

namespace App\Controller;

use App\Form\UserForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;

class BoController extends Controller
{
    public function index()
    {
        return $this->render(
            'bo/index.html.twig'
        );
    }

    public function login()
    {
        return new Response('GET login');
    }

    public function loginPost()
    {
        return new Response('POST login');
    }

    /**
     * @return Response
     */
    public function simpleform()
    {
        $formData = [
            'firstname' => 'John',
            'lastname' => 'Doe',
        ];

        $form = $this->createFormBuilder($formData)
                     ->add('firstname', TextType::class)
                     ->add('lastname', TextType::class)
                     ->getForm()
        ;

        return $this->render(
            'bo/form.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @param UserForm $userForm
     * @return Response
     */
    public function advancedform(UserForm $userForm)
    {
        $formData = [
            'firstname' => 'John',
            'lastname' => 'Doe',
        ];

        $form = $userForm->build($formData);

        return $this->render(
            'bo/form.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
