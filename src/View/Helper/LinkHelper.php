<?php
/**
 * BEdita, API-first content management framework
 * Copyright 2018 ChannelWeb Srl, Chialab Srl
 *
 * This file is part of BEdita: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * See LICENSE.LGPL or <http://gnu.org/licenses/lgpl-3.0.html> for more details.
 */
namespace App\View\Helper;

use Cake\Core\Configure;
use Cake\Routing\Router;
use Cake\View\Helper;

class LinkHelper extends Helper
{
    /**
     * API base URL
     *
     * @var string
     */
    protected $apiBaseUrl = null;

    /**
     * WebApp base URL
     *
     * @var string
     */
    protected $webBaseUrl = null;

    /**
     * {@inheritDoc}
     *
     * Init API and WebAPP base URL
     */
    public function initialize(array $config)
    {
        $this->apiBaseUrl = Configure::read('API.apiBaseUrl');
        $this->webBaseUrl = Router::fullBaseUrl();
    }

    /**
     * Transform API url in web app URL, preserving path part.
     * Extremely simple for now
     *
     * @param string $apiUrl
     * @return string
     */
    public function fromAPI($apiUrl)
    {
        echo str_replace($this->apiBaseUrl, $this->webBaseUrl, $apiUrl);
    }
}
