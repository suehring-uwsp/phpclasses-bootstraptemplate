<?php

require_once("BootstrapTemplate.php");

$page = new BootstrapTemplate("My Page");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Some page-specific HTML goes here</h1>\n";
print $page->getBottomSection();

