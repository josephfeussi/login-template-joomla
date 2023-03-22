<?php
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$user = JFactory::getUser();

if ($user->guest) {
    // Load the login module
    $options = array('style' => 'xhtml');
    // echo JModuleHelper::renderModule(JModuleHelper::getModule('mod_login', '', $options));
   require_once(JPATH_SITE.'/templates/j2store/login.php');
   //JModuleHelper::getModule('mod_login', '/templates/j2store/login.php', $options);
} else {
    // Redirect to the homepage
    $app->redirect(JURI::root());
}
?>
