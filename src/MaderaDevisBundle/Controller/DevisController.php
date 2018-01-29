<?php

namespace MaderaDevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use MaderaDevisBundle\Entity\Client;
use MaderaDevisBundle\Entity\Devis;

class DevisController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaderaDevisBundle:Devis:index.html.twig');
    }
    public function newAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('MaderaDevisBundle\Form\ClientType', $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->forward('MaderaDevisBundle:Devis:new2', array(
                'client' => $client,
            ));
        }

        return $this->render('devis/new.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }
    public function new2Action(Request $request, Client $client)
    {
        $devis = new Devis();
        $devis->setClient($client);
        $form = $this->createForm('MaderaDevisBundle\Form\DevisType', $devis);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('devis_show', array('id' => $devis->getId()));
        }

        return $this->render('devis/new2.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }
}
