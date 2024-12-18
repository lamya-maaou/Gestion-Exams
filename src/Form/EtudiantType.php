<?php

namespace App\Form;

use App\Entity\Etudiant;
use App\Entity\Filiere;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('dateNaissance', null, [
                'widget' => 'single_text',
            ])
            ->add('filiere', EntityType::class, [       // Champ pour la filière (relation avec l'entité Filiere)
                'class' => Filiere::class,             // Classe de l'entité Filiere
                'choice_label' => 'nom',               // Propriété "nom" de la filière à afficher
                'placeholder' => 'Choisir une filière', // Option placeholder
                'label' => 'Filière',                   // Label du champ
                'required' => true,                     // Champ obligatoire
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
