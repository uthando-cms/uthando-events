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
use UthandoEvents\Options\EventsOptions;

/**
 * Class ConvertDateFormat
 *
 * @package UthandoEvents\View\Helper
 */
class ConvertDateFormat extends AbstractViewHelper
{
    /**
     * @var EventOptions
     */
    protected $options;

    /**
     * @var string
     */
    protected $type;

    /**
     * @param null|string $type
     * @return $this
     */
    public function __invoke($type = null)
    {
        if ($type) {
            $this->setType($type);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $renderMethod   = 'render' . $this->getType() . 'Format';
        $format         = $this->getOptions()->getDateFormat();

        return $this->getDateFormatHelper()
            ->setFormat($format)
            ->$renderMethod();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @return string
     */
    public function getType()
    {
        return ucfirst($this->type);
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = strtolower($type);
        return $this;
    }

    /**
     * @return \UthandoCommon\View\ConvertToJsDateFormat
     */
    protected function getDateFormatHelper()
    {
        return $this->getView()->plugin('convertToJsDateFormat');
    }

    /**
     * @return EventsOptions
     */
    protected function getOptions()
    {
        if (!$this->options instanceof EventsOptions) {
            $this->options = $this->getServiceLocator()
                ->getServiceLocator()
                ->get('UthandoEvents\Options\Events');
        }

        return $this->options;

    }
}
