<?php

namespace AddGetParamToUrl;

use AddGetParamToUrl\URL;

class URLTest extends TestCase
{

    public function testAddGetParamToUrlWithValues()
    {

        $url = "http://localhost?name0=value0";

        $params = [
            'name1' => 'value1',
            'name2' => 'value2',
        ];
        $r_url = URL::addGetParamToUrl($url, $params);

        $this->assertEquals("http://localhost?name0=value0&name1=value1&name2=value2", $r_url);
    }

    public function testAddGetParamToUrlWithoutValues()
    {

        $url = "http://localhost";

        $params = [
            'name1' => 'value1',
            'name2' => 'value2',
        ];
        $r_url = URL::addGetParamToUrl($url, $params);

        $this->assertEquals("http://localhost?name1=value1&name2=value2", $r_url);
    }

    public function testAddGetParamToUrlURLException()
    {
        $this->expectExceptionMessage('invalid url');

        $url = "localhost";

        $params = [
            'name1' => 'value1',
            'name2' => 'value2',
        ];

        $r_url = URL::addGetParamToUrl($url, $params);
    }

    public function testAddGetParamToUrlEmptyParametersException()
    {
        $this->expectExceptionMessage('empty parameters');

        $url = "http://localhost";

        $params = [];

        $r_url = URL::addGetParamToUrl($url, $params);
    }
}
