<?
$date = date('d.m.Y H:i:s');
//&& git pull origin master && git add . && git commit -m "'.$date.'" 
echo shell_exec('export GIT_SSH_COMMAND="ssh -o StrictHostKeyChecking=no -i /var/www/.ssh/key_git" && cd /var/www/vamba.biz && git pull origin master && git add . && git commit -m "'.$date.'" && git push origin master 2>&1');

?>