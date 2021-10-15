<?php

namespace App\Controller;

use App\Entity\BlogPost;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
//        $bp = new BlogPost();
//        $bp->setTitle('Mon premier blog post')
//        ->setContent('Contenu');
//
//        $entityManager->persist($bp);
//
//        $bp = new BlogPost();
//        $bp->setTitle('Bienvenue')
//        ->setContent('Bienvenu sur mon blog');
//
//        $entityManager->persist($bp);
//        $entityManager->flush();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
