<?
$date = date('d.m.Y H:i:s');
echo shell_exec('cd /var/www/vamba.biz && git pull origin master && git add . && git commit -m "'.$date.'" && git push origin master 2>&1');
?>