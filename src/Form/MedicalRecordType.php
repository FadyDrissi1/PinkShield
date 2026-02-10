<?php

namespace App\Form;

use App\Entity\MedicalRecord;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicalRecordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('patientName') 
            ->add('diagnosis')
            ->add('prescription')
            ->add('bloodType')
        ; // On a enlevé updatedAt ici car il est géré par le Controller
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MedicalRecord::class,
        ]);
    }
}