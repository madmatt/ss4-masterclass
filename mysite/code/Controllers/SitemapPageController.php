<?php

namespace Mysite\Controllers;

use Page;
use PageController;

class SitemapPageController extends PageController
{
    public function Pages()
    {
        sleep(10);
        return Page::get()->filter('ParentID', 0);
    }
}