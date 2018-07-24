<?php

namespace Mysite\Controllers;

use PageController;
use SilverStripe\ORM\DB;
use SilverStripe\Security\Member;
use SilverStripe\Security\Permission;

class MemberViewPageController extends PageController
{
    private static $allowed_actions = [
        'view',
        'viewsafe',
        'delete'
    ];

    public function MemberList()
    {
        return Member::get()->filter('IsVisible', true)->sort('ID ASC');
    }

    public function view()
    {
        $id = $this->getRequest()->param('ID');
        $member = DB::query('SELECT FirstName, Surname, Email from Member WHERE ID = ' . $id)->record();

        return $this->customise([
            'Member' => $member
        ]);
    }

    public function viewsafe()
    {
        $id = $this->getRequest()->param('ID');
        $member = Member::get()->byID($id);

        return $this->customise([
            'Member' => $member
        ]);
    }

    public function delete()
    {
        $id = $this->getRequest()->param('ID');
        $member = Member::get()->byID($id);

        // Member must be an admin to delete other member
        if (Permission::check('ADMIN') && $member && $member->IsVisible) {
            $member->delete();
            return $this->customise([
                'Message' => 'Member has been deleted.'
            ]);
        } else {
            return $this->customise([
                'Message' => 'You\'re not allowed to delete that member.'
            ]);
        }
    }
}