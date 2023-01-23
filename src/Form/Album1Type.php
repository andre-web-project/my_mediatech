<?php

namespace App\Form;

use App\Entity\Album;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class Album1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'label' => "Entrez le nom de l'album: ",
                'attr' => [
                    'placeholder' => "nom de l'album"
                ]
            ])
            ->add('active_comment', null, [
                'label' => 'Activation des commentaires'
            ])
            ->add('category', null, [
                'label' => 'Assignez une catégorie: '
            ])
            ->add('forWhy', null, [
                'label' => 'Donner l acces à un groupe d amis: '
            ])
            ->add('imageCouv', FileType::class, [
                'label' => "Entrez l'image de couverture: "
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Album::class,
        ]);
    }
}
