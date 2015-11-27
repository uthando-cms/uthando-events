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

use Zend\InputFilter\InputFilter;

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
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
                ['name' => 'ToInt'],
            ],
            'validators' => [
                ['name' => 'Digits'],
            ],
        ]);

        $this->add([
            'name' => 'title',
            'required' => true,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);

        $this->add([
            'name' => 'description',
            'required' => true,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);

        $this->add([
            'name' => 'html',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim'],
            ],
        ]);

        $this->add([
            'name' => 'dateTime',
            'required' => true,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);
    }
}
