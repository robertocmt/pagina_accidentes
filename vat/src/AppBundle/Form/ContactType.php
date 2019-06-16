<?php
// src/AppBundle/Form/ContactType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;

const textType = 'Symfony\Component\Form\Extension\Core\Type\TextType';
const emailType = 'Symfony\Component\Form\Extension\Core\Type\EmailType';
const textareaType = 'Symfony\Component\Form\Extension\Core\Type\TextareaType';
const submitType = 'Symfony\Component\Form\Extension\Core\Type\SubmitType';

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', textType, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Dime tu nombre'
                )
            ))
            ->add('email', emailType, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Email para que pueda responderte'
                )
            ))
            ->add('motivo', textType, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'El motivo de contactar conmigo'
                )
            ))
            ->add('mensaje', textareaType, array(
                'label' => false,
                'attr' => array(
                    'cols' => 90,
                    'rows' => 10,
                    'placeholder' => 'Mensaje que quieres enviarme'
                )
            ))
            ->add('save', submitType, array('label' => 'Enviar'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $collectionConstraint = new Collection(array(
            'nombre' => array(
                new NotBlank(array('message' => 'El nombre no puede estar vacío.')),
                new Length(array('min' => 3))
            ),
            'email' => array(
                new NotBlank(array('message' => 'El email no puede estar vacío.')),
                new Email(array('message' => 'Email inválido.'))
            ),
            'motivo' => array(
                new NotBlank(array('message' => 'El motivo no puede estar vacío.')),
                new Length(array('min' => 3))
            ),
            'mensaje' => array(
                new NotBlank(array('message' => 'El mensaje no puede estar vacío.')),
                new Length(array('min' => 5))
            )
        ));

        $resolver->setDefaults(array(
            'constraints' => $collectionConstraint
        ));
    }

    public function getName()
    {
        return 'contacto';
    }
}