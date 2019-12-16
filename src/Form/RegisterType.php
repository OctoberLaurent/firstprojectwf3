<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('birthday')
            ->add('email', EmailType::class)
            /* Mot de passe */
            ->add('password', RepeatedType::class, [
                'label' => false,
                'type' => PasswordType::class,
                'first_options'  => [
                    'label' => "Nouveau mot de passe",
                    'required' => true,
                    'constraints' => [
                        new Length([
                            'min' => 1,
                            'minMessage' => "Saisir votre nouveau mot de passe",
                        ]),
                        new NotNull([
                            'message' => "Saisir votre nouveau mot de passe",
                        ]),
                        new NotBlank([
                            'message' => "Saisir votre nouveau mot de passe",
                        ]),
                    ],
                ],
                'second_options' => [
                    'label' => "Repéter le mot de passe",
                    'constraints' => [
                        new NotBlank([
                            'message' => "Repéter le mot de passe",
                        ]),
                    ],
                ],
                'invalid_message' => "Les mots de passe doivent etre identiques.",
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
