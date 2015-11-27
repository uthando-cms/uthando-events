<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\Mvc\Controller
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\Mvc\Controller;

use UthandoCommon\Controller\AbstractCrudController;

/**
 * Class EventsController
 *
 * @package UthandoEvents\Mvc\Controller
 */
class EventsController extends AbstractCrudController
{
    protected $controllerSearchOverrides = ['sort' => 'eventId'];
    protected $serviceName = 'UthandoEvents';
    protected $route = 'admin/events';
}
