<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AccountController extends AbstractController
{

    public function accountInfo(): Response
        {
            // allow any authenticated user - we don't care if they just
            // logged in, or are logged in via a remember me cookie
            $this->$this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

            return $this->redirectToRoute('home');
        }

    public function resetPassword(): Response
        {
            // require the user to log in during *this* session
            // if they were only logged in via a remember me cookie, they
            // will be redirected to the login page
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

            return $this->redirectToRoute('home');
        }

}