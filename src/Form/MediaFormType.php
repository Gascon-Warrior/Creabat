<?php

namespace App\Form;

use App\Entity\Media;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediaFormType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {   
       
        $builder
            ->add('picture', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ])
            ->add('alt', options: [
                'label' => 'Texte alternatif',                           
                'required' => false
            ])
            ->add('caption', options: [
                'label' => 'Légende',
                'required' => false               
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
