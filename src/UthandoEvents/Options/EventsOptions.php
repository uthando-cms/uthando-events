<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\Options
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * Class EventsOptions
 *
 * @package UthandoEvents\Options
 */
class EventsOptions extends AbstractOptions
{
    const DATE_DEFAULT  = 'd/m/Y H:i A';

    /**
     * @var string
     */
    protected $dateFormat = self::DATE_DEFAULT;

    /**
     * @var bool
     */
    protected $showExpiredEvents = false;

    /**
     * @var int
     */
    protected $numberOfEventsToShow = 10;

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * @param string $dateFormat
     * @return $this
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowExpiredEvents()
    {
        return $this->showExpiredEvents;
    }

    /**
     * @param boolean $showExpiredEvents
     * @return $this
     */
    public function setShowExpiredEvents($showExpiredEvents)
    {
        $this->showExpiredEvents = $showExpiredEvents;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfEventsToShow()
    {
        return $this->numberOfEventsToShow;
    }

    /**
     * @param int $numberOfEventsToShow
     * @return $this
     */
    public function setNumberOfEventsToShow($numberOfEventsToShow)
    {
        $this->numberOfEventsToShow = $numberOfEventsToShow;
        return $this;
    }
}
