<?php

namespace eCrowd\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectController extends Controller
{
    public function indexAction()
    {
        return $this->render('eCrowdMainBundle:Default:index.html.twig');
    }
    
    
    public function showrecentAction()
    {
      $em=$this->getDoctrine()->getManager();
      $max=count($em->createQuery('SELECT p FROM eCrowdMainBundle:Project p WHERE p.is_public>0 AND p.is_activated>0 AND p.is_ended=0'));

      $project=$em->createQuery('SELECT p FROM eCrowdMainBundle:Project p 
                                   WHERE p.is_public>0 AND p.is_activated>0 AND p.is_ended=0 AND p.id='.rand(1,$max).'
                                   ORDER BY p.id ASC')
                  ->setMaxResults(1)
                  ->getSingleResult();
      return $this->render('eCrowdMainBundle:Project:ProjectSmall.html.twig', 
    array('project'=>$project));
    }
    
}
