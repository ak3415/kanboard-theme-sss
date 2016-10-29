<?php

namespace Kanboard\Plugin\Css;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/Css/skin.css"));
    }

    public function getPluginName()
    {
        return 'Css';
    }

    public function getPluginDescription()
    {
        return t('Redesign skin inspired by apmcodes');
    }

    public function getPluginAuthor()
    {
        return 'Soft System Solution';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'http://softsystemsolution.com';
    }
}
