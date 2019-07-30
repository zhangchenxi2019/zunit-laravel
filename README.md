# zunit-laravel

A simplified version of the laravel framework unit test.


# 环境要求
laravel >= 5.1 & PHP > 7.1.3

## 安装方式


```shell
$ composer require zhangchenxi2019/zunit-laravel -vvv
```

## 配置方式

手动配置laravel把zunit服务引入到config/app.app中
```
   Zhangchenxi2019\ZunitLaravel\Providers\ZunitServiceProvider::class
```
## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zhangchenxi2019/zunit-laravel/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zhangchenxi2019/zunit-laravel/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT