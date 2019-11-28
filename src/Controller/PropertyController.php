<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Property;
use App\Entity\Contact;
use App\Repository\PropertyRepository;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\PropertyType;
use App\Form\ContactType;
use Symfony\Component\Translation\TranslatorInterface;
use App\Notification\ContactNotification;


class PropertyController extends AbstractController{

    private $repository;

    public function __construct(Environment $twig, PropertyRepository $repository,ObjectManager $em){
        $this->twig = $twig;
        $this->repository = $repository;
        $this->em = $em;
    }

    public function index(Request $request): Response{

        /*$em = $this->getDoctrine()->getManager();

        $property = new Property();
        $property->setTitle('Mon Bien')
                ->setPrice(20000)
                ->setRooms(4)
                ->setBedrooms(1)
                ->setDescription('un bel appartement')
                ->setSurface(43)
                ->setFloor(4)
                ->setHeat(1)
                ->setSold(false)
                ->setCity('Chantilly')
                ->setAddress('33 rue du connétable')
                ->setPostalCode('60500');

        $em->persist($property);
        $em->flush();*/

        
        return new Response($this->twig->render('pages/prop.html.twig',['onglets_menu' => 'prop']));
    }

    public function show_product($id,Request $request, ContactNotification $contactNotification): Response{

        $prop = $this->repository->find($id);
        
        $contact = new Contact();
        $contact->setProperty($prop);
        $form = $this->createForm(ContactType::class,$contact);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){

            $contactNotification->notify($contact);
            $this->addFlash('success','email bien envoyé');
            return $this->redirectToRoute('/show'.$id);
        }

        
        return new Response($this->twig->render('pages/show.html.twig',
        [
            'onglets_menu' => 'prop', 
            'property' => $prop,
            'form' => $form->createView()
        ]));
    }

}