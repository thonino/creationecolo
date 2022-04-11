<?php

namespace App\Form;

use App\Entity\Invoice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('firstname', TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Prénom'])
        ->add('lastname', TextType::class,[ 'attr' => ['class' => 'form-control'], 'label' => 'Nom'])
        ->add('address', TextType::class,[ 'attr' => ['class' => 'form-control'],'label' => 'Adresse'])
        ->add('zipcode', TextType::class,[ 'attr' => ['class' => 'form-control'],'label' => 'Code postal'])
        ->add('country', TextType::class,[ 'attr' => ['class' => 'form-control'],'label' => 'Pays'])
        ->add('city', TextType::class,[ 'attr' => ['class' => 'form-control'],'label' => 'Ville'])
        ->add('phone', TextType::class,[ 'attr' => ['class' => 'form-control'],'label' => 'Téléphone'])
        ->add('email', TextType::class,[ 'attr' => ['class' => 'form-control'],'label' => 'E-mail'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
