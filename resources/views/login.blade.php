<?php

    session_start();
    $fb = new Facebook\Facebook([
    'app_id' => '436698857237317', // Replace {app-id} with your app id
    'app_secret' => '3cb5df7e28734ef97cc3579590b3a494',
    'default_graph_version' => 'v4.0',
    ]);

    $helper = $fb->getRedirectLoginHelper();

    $permissions = ['email']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('localhost:8000/flogin', $permissions);

    echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>


