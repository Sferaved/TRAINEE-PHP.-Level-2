<?php

require_once "controllers/SiteController.php";

$site = new  SiteController();

$site->site = 'site';

require $site->actionViews();


