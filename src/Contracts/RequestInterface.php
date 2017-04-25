<?php

namespace seregazhuk\HeadHunterApi\Contracts;

use seregazhuk\HeadHunterApi\Exceptions\HeadHunterApiException;

interface RequestInterface
{
    /**
     * @param string $uri
     * @param array $params
     * @return array
     */
    public function get($uri, $params = []);

    /**
     * @param string $uri
     * @param array $params
     * @return array
     */
    public function post($uri, $params = []);

    /**
     * @param string $uri
     * @return array
     */
    public function delete($uri);

    /**
     * @param string $uri
     * @param array $params
     * @return array
     */
    public function put($uri, $params = []);

    /**
     * @param string $requestMethod
     * @param string $uri
     * @param array $params
     * @param bool $useJson
     * @return mixed
     * @throws HeadHunterApiException
     */
    public function makeRequestCall($requestMethod, $uri, $params = [], $useJson = false);
}