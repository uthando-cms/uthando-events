<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\Mapper
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\Mapper;

use DateTime;
use UthandoCommon\Mapper\AbstractDbMapper;

/**
 * Class EventsMapper
 *
 * @package UthandoEvents\Mapper
 */
class EventsMapper extends AbstractDbMapper
{
    protected $table = 'events';
    protected $primary = 'eventId';

    protected $listOldEntries = true;

    public function search(array $search, $sort, $select = null)
    {
        if (false === $this->getListOldEntries()) {
            $now = new DateTime();
            $select = $this->getSelect();
            $select->where->greaterThanOrEqualTo('dateTime', $now->format('Y-m-d H:i:s'));
        }

        return parent::search($search, $sort, $select);
    }

    /**
     * @return boolean
     */
    public function getListOldEntries()
    {
        return $this->listOldEntries;
    }

    /**
     * @param boolean $listOldEntries
     * @return $this
     */
    public function setListOldEntries($listOldEntries)
    {
        $this->listOldEntries = $listOldEntries;
        return $this;
    }
}
