<?php

namespace App\Form;

use App\Entity\Books;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BooksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Book title
            ->add('title', TextType::class, [
                'label'     => "Titre du livre",
                'help'      => "Saisir le titre du livre",
                'required'    => 'true',
                'attr'      => [
                    'placeholder' => "Titre",
                    'class' => "form-control",
                ],
                'label_attr'=> [
                    'class' => "col-4"
                ],
                'help_attr' => [
                    'class' => "badge badge-dark"
                ]
            ])
            // Book description
            ->add('description', TextareaType::class, [
                'label'     => "Description du livre",
                'help'      => "Saisir la description",
                'required'    => 'true',
                'attr'      => [
                    'placeholder' => "Description",
                    'class' => "form-control",
                ],
                'label_attr'=> [
                    'class' => "col-4"
                ],
                'help_attr' => [
                    'class' => "badge badge-dark"
                ]
            ])
            // Book price
            ->add('price', NumberType::class, [
                'label'     => "Prix du livre",
                'help'      => "Saisir le prix",
                'required'    => 'true',
                'attr'      => [
                    'placeholder' => "prix",
                    'class' => "form-control",
                ],
                'label_attr'=> [
                    'class' => "col-4"
                ],
                'help_attr' => [
                    'class' => "badge badge-dark"
                ]
            ])
            // Book cover
            //->add('cover')
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Books::class,
        ]);
    }
}
