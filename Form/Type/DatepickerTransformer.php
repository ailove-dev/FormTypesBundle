<?php
/**
 * Created by JetBrains PhpStorm.
 * User: firesnake
 * Date: 01.03.12
 * Time: 11:13
 */

namespace Ailove\FormTypesBundle\Form\Type;

use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\Exception\UnexpectedTypeException;

class DatepickerTransformer implements DataTransformerInterface
{

    public function reverseTransform($value)
    {

        if (is_array($value)) return $value;

        if(!$value) return '';

        if(null === $value)
        {
            return new \DateTime();
        }

        return new \DateTime($value);

    }

    /**
     * @param \DateTime $value
     * @return array|string
     */
    public function transform($value)
    {

        if (is_array($value)) return $value;

        if(!$value) return '';

        if (!$value instanceof \DateTime) {
            throw new UnexpectedTypeException($value, '\DateTime');
        }

        return date('d.m.Y', $value->getTimestamp());

    }
}
