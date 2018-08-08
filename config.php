<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
date_default_timezone_set("PRC");

require 'email.class.php';
$userid = "Nchyn";	//用户名
$location = "shanghai";	//用户物理地址
$usermail = "youremail@domain.com";	//用户邮箱
$appname = "Nchyn's带伞提醒";	//应用名称
$link = "http://weather.nchyn.com";	//应用主页
$key = "your KEY";//和风天气KEY，请在api.hweather.com申请
$api = "https://free-api.heweather.com/s6/weather/forecast?location={$location}&key={$key}";//json地址
$str = file_get_contents($api);
//echo "邮件发送完成".date('时间：Y年m月d日   H:i');
function sendmailto($mailto, $mailsub, $mailbd)
{
    //require_once ('email.class.php');
    //##########################################
    $smtpserver     = "smtp.ym.163.com"; //SMTP服务器
    $smtpserverport = 25; //SMTP服务器端口
    $smtpusermail   = "your@domain.com"; //SMTP服务器的用户邮箱
    $smtpemailto    = $mailto;
    $smtpuser       = "your@domain.com"; //SMTP服务器的用户帐号
    $smtppass       = "yourpassword"; //SMTP服务器的用户密码
    $mailsubject    = $mailsub; //邮件主题
    $mailsubject    = "=?UTF-8?B?" . base64_encode($mailsubject) . "?="; //防止乱码
    $mailbody       = $mailbd; //邮件内容
    //$mailbody = "=?UTF-8?B?".base64_encode($mailbody)."?="; //防止乱码
    $mailtype       = "HTML"; //邮件格式（HTML/TXT）,TXT为文本邮件. 139邮箱的短信提醒要设置为HTML才正常
    ##########################################
    $smtp           = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $smtp->debug    = false; //是否显示发送的调试信息
    $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
     
}
?>
