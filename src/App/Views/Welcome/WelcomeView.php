<?php

namespace App\Views\Welcome;

use App\Views\AbstractBaseView;

/**
 * WelcomeView
 * @author Tino Ehrich (tino@bigpun.me)
 */
class WelcomeView extends AbstractBaseView
{
    /**
     * @return string
     */
    public function renderDefault()
    {
        $params = ['navigationPartial' => $this->renderNavigation()];
        $content = $this->renderTemplate('Welcome/WelcomeDefaultTemplate', $params);

        return $this->renderBase(['content' => $content]);
    }

    /**
     * @param $name
     *
     * @return string
     */
    public function renderHello($name)
    {
        $params = ['name' => $name, 'navigationPartial' => $this->renderNavigation()];
        $content = $this->renderTemplate('Welcome/WelcomeHelloTemplate', $params);

        return $this->renderBase(['content' => $content]);
    }

    /**
     * @return string
     */
    public function renderFoo()
    {
        $params = ['navigationPartial' => $this->renderNavigation()];
        $content = $this->renderTemplate('Welcome/WelcomeFooTemplate', $params);

        return $this->renderBase(['content' => $content]);
    }
}