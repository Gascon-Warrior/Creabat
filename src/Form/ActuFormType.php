<?php 

namespace App\Form;

use App\Entity\Actu;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActuFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', options:[
                'label' => 'Titre'
            ])
            ->add('content',CKEditorType::class, options:[
                'label' => 'Contenu'
            ])            
           /* ->add('photo', MediaFormType::class, [                
                'mapped' => false,
                'required' => true,   
                     
            ])*/
            ->add('media_picture', FileType::class, [
                'label' => 'Photo',
                'mapped' => false, // Ceci indique que ce champ n'est pas lié à l'entité Actu
                'data_class' => null,
                'data' => $options['data']->getMediaPicture(), // Utilisez getMediaAlt() pour afficher la valeur
                'required' => false,
            ])  
            ->add('media_alt', TextType::class, [
                'label' => 'Texte test alternatif',
                'mapped' => false, // Ceci indique que ce champ n'est pas lié à l'entité Actu
                'data' => $options['data']->getMediaAlt(), // Utilisez getMediaAlt() pour afficher la valeur
                'required' => true,
            ])
            ->add('media_caption', TextType::class, [
                'label' => 'Légende',
                'mapped' => false, // Ceci indique que ce champ n'est pas lié à l'entité Actu
                'data' => $options['data']->getMediaCaption(), // Utilisez getMediaAlt() pour afficher la valeur
                'required' => true,
            ]);
            // Je retire les champs alt et caption qui sont en double 
            /*->get('photo')
                ->remove('alt')
                ->remove('caption')
            ;*/
           
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actu::class,
            
        ]);
    }
   
}