<?php

namespace Mysite\PageTypes;


use Mysite\Controllers\SitemapPageController;
use Page;

class SitemapPage extends Page
{
    private static $table_name = 'SitemapPage';

    public function getControllerName()
    {
        return SitemapPageController::class;
    }
}