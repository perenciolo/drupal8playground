<?php

namespace Drupal\user_greetings\Service;

class WelcomeMessageGenerator
{

    public function getWelcomeMessage($username)
    {
        return 'Welcome  ' . $username . ' to my new Drupal 8 website!';
    }
}
