<?php

namespace PortfolioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;


class ContactType extends AbstractType{
	
	public function getName()
	{
		return 'contact_form';
	}

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('email', EmailType::class, array(
    			'label' => 'Email',
    			'attr' => array(
    				'class' => 'form-control'
    			),
                'constraints' => array(
                    new Assert\NotBlank(
                        array(
                            'message' => 'Email value should not be blank.'
                        )
                    ),
                    new Assert\Email(
                        array(
                            'strict' => true,
                            'message' => 'The email "{{ value }}" is not a valid email.'
                        )
                    )
                )
    		))
    		->add('subject', TextType::class, array(
    			'label' => 'Temat',
    			'attr' => array(
    				'class' => 'form-control'
    			),
                'constraints' => array(
                    new Assert\NotBlank(
                        array(
                            'message' => 'Subject value should not be blank.'
                        )
                    )
                )
    		))
    		->add('message', TextareaType::class, array(
    			'label' => 'Treść wiadomości',
    			'attr' => array(
    				'class' => 'form-control',
    				'rows' => 10
    			),
                'constraints' => array(
                    new Assert\NotBlank(
                        array(
                            'message' => 'Message value should not be blank.'
                        )
                    )
                )
    		))
    		->add('send_message', SubmitType::class, array(
    			'attr' => array(
    				'class' => 'w-100 contact-button',
    				'id' => 'contact-submit'
    			)
   			));
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		//$resolver->setDefaults(array(
        //    'id' => array('id' => 'contact-form')
        //));
	}

}