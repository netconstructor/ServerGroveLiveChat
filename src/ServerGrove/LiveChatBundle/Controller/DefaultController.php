<?php

namespace ServerGrove\LiveChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->redirect($this->generateUrl('sglc_chat_homepage'));
    }
}
