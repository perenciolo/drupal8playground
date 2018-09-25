<?php

namespace Drupal\user_greetings\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user_greetings\Service\WelcomeMessageGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Defines WelcomePage Controller class.
 */

class WelcomePageController extends ControllerBase
{
    private $welcomeMessageGenerator;

    public function __construct(WelcomeMessageGenerator $welcomeMessageGenerator)
    {
        $this->welcomeMessageGenerator = $welcomeMessageGenerator;
    }

    public function welcome($username)
    {
        $result = $this->welcomeMessageGenerator->getWelcomeMessage($username);
        return new Response($result);
    }

    public static function create(ContainerInterface $container)
    {
        $welcomeMsgGen =  $container->get('user_greetings.welcome_message_generator');
        return new static($welcomeMsgGen);
    }
}
