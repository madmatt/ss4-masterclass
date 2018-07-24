<?php

namespace Mysite\Extensions;

use Mysite\PageTypes\MemberViewPage;
use SilverStripe\Control\Controller;
use SilverStripe\ORM\DataExtension;

class MemberExtension extends DataExtension
{
    private static $db = [
        'IsVisible' => 'Boolean'
    ];

    public function ViewLink()
    {
        $page = MemberViewPage::get()->first();
        return Controller::join_links($page->Link(), 'view', $this->owner->ID);
    }

    public function DeleteLink()
    {
        $page = MemberViewPage::get()->first();
        return Controller::join_links($page->Link(), 'delete', $this->owner->ID);
    }
}