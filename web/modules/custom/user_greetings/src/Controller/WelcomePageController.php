<?php

namespace Drupal\user_greetings\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Defines WelcomePage Controller class.
 */

class WelcomePageController extends ControllerBase
{
  public function welcome($username)
  {
    return new Response('Welcome  '.$username.' to my new Drupal 8 website!');
  }
}
