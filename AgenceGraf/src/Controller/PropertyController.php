<?php

namespace App\Controller;

use App\Entity\Property;
use Symfony\Component\Yaml\Dumper;
use App\Repository\PropertyRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyController extends AbstractController
{

    public function __construct(PropertyRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response {
      
        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties'
        ]);
    }

    /**
     * @Route("/biens/{slug}-{id}", name="property.show", requirements={"slug": "[a-z0-9\-]*"})
     * @return Response
     * @param Property $property
     */
    public function show(Property $property, string $slug): Response
    {        
       
        return $this->render('property/show.html.twig', [
            'property' => $property,
            'current_menu' =>'properties'
        ]);
    }
}