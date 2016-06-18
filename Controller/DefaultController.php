<?php

namespace DidUngar\RobotsTxtBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * Displays robots.txt
     * @Route("/robots.txt")
     */
    public function robotsTxtAction()
    {
	if ( $this->container->hasParameter('robots_allow') ) {
		// For spécifique rules
		$bRobotsAllow = $this->container->getParameter('robots_allow');
	} else {
		// For all other user
		$bRobotsAllow = 'prod' == $this->container->getParameter('kernel.environment');
	}
	// Display :
        $content = $this->container->get('templating')->render('DidUngarRobotsTxtBundle:Default:robots.txt.twig', [
            'robots_allow' => $bRobotsAllow
        ]);
        return new Response($content, 200, [
            'Content-Type' => 'text/plain'
        ]);
    }
}
