<?php
function dbg_ob_gzhandler($buffer, $mode) {
  error_log('dbg_ob_gzhandler invoked');
  $rv = ob_gzhandler($buffer, $mode);
  if ( false===$rv ) {
    error_log('client does not support compressed content');
  }
  return $rv;
}
ob_start('dbg_ob_gzhandler');
 ?>

<?php
$pageTitle = 'Lumelec Services - Wirrals Best electrical assistance!';
$pageDescription ='24 hour call out, 365 days a year electrical service.';
$keywords = 'electrician';
include 'header.php';
include 'main.php';
?>