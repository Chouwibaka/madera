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
                'label' => "Civilité",
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
                'attr' => array(
                    'placeholder' => 'Prénom',
                ),
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner le prénom"
                ))
            ))
            ->add('nom', TextType::class, array(
                'label' => 'Nom',
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Nom',
                ),
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner le nom"
                ))
            ))
            ->add('telephone', TextType::class, array(
                'label' => 'Téléphone',
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Téléphone',
                ),
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner le téléphone"
                ))
            ))
            ->add('email', TextType::class, array(
                'label' => 'E-mail',
                'required' => true,
                'attr' => array(
                    'placeholder' => 'E-mail',
                ),
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner l'email"
                ))
            ))
            ->add('adresse', TextType::class, array(
                'label' => 'Adresse',
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Adresse',
                ),
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner l'adresse"
                ))
            ))
            ->add('codepostal', TextType::class, array(
                'label' => 'Code postal',
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Code postal',
                ),
                'constraints' => new NotBlank(array(
                    'message' => "Veuillez renseigner le code postal"
                ))
            ))
            ->add('ville', TextType::class, array(
                'label' => 'Ville',
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Ville',
                ),
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
