<?php

namespace App\Form;

use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numbre',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Position'])
            ->add('name',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Nom'])
            ->add('image',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Image'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
