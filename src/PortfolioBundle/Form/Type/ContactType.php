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
    			)
    		))
    		->add('subject', TextType::class, array(
    			'label' => 'Temat',
    			'attr' => array(
    				'class' => 'form-control'
    			)
    		))
    		->add('message', TextareaType::class, array(
    			'label' => 'Treść wiadomości',
    			'attr' => array(
    				'class' => 'form-control',
    				'rows' => 10
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

    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'PortfolioBundle\Entity\Contact'
        ));
    }

}