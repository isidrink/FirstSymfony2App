<?php

namespace eCrowd\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $locale = $this->getRequest()->getLocale();
        $em=$this->getDoctrine()->getManager();
        //$max=count($em->createQuery('SELECT p FROM eCrowdMainBundle:Contract p WHERE p.is_active>0 AND p.locale='.$locale.' AND p.type=general_conditions'));

        $contract=$em->createQuery('SELECT p FROM eCrowdMainBundle:Contract p 
                                   WHERE p.is_active>0 AND p.locale= :locale AND p.type=:type
                                   ORDER BY p.version DESC')
                  ->setParameter('locale',$locale)
                  ->setParameter('type','protection_datos')
                  ->setMaxResults(1)
                  ->getSingleResult();
          //        $repository=$this->getDoctrine()
  //              ->getRepository('eCrowdMainBundle:Contract');
  //      $contracts=$repository->findBy(
  //              array('type'=>'general_conditions', 
  //                    'locale'=> $locale)
  //      );
        
        
        return $this->render('eCrowdMainBundle:Default:indexnew.html.twig',array('contract'=>$contract));
    }
    
 public function clientAction()
    {
        return $this->render('eCrowdMainBundle:Default:indexclient.html.twig');
    }
}
