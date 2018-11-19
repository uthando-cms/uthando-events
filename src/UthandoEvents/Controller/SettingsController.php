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

use UthandoCommon\Controller\SettingsTrait;
use UthandoEvents\Form\SettingsForm;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class SettingsController
 *
 * @package UthandoEvents\Mvc\Controller
 */
class SettingsController extends AbstractActionController
{
    use SettingsTrait;

    public function __construct()
    {
        $this->setFormName(SettingsForm::class)
            ->setConfigKey('uthando_events');
    }
}
