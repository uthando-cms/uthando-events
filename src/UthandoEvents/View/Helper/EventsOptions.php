<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoEvents\View\Helper
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2015 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoEvents\View\Helper;

use UthandoCommon\View\AbstractViewHelper;
use UthandoCommon\View\ConfigTrait;

class EventsOptions extends AbstractViewHelper
{
    use ConfigTrait;

    /**
     * @param $key
     * @return string
     */
    public function __invoke($key)
    {
        $config = $this->getConfig('uthando_events');

        return $config[$key];
    }
}
