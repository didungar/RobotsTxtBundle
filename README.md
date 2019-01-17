# RobotTxtBundle

## Installation via composer :

    composer require didungar/RobotsTxtBundle

## Remove old version :

    rm web/robots.txt


## Add to routing.yml :

did_ungar_robot_txt:
    resource: "@DidUngarRobotsTxtBundle/Controller/"
    type:     annotation
    prefix:   /

## Add to AppKernel.php
Pour SF <=3

    new DidUngar\RobotsTxtBundle\DidUngarRobotsTxtBundle(),

Pour SF 4

    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],

## Change environement default allow ( in default, allow is only for PROD )
    robots_allow
