<?php
/**
 * Created by PhpStorm.
 * User: habib bellaaj
 * Date: 07/05/2016
 * Time: 08:39
 */

namespace Stocks\AchatBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;

class DemandeType extends AbstractType     {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEmetteur',null,array('label'=> 'Nom de l\'émetteur '))
            ->add('numDemande', null, array('label' => 'Le numéro de la demande'))
            ->add('objetDemande', null, array('label' => 'L\'objet de la demande '))
            ->add('dateEmission', null, array('label' => 'La date d\'émission de la demande'))
            ->add('adresseLivraison', null, array('label' => 'L\'adresse de livraison '))
            ->add('save',      'submit');

    }
    public function getName(){
return 'demande';
}
} 