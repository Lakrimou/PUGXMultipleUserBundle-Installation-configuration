<?php

namespace Taseera\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RegistrationUserOneController extends Controller
{
    public function registerAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('Taseera\UserBundle\Entity\UserOne');
    }
}