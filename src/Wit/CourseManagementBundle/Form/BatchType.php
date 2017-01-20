<?php

namespace Wit\CourseManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BatchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('coursecategory', 'entity', array('label'=>'Category', 'class'=>'ModelBundle:CourseCategory', 'empty_value'=>'- Select Category..', 'property'=>'title', 'multiple'=>false, 'attr'=>array('class'=>'gui-input', 'placeholder'=>'Category..')))
            ->add('title', 'text', array('label'=>'Name',    'attr'=>array('class'=>'gui-input', 'placeholder'=>'Name..')))
            ->add('code', 'text', array('label'=>'Batch Code',    'attr'=>array('class'=>'gui-input', 'placeholder'=>'Batch Code..')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wit\ModelBundle\Entity\CourseBatch'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wit_modelbundle_coursebatch';
    }
}
