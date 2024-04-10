<?php


namespace App\CineBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CineController extends AbstractController{
    
   #[Route('/cine', name:'cine_index')]
   public function cineIndex() : Response
   {
       return $this->render('Cine/cine.html.twig');
   }

}