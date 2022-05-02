<?php

require "views/layouts/navigation_site.php";

require_once "controllers/SiteController.php";

$site = new  SiteController();

$site->site = 'site';

require $site->actionViews();


