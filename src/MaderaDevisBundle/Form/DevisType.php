<?php

namespace MaderaDevisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('modele', EntityType::class, array(
                'label' => 'Modèle',
                'class' => 'AppBundle\Entity\Modele',
                'required' => true
            ))
            ->add('gamme', EntityType::class, array(
                'label' => 'Gamme',
                'class' => 'AppBundle\Entity\Gamme',
                'required' => true
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaderaDevisBundle\Entity\Devis'
        ));
    }
}
