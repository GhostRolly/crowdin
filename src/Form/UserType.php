<?php
/**
 * Created by PhpStorm.
 * User: Aziz Hamideche
 * Date: 10/12/2018
 * Time: 10:48
 */

namespace App\Form;

use App\Entity\CrowdinAuthUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class)
            ->add('UserMail', EmailType::class)
            ->add('password', RepeatedType::class)
            ->add('UserLang', TextType::class)
            ->add('submit', SubmitType::class, ['attr' => [
                'class' => 'btn btn-success pull-right'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => CrowdinAuthUser::class]);
    }
}

?>