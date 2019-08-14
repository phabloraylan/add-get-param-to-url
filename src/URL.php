<?php

namespace AddGetParamToUrl;

use AddGetParamToUrl\Exceptions\URLException;
use AddGetParamToUrl\Exceptions\EmptyParametersException;

class URL
{
    private function __construct()
    { }

    static function addGetParamToUrl(&$url, $params)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
            throw new URLException('invalid url');
        }

        if (empty($params)) {
            throw new EmptyParametersException('empty parameters');
        }

        // is there already an ?
        if (strpos($url, "?")) {
            $url .= "&";
        } else {
            $url .= "?";
        }

        $url_ṕarams = http_build_query($params);
        return $url . $url_ṕarams;
    }
}
