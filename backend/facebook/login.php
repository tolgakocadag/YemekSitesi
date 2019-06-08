<?php
require_once 'autoload.php';


$fb = new Facebook\Facebook([
 'app_id' => '2587331154632976',
 'app_secret' => '64dcadc01128c33f4480417141218b0b',
 'default_graph_version' => 'v2.2',
 ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email,publish_actions,rsvp_event'];
$loginUrl = $helper->getLoginUrl('BURAYA Valid OAuth Redirect URI GELECEK', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>
