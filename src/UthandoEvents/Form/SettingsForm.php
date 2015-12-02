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
use UthandoEvents\InputFilter\SettingsInputFilter;
use Zend\Form\Form;
use Zend\Hydrator\ClassMethods;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;

/**
 * Class SettingsForm
 *
 * @package UthandoEvents\Form
 */
class SettingsForm extends Form implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    public function init()
    {
        /* @var \UthandoEvents\Options\EventsOptions $object */
        $object = $this->getServiceLocator()
            ->getServiceLocator()
            ->get('UthandoEvents\Options\Events');

        $this->setObject($object)
            ->setHydrator(new ClassMethods());

        $inputFilter = new SettingsInputFilter();
        $inputFilter->init();

        $this->setInputFilter($inputFilter);

        $this->add([
            'name' => 'date_format',
            'type' => 'text',
            'options' => [
                'label' => 'Date Format',
                'column-size' => 'md-4',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'label_attributes' => [
                    'class' => 'col-md-2',
                ],
            ],
        ]);

        $this->add([
            'name' => 'sort_order',
            'type' => 'text',
            'options' => [
                'label' => 'Sort Order',
                'column-size' => 'md-4',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'label_attributes' => [
                    'class' => 'col-md-2',
                ],
            ],
        ]);

        $this->add([
            'name'			=> 'show_expired_events',
            'type'			=> 'checkbox',
            'options'		=> [
                'label'			=> 'Show Expired Events',
                'use_hidden_element' => true,
                'checked_value' => '1',
                'unchecked_value' => '0',
                'required' 		=> false,
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-4 col-sm-offset-2',
            ],
        ]);

        $this->add([
            'name' => 'number_of_events_to_show',
            'type' => 'number',
            'options' => [
                'label' => 'Number of Events to Show',
                'column-size' => 'md-4',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'label_attributes' => [
                    'class' => 'col-md-2',
                ],
            ],
        ]);

        $this->add([
            'name' => 'button-submit',
            'type' => 'submit',
            'attributes' => [
                'type' => 'submit',
                'class' => 'btn-primary'
            ],
            'options' => [
                'label' => 'Save',
                'column-size' => 'md-6'
            ],
        ]);

        // set default data.
        $this->setData($object->toArray());
    }
}
