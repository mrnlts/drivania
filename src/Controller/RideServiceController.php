<?php

namespace App\Controller;

use App\Entity\Crud;

use App\Form\CrudType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RideServiceController extends AbstractController
{
    #[Route('/ride_service', name: 'main')]
    public function index(): Response
    {
        return $this->render('ride_service/index.html.twig', [
            'controller_name' => 'RideServiceController',
        ]);
    }

    #[Route('/ride_service/create', name: 'create')]
    public function create(Request $request){

        $crud = new Crud();
        $form = $this->createForm(CrudType::class, $crud);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($crud);
            $em->flush();
            $this->addFlash('notification', 'Successfully submitted');
        }
        return $this->render('ride_service/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
