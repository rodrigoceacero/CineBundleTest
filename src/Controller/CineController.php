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

    #[Route('/cine/section1', name:'cine_section1')]
   public function cineSection1() : Response
   {
       return $this->render('Cine/section1.html.twig');
   }
  
   #[Route('/cine/section2', name:'cine_section2')]
   public function cineSection2() : Response
   {
       return $this->render('Cine/section2.html.twig');
   }

   #[Route('/cine/section3', name:'cine_section3')]
   public function cineSection3() : Response
   {
       return $this->render('Cine/section3.html.twig');
   }

}