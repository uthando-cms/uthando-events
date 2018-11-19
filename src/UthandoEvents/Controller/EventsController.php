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

use UthandoCommon\Controller\AbstractCrudController;
use UthandoEvents\ServiceManager\EventsService;

/**
 * Class EventsController
 *
 * @package UthandoEvents\Mvc\Controller
 */
class EventsController extends AbstractCrudController
{
    protected $controllerSearchOverrides = ['sort' => 'eventId'];
    protected $serviceName = EventsService::class;
    protected $route = 'admin/events';
}
