<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormFactoryInterface;

class UserForm
{
    private $formFactory;

    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    public function build(array $data)
    {
        $builder = $this->formFactory->createBuilder(FormType::class, $data);

        $builder
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class);

        return $builder->getForm();
    }
}
