<?php

namespace Mini\Controller;

class EventsController
{
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/events/index.php';
        require APP . 'view/_templates/footer.php';

    }
}
