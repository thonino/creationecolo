<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('price',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Prix'])
            ->add('stock',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'stock'])
            ->add('poid',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'poid'])
            ->add('name',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Nom'])
            ->add('image',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Image'])
            ->add('image2',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Image2'])
            ->add('image3',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Image3'])
            ->add('description',TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Description'])
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
