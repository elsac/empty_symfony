<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\PropertyType;
use Symfony\Component\Translation\TranslatorInterface;

class AdminPropertyController extends AbstractController{

    public function __construct(Environment $twig, PropertyRepository $repository,ObjectManager $em){
        $this->twig = $twig;
        $this->repository = $repository;
        $this->em = $em;
    }

    public function index(Request $request,TranslatorInterface $translator): Response{
        $prop = $this->repository->findAll();
        //$request->setLocale('fr');
        //$request->getSession()->set('_locale', 'fr');
        //$request->setLocale($request->getSession()->get('_locale'));
        $translator->setLocale('fr');
        dump($translator->getLocale());
        dump($request->getSession());
        dump($request->getLocale());
        return new Response($this->twig->render('admin/property/index.html.twig',['onglets_menu' => 'admin', 'properties' => $prop]));
    }

    public function create(Request $request){
        $property = new Property();
        $form = $this->createForm(PropertyType::class,$property);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->em->persist($property);
            $this->em->flush();
            $this->addFlash('success','créé avec succès');
            return $this->redirectToRoute('admin');
        }
        return new Response($this->twig->render('admin/property/create.html.twig',['onglets_menu' => 'admin', 'form' => $form->createView()]));
    }

    public function edit($id,Request $request): Response{

        $prop = $this->repository->find($id);
        $form = $this->createForm(PropertyType::class,$prop);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            $this->addFlash('success','modifié avec succès');
            return $this->redirectToRoute('admin');
        }

        return new Response($this->twig->render('admin/property/edit.html.twig',['onglets_menu' => 'admin', 'form' => $form->createView()]));
    }

    public function delete(Property $property){

        $this->em->remove($property);
        $this->em->flush();
        $this->addFlash('success','supprimé avec succès');
        return $this->redirectToRoute('admin');
    }

}