<?php

namespace App\Views;

use Simplon\Frontend\Frontend;
use Simplon\Frontend\Template;

/**
 * BaseView
 * @package App\Views
 * @author Tino Ehrich (tino@bigpun.me)
 */
abstract class AbstractBaseView
{
    /**
     * @param $template
     * @param array $params
     *
     * @return string
     */
    protected function renderTemplate($template, array $params = [])
    {
        return Frontend::renderTemplate($template, $params);
    }

    /**
     * @return string
     */
    protected function renderNavigation()
    {
        return $this->renderTemplate('Partials/NavigationPartialTemplate');
    }

    /**
     * @param array $params
     *
     * @return string
     */
    protected function renderBase(array $params)
    {
        if (HAS_SPA === true)
        {
            return $params['content'];
        }

        Template::addAssets([
            '/assets/css/master.css',
            '/assets/vendor/php-spa-loader/php-spa-loader.min.js',
            '/assets/js/master.js',
        ]);

        // render base template
        return $this->renderTemplate('AppTemplate', $params);
    }
}