<?php

class SiteController
{
    public $site;

    public function actionViews (): string
    {
        $this->site = "views/site/" . $this->site . ".php";
        return $this->site;
    }

    public function actionLayouts (): string
    {
        $this->site = "views/site/" . $this->site . ".php";
        return $this->site;
    }
}
