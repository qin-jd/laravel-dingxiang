### laravel-dingxiang
因为项目需求需要对接顶象无感验证，顶象并没有给出官方的composer包。  
为了我们几个系统能方便地接入，通过修改顶象给的sdk包做出了laravel的扩展包。  
也为了后续别的开发者能方便地将顶象验证集成到laravel项目中。

### 安装

`composer require qin-jd/laravel-dingxiang`

### 使用指南

laravel5.5以上扩展包自动发现，无需配置即可使用。

laravel5.5版本以下：

在config/app.php里配置服务提供者

```
'providers' => [
    // ...
    Qinjd\Dingxiang\DingxiangServiceProvider::class,
]
```

配置aliases

```
'aliases' => [
    // ...
    'DXCaptcha' => 'Qinjd\Dingxiang\Facades\DXCaptcha',
]
```

### 配置

在.env里配置如下信息

```
DX_APP_ID=appid
DX_APP_SECRET=appsecret
```

### 示例demo

前端引入顶象的js文件

`<script src="https://cdn.dingxiang-inc.com/ctu-group/captcha-ui/index.js"></script>`

前端将生成的token发送给服务端，服务端只需一行代码即可：

```
$checked = DXCaptcha::check('token')
```

