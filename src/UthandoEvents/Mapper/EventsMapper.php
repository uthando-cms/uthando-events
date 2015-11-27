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
}
