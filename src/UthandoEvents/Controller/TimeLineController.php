<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\Mvc\Controller
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\Controller;

use UthandoCommon\Service\ServiceTrait;
use UthandoEvents\Options\EventsOptions;
use UthandoEvents\ServiceManager\EventsService;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class TimeLineController
 *
 * @package UthandoEvents\Mvc\Controller
 */
class TimeLineController extends AbstractActionController
{
    use ServiceTrait;

    public function indexAction()
    {
        $events = $this->getService(EventsService::class)
            ->getTimeLine();

        $options = $this->getService(EventsOptions::class);

        return [
            'events' => $events,
            'options' => $options,
        ];
    }
}
