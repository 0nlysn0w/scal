<?php

namespace Mini\Controller;

use Mini\Model\Member;

class MembersController
{
    public function index()
    {
    	$Member = new Member();
    	$members = $Member->getAllMembers();

        require APP . 'view/_templates/header.php';
        require APP . 'view/members/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addMember()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_member"])) {
            // Instance new Model (Song)
            $Member = new Member();
            // do addMember() in model/model.php
            $Member->addMember($_POST["name"], $_POST["sex"],  $_POST["group"]);
        }

        // where to go after Member has been added
        header('location: ' . URL . 'members');
    }

}
