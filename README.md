## WoaapApi
Etocrm woaap api

### Requirement

1. PHP >= 5.6
2. **[Composer](https://getcomposer.org/)**

## Installation

```shell
$ composer require openset/woaap
```

### Usage

```php
<?php

use Openset\WoaapApi;

$appid = '';
$appkey = '';

// 获取ackey接口
$resp = WoaapApi::getAckey($appid, $appkey);

print_r($resp);

```

## Contributors

[Your contributions are always welcome!](https://github.com/openset/http/graphs/contributors)

## LICENSE

Released under [MIT](https://github.com/openset/http/blob/master/LICENSE) LICENSE
