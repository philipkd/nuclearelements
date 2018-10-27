<?php

$contents = file_get_contents('tumblr/source.html');

$contents = str_replace("</style>",'</style><link rel="stylesheet" href="tumblr/custom.css">', $contents);

// $contents = str_replace('<script src="http://static.tumblr.com/vr9xgox/2VWmqthak/main-min.js"></script>', '', $contents);

print $contents;

?>