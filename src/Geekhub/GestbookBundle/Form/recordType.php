<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhesha
 * Date: 11/14/12
 * Time: 9:47 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Geekhub\GestbookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class recordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('email', 'email')
            ->add('body')
        ;
    }

    public function getName()
    {
        return 'record';
    }
}
