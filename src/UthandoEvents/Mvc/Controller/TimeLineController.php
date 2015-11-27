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

use UthandoCommon\Service\ServiceTrait;
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
        $events = $this->getService('UthandoEvents')
            ->getTimeLine();

        return [
            'events' => $events,
        ];
    }
}
