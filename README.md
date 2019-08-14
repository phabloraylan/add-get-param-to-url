Manipulate a url string by adding GET parameters. 


### Installation

```sh
$ composer require phabloraylan/add-get-param-to-url
```

### Using

```php
  
  use AddGetParamToUrl\URL;
  
  $url = 'http://localhost';
  
  $params = [
      'name1' => 'value1',
      'name2' => 'value2',
  ];
  
  $r_url = URL::addGetParamToUrl($url, $params);
        
  echo $r_url;
```
