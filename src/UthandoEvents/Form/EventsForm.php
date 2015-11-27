<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\Form
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\Form;

use DateTime;
use TwbBundle\Form\View\Helper\TwbBundleForm;
use Zend\Form\Element\Button;
use Zend\Form\Form;

/**
 * Class EventsForm
 *
 * @package UthandoEvents\Form
 */
class EventsForm extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'eventId',
            'type' => 'hidden',
        ]);

        $this->add([
            'name' => 'title',
            'type' => 'text',
            'options' => [
                'label' => 'Title',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'md-4',
                'label_attributes' => [
                    'class' => 'col-md-2',
                ],
            ],
        ]);

        $this->add([
            'name' => 'description',
            'type' => 'textarea',
            'options' => [
                'label' => 'Description',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'md-10',
                'label_attributes' => [
                    'class' => 'col-md-2',
                ],
            ],
        ]);

        $this->add([
            'name' => 'html',
            'type' => 'textarea',
            'options' => [
                'label' => 'HTML Content',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'md-10',
                'label_attributes' => [
                    'class' => 'col-md-2',
                ],
            ],
            'attributes' => [
                'class' => 'tiny-mce-textarea',
            ],
        ]);

        $this->add([
            'name' => 'dateTime',
            'type' => 'dateTime',
            'options' => [
                'label' => 'Date/Time',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'md-4 date-time-pick',
                'add-on-append' => '<i class="fa fa-calendar"></i>',
                'label_attributes' => [
                    'class' => 'col-md-2',
                ],
                'format' => 'd/m/Y H:i A',
            ],
            'attributes' => [
                'class' => 'date-time-pick',
            ],
        ]);
    }
}
