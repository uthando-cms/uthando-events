<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\ServiceManager
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\ServiceManager;

use UthandoEvents\Options\EventsOptions;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class EventsOptionsFactory
 *
 * @package UthandoEvents\ServiceManager
 */
class EventsOptionsFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config         = $serviceLocator->get('config');
        $formOptions    = (isset($config['uthando_events'])) ? $config['uthando_events'] : [];
        $options        = new EventsOptions($formOptions);

        return $options;
    }
}
