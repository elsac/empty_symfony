<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\Common\Persistence\ObjectManager;

class HomeController extends AbstractController{

    public function __construct(Environment $twig, PropertyRepository $repository,ObjectManager $em){
        $this->twig = $twig;
        $this->repository = $repository;
        $this->em = $em;
    }

    public function index(Request $request): Response{

        $properties = $this->repository->findLatest();
        
        dump($request->getLocale());


        return new Response($this->twig->render('pages/home.html.twig',['onglets_menu' => 'home','properties' => $properties ]));
    }

}