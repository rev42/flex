<?php

namespace App\Controller;

use App\Service\Checker;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class FoController extends Controller
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Checker
     */
    private $checker;

    public function __construct(Checker $checker, RequestStack $requestStack)
    {
        $this->checker = $checker;
        $this->request = $requestStack->getCurrentRequest();
    }

    public function index()
    {
        return $this->render(
            'default/index.html.twig',
            [
                'greeting' => 'This is FO home',
                'param' => $this->checker->isVerified($this->request->get('param'))
            ]
        );
    }

    public function test()
    {
        return $this->redirectToRoute('fo_homepage');
    }
}