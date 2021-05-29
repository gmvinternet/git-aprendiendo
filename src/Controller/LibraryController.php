<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController{

    /**
     * @Route("/library/list", name="library_list")
     */
    public function list(){
        $response = new JsonResponse();
        $response->setData([
            'success' => true,
            'data'    => [
                    [
                        'id' => 1,
                        'title' => 'Rebelión en la Granja'                            
                    ],
                    [
                        'id' => 2,
                        'title' => '1984'
                    ]
            ]
        ]);
        return $response;
    }
}