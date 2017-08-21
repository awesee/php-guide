<?PHP

ini_set('memory_limit', '128M');
set_time_limit(1200);
date_default_timezone_set('PRC');

define('DIR_PATH', getcwd());
define('MAIL_SMTP_HOST', 'smtp.exmail.qq.com');
define('MAIL_USER', '***@example.com');
define('MAIL_PWD', '******');
define('MAIL_SENDER_NAME', '***');
define('MAIL_SENDER', '***@example.com');
define('MAIL_SMTP_PORT', 25);

include_once 'class/smtp.php';

function sendEmail($path, $msg = null, $toUser = ['???@qq.com','???@example.com']) {
    $flag = '';
    $m = new smtp();
    $m->attachMent = $path;
    $flag = $m->sendMail($toUser, $msg, date('Ymd', time()) . "数据统计报表");
    if ($flag) {
        file_put_contents(DIR_PATH . '/mail_log.log', "\n时间：" . date('Y-m-d H:i:s', time()) . "，发送成功\n", FILE_APPEND);
    } else {
        file_put_contents(DIR_PATH . '/mail_log.log', "\n时间：" . date('Y-m-d H:i:s', time()) . "，发送失败\n", FILE_APPEND);
    }
}

sendEmail(['/Users/smtp/test.xlsx']);
