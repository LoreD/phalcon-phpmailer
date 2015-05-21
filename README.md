# phalcon-phpmailer
Phalcon Framework Phpmailer Google Mail Library

Usage Library : 

$Mail = new \Email();
if($Mail->sendEmail('email@email.com', 'Mail Subject', 'Mail content)) {
  echo 'success';
}
