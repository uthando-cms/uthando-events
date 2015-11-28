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

use UthandoCommon\Hydrator\Strategy\DateTime;
use UthandoCommon\Service\AbstractMapperService;
use UthandoEvents\Form\EventsForm;
use UthandoEvents\Hydrator\EventsHydrator;
use UthandoEvents\Mapper\EventsMapper;
use Zend\EventManager\Event;

/**
 * Class EventsService
 *
 * @package UthandoEvents\ServiceManager
 * @method EventsMapper getMapper($mapperClass = null, array $options = [])
 */
class EventsService extends AbstractMapperService
{
    /**
     * @var string
     */
    protected $serviceAlias = 'UthandoEvents';

    /**
     * @var array
     */
    protected $tags = [
        'events',
    ];

    /**
     * Attach the events for this service
     */
    public function attachEvents()
    {
        $this->getEventManager()->attach([
            'pre.add', 'pre.edit',
        ], [$this, 'setDateFormat']);
    }

    /**
     * Add date format
     *
     * @param Event $e
     */
    public function setDateFormat(Event $e)
    {
        /* @var EventsForm $form */
        $form = $e->getParam('form');
        /* @var EventsHydrator $hydrator */
        $hydrator = $form->getHydrator();
        /* @var DateTime $dateTimeStrategy */
        $dateTimeStrategy = $hydrator->getStrategy('dateTime');
        $dateTimeStrategy->setHydrateFormat('d/m/Y H:i A');
    }

    /**
     * @return \Zend\Db\ResultSet\HydratingResultSet|\Zend\Db\ResultSet\ResultSet|\Zend\Paginator\Paginator
     */
    public function getTimeLine()
    {
        $this->getMapper()->setListOldEntries(true);
        $events = $this->search([
            'sort' => '-dateTime',
        ]);

        return $events;
    }
}
