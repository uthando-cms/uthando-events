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

use TwbBundle\Form\View\Helper\TwbBundleForm;
use Zend\Form\Form;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;

/**
 * Class EventsForm
 *
 * @package UthandoEvents\Form
 */
class EventsForm extends Form implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    public function init()
    {
        /* @var \UthandoEvents\Options\EventsOptions $options */
        $options = $this->getServiceLocator()
            ->getServiceLocator()->get('UthandoEvents\Options\Events');

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
            'attributes' => [
                'placeholder' => 'Title',
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
                'format' => $options->getDateFormat(),
            ],
            'attributes' => [
                'class' => 'date-time-pick',
                'placeholder' => 'Date Time',
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
                'attributes' => [
                    'placeholder' => 'Description',
                    'class'       => 'editable-textarea',
                    'id'          => 'article-content-textarea',
                    'rows'        => 10,
                ],
            ],
        ]);

        $this->add([
            'name' => 'html',
            'type' => 'textarea',
            'options' => [
                'label' => 'HTML Content',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'HTML Content',
                'class'       => 'editable-textarea',
                'id'          => 'article-content-textarea',
                'rows'        => 25,
            ],
        ]);
    }
}
