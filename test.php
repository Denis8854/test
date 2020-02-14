<?php

$parts = parse_url($_SERVER['REQUEST_URI']);
parse_str($parts['query'], $GET);

var_dump($GET['ai'] ? $GET['ai'] : 2958247);