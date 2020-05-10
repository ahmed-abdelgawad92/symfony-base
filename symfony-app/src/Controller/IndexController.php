<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
   /**
    *  @Route("/route")
    */
   public function number()
   {
      $number = random_int(0, 100);
      
      return $this->render('base.html.twig');
   }
}
