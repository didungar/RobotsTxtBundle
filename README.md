# RobotTxtBundle

## Remove old version :
rm web/robots.txt


## Add to routing.yml :

did_ungar_robot_txt:
    resource: "@DidUngarRobotsTxtBundle/Controller/"
    type:     annotation
    prefix:   /

## Add to AppKernel.php
    new DidUngar\RobotsTxtBundle\DidUngarRobotsTxtBundle(),

## Change environement default allow ( in default, allow is only for PROD )
    robots_allow
