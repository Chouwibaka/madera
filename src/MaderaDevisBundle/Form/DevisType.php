<?php

namespace MaderaDevisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

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
                'class' => 'MaderaDevisBundle\Entity\Modele',
                'required' => true
            ))
            ->add('gamme', EntityType::class, array(
                'label' => 'Gamme',
                'class' => 'MaderaDevisBundle\Entity\Gamme',
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
