# Umbrella
一个PHP的小程序，可以设置定时发送邮件提醒带伞

在 https://console.heweather.com/ 申请好KEY后

于config.php内填写合适内容即可享用本脚本

#简易使用说明：

##1.注册和风天气,获取API

![%_8OUD6JYIR~NF_{)FHBCG3.png](https://i.loli.net/2018/08/09/5b6bcbbf9c7e7.png)
##2.将三个文件放于同一目录下，如
`/home/umb/`
##3.编辑config.php

您需要按照实际需求填写

```
$userid = "Nchyn";	//用户名
$location = "shanghai";	//用户物理地址
$usermail = "youremail@domain.com";	//用户邮箱
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

##4.运行umbrellaV2.php
您可以部署于WEB服务器或
`php /home/umb/umbrellaV2.php`
直接运行
亦可设置crontab做定时任务

~~喜欢请star,虽然我知道我只是写了一坨shit~~

