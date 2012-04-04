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

class DatepickerType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {

        $builder->resetClientTransformers();
        $builder->appendClientTransformer(new DatepickerTransformer());
        $builder->setAttribute('locale', $options['locale']);

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'locale' => 'en-GB',
            'format' => 'yyyy-MM-dd',
        );
    }

    public function getParent(array $options)
    {
        return 'number';
    }

    public function getName()
    {
        return 'sonata_type_datepicker';
    }

    public function buildView(FormView $view, FormInterface $form)
    {
        $view->setAttribute('class', 'sonata-datepicker');
        $view->set('locale', $form->getAttribute('locale'));
    }
}
