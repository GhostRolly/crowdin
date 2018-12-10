<?php
/**
 * Created by PhpStorm.
 * User: Aziz Hamideche
 * Date: 29/11/2018
 * Time: 11:29
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Crowdin extends AbstractController
{
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
            'home' => 'active'
        ]);
    }
}