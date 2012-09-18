<?php
/**
 * Created by JetBrains PhpStorm.
 * User: firesnake
 * Date: 22.02.12
 * Time: 17:14
 */

namespace Ailove\FormTypesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class FromToType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {
//
        $builder->resetClientTransformers();
//        $builder->appendClientTransformer(new DatepickerTransformer());
//        $builder->setAttribute('locale', $options['locale']);
//        $builder->setAttribute('range', $options['range']);
//
    }

    public function getDefaultOptions(array $options)
    {
        return array(
        );
    }

    public function getParent(array $options)
    {
        return 'number';
    }

    public function getName()
    {
        return 'ailove_type_from_to';
    }

//    public function buildView(FormView $view, FormInterface $form)
//    {
//
//        $view->setAttribute('class', 'sonata-datepicker');
//
//
//        $view->set('locale', $form->getAttribute('locale'));
//        $view->set('range', $form->getAttribute('range'));
//    }
}
