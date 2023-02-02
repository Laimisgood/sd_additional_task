<?php

defined('BOOTSTRAP') or die('Access denied');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($mode === 'verify') {
        $birthDate = $_REQUEST['sb_age_verification']['av_date'];
        if (time() < strtotime('+18 years', strtotime($birthDate))) {
            fn_set_cookie('birthday_denied', $birthDate, COOKIE_ALIVE_TIME);
        } elseif (time() >= strtotime('+18 years', strtotime($birthDate))) {
            fn_set_cookie('birthday_confirmed', $birthDate, COOKIE_ALIVE_TIME);
        }
    }

    return array(CONTROLLER_STATUS_REDIRECT, ' ');
}