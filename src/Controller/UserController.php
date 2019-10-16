<?php
/**
 * Created by PhpStorm.
 * User: Macbookpro
 * Date: 16/10/2019
 * Time: 19:53
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/users")
     */
    public function list(){
        return new JsonResponse([
            [
                'id' => '001',
                'count' => 0
            ]
        ]);
    }
}