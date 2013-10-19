SpamHole
========

A php script for your website to trap spambots.

This script generate random emails using random names/domains, you just have to add a hidden link to the script in your website to trap spambots.

Dont forget to exclude the script in your robot.txt like this:

User-agent: *
Disallow: /hole.php
