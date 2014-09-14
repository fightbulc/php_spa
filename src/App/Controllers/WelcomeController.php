<?php

namespace App\Controllers;

use App\Views\Welcome\WelcomeView;

/**
 * WelcomeController
 * @author Tino Ehrich (tino@bigpun.me)
 */
class WelcomeController
{
    /**
     * @return WelcomeView
     */
    protected function getWelcomeViewInstance()
    {
        return new WelcomeView();
    }

    /**
     *
     */
    public function defaultAction()
    {
        return $this->getWelcomeViewInstance()->renderDefault();
    }

    /**
     * @param $name
     *
     * @return string
     */
    public function helloAction($name)
    {
        return $this->getWelcomeViewInstance()->renderHello($name);
    }

    /**
     * @return string
     */
    public function fooAction()
    {
        return $this->getWelcomeViewInstance()->renderFoo();
    }
}