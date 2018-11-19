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

use Zend\Filter\Boolean;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Filter\ToInt;
use Zend\InputFilter\InputFilter;

/**
 * Class SettingsInputFilter
 *
 * @package UthandoEvents\InputFilter
 */
class SettingsInputFilter extends InputFilter
{
    public function init()
    {
        $this->add([
            'name' => 'date_format',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]
        ]);

        $this->add([
            'name' => 'sort_order',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]
        ]);

        $this->add([
            'name' => 'show_expired_events',
            'required' => false,
            'allow_empty' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
                ['name' => Boolean::class],
            ]
        ]);

        $this->add([
            'name' => 'number_of_events_to_show',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
                ['name' => ToInt::class],
            ]
        ]);
    }
}
