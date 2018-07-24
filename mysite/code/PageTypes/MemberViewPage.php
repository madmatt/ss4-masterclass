<?php

namespace Mysite\PageTypes;

use Page;

class MemberViewPage extends Page
{
    private static $table_name = 'MemberViewPage';

    public function getControllerName()
    {
        return MemberViewPageController::class;
    }
}