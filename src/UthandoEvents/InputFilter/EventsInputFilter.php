<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\InputFilter
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\InputFilter;

use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Filter\ToInt;
use Zend\InputFilter\InputFilter;
use Zend\Validator\Digits;

/**
 * Class EventsInputFilter
 *
 * @package UthandoEvents\InputFilter
 */
class EventsInputFilter extends InputFilter
{
    public function init()
    {
        $this->add([
            'name' => 'eventId',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
                ['name' => ToInt::class],
            ],
            'validators' => [
                ['name' => Digits::class],
            ],
        ]);

        $this->add([
            'name' => 'title',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
        ]);

        $this->add([
            'name' => 'description',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
        ]);

        $this->add([
            'name' => 'html',
            'required' => false,
            'filters' => [
                ['name' => StringTrim::class],
            ],
        ]);

        $this->add([
            'name' => 'dateTime',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
        ]);
    }
}
