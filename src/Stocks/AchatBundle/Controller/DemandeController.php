<?php

namespace Stocks\AchatBundle\Controller;

use Stocks\AchatBundle\Entity\Demande;
use Stocks\AchatBundle\Form\DemandeType;
use Stocks\AchatBundle\Form\Handler\DemandeHandler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\NotBlank;

class DemandeController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('StocksAchatBundle:Demande:index.html.twig');
    }
    /**
     * @Route("/contact",name="contact_demande")
     */
    public function contactAction(Request $request)
    { $formHandler= new DemandeHandler($this->createForm(new DemandeType(),new Demande()),$request);
        if($formHandler->process()){
       $em=$this->getDoctrine()->getManager();
        $em->persist($formHandler->getForm()->getData());
        $em->flush();
      return $this->redirect($this->generateUrl('list_demande'));
    }
        return $this->render('StocksAchatBundle:Demande:contact.html.twig', array('form'    => $formHandler->getForm()->createView()));
    }
    /**
     * @Route("/list",name="list_demande")
     */
    public function listAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StocksAchatBundle:Demande');
        $demandes=$repository->findAll();
        return $this->render('StocksAchatBundle:Demande:list.html.twig',array('demandes' => $demandes));
    }
}
