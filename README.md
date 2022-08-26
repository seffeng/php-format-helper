## PHP Helpers

### 安装

```shell
# 安装
$ composer require seffeng/format-helper
```

### 目录说明

```
|---src
|   |   Format.php
|   |---Traits
|           FormatTrait.php
|---tests
|       FormatTest.php
```

### 示例

```php
/**
 * TestController.php
 * 示例
 */
namespace App\Http\Controllers;

use Seffeng\FormatHelper\Format;

class TestController extends Controller
{
    public function index()
    {
        var_dump(Format::sizeFormat(1024 * 1024 * 1024 * 1023));
    }
}
```

### 备注

1、更多示例请参考 tests 目录下测试文件。