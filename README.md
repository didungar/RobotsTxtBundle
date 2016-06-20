# RobotTxtBundle

# Remove old version :
rm web/robots.txt


# Add to routing.yml :

did_ungar_robot_txt:
    resource: "@DidUngarRobotsTxtBundle/Controller/"
    type:     annotation
    prefix:   /
