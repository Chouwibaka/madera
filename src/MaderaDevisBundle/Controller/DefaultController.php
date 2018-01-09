<?php

namespace MaderaDevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MaderaDevisBundle\Entity\Client;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaderaDevisBundle:Default:index.html.twig');
    }
    public function newDevisAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('MaderaDevisBundle\Form\ClientType', $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('devis_show', array('id' => $client->getId()));
        }

        return $this->render('devis/new.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }
}
