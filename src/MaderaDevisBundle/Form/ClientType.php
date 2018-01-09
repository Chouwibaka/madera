<?php

namespace MaderaDevisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', ChoiceType::class, array(
                'choices'  => array(
                    'Homme' => 'H',
                    'Femme' => 'F',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => true,
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner la civilité"
                ))
            ))
            ->add('prenom', TextType::class, array(
                'label' => 'Prénom',
                'required' => true,
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner le prénom"
                ))
            ))
            ->add('nom', TextType::class, array(
                'label' => 'Nom',
                'required' => true,
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner le nom"
                ))
            ))
            ->add('telephone', TextType::class, array(
                'label' => 'Téléphone',
                'required' => true,
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner le téléphone"
                ))
            ))
            ->add('adresse', TextType::class, array(
                'label' => 'Adresse',
                'required' => true,
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner l'adresse"
                ))
            ))
            ->add('codepostal', TextType::class, array(
                'label' => 'Code postal',
                'required' => true,
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner le code postal"
                ))
            ))
            ->add('ville', TextType::class, array(
                'label' => 'Ville',
                'required' => true,
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner la ville"
                ))
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaderaDevisBundle\Entity\Client'
        ));
    }
}
