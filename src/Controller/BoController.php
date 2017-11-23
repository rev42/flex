<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BoController extends Controller
{
    public function index()
    {
        return new Response('This is the BO home');
    }

    public function login()
    {
        return new Response('GET login');
    }

    public function loginPost()
    {
        return new Response('POST login');
    }
}
