# Umbrella  
一个PHP的小程序，可以设置定时发送邮件提醒带伞

当前版本：Ver.3,已实现的功能有：多用户，可以控制的推送时间选择，可选雨天单独推送

在 https://console.heweather.com/ 申请好KEY后

于config.php与user.json内填写合适内容即可享用本脚本

# 简易使用说明：

## 1.注册和风天气,获取API

![%_8OUD6JYIR~NF_{)FHBCG3.png](https://i.loli.net/2018/08/09/5b6bcbbf9c7e7.png)
## 2.将三个文件放于同一目录下，如
`/home/umb/`
## 3.编辑config.php

您需要按照实际需求填写

```
$appname = "Nchyn's带伞提醒";	//应用名称
$link = "http://weather.nchyn.com";	//应用主页
$key = "your KEY";//和风天气KEY，请在api.hweather.com申请
$smtpserver     = "smtp.ym.163.com"; //SMTP服务器
$smtpserverport = 25; //SMTP服务器端口
$smtpusermail   = "your@domain.com"; //SMTP服务器的用户邮箱
$smtpuser       = "your@domain.com"; //SMTP服务器的用户帐号
$smtppass       = "yourpassword"; //SMTP服务器的用户密码
```
以上字段,如需调试请将

`$smtp->debug    = false;`
设为
`$smtp->debug    = true;`

如需使用ssl，请将

`$smtpserver`添加`ssl://`,

如：`$smtpserver     = "smtp.ym.163.com";`

## 4.编辑users.json
### 注意检查

## 5.运行umbrellaV3.php
您可以部署于WEB服务器或
`php /home/umb/umbrellaV3.php`
直接运行

亦可设置crontab做定时任务，自V3.1.0后，建议设置为每小时一次的定时任务或自动访问url。

~~喜欢请star,虽然我知道我只是写了一坨shit~~

