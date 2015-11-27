<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\Hydrator
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\Hydrator;

use UthandoCommon\Hydrator\AbstractHydrator;
use UthandoCommon\Hydrator\Strategy\DateTime;

/**
 * Class EventsHydrator
 *
 * @package UthandoEvents\Hydrator
 */
class EventsHydrator extends AbstractHydrator
{
    public function __construct()
    {
        parent::__construct();

        $this->addStrategy('dateTime', new DateTime());
    }

    /**
     * @param \UthandoEvents\Model\EventModel $object
     * @return array
     */
    public function extract($object)
    {
        return [
            'eventId'       => $object->getEventId(),
            'title'         => $object->getTitle(),
            'description'   => $object->getDescription(),
            'dateTime'      => $this->extractValue('dateTime', $object->getDateTime()),
        ];
    }
}
