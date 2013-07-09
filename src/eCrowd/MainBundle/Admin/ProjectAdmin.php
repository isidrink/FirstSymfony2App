<?php // src/eCrowd/MainBUndle/Admin/ProjectAdmin.php
 
namespace eCrowd\MainBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use ECrowd\MainBundle\Entity\Project;
use ECrowd\MainBundle\Entity\Developer;
 
class ProjectAdmin extends Admin
{
     // setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'created_at'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
         $formMapper
            ->with('General')
                ->add('name', 'text', array('required' => true))
                ->add('longdescription', 'text', array('required' => true))
                ->add('shortdescription', 'text', array('required' => true))
                ->add('developer')
            ->end()     
            ->with('Location')
                ->add('address')
                ->add('zip')
                ->add('city')
                ->add('province')
                ->add('country')
            ->end()
            ->with('Investment details')
                ->add('type', 'choice', array('choices' => Project::getTypes(), 'expanded' => true))
                ->add('power')
                ->add('investment')
                ->add('mininvestment')
                ->add('yield')
                ->add('commissiondeveloper')
                ->add('commissioninvestor')
            ->end()          
            ->with('Media')
                ->add('fotos', 'sonata_media_type', array(
                    'provider' => 'sonata.media.provider.image',
                    'context'  => 'default'))
                ->add('movies')
            ->end() 
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('city')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           ->addidentifier('name')
           ->add('city')
           ->add('power')
           ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                    )
               ))
                ;
    }
 
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->with('General')
                ->add('name', 'text', array('required' => true))
                ->add('longdescription', 'text', array('required' => true))
                ->add('shortdescription', 'url', array('required' => true))
                ->add('developer')
            ->end()     
            ->with('Location')
                ->add('address')
                ->add('zip')
                ->add('city')
                ->add('province')
                ->add('country')
            ->end()
            ->with('Investment details')
                ->add('type', 'choice', array('choices' => Project::getTypes(), 'expanded' => true))
                ->add('power')
                ->add('investment')
                ->add('mininvestment')
                ->add('yield')
                ->add('commissiondeveloper')
                ->add('commissioninvestor')
            ->end()          
            ->with('Media')
                ->add('fotos')
                ->add('movies')
            ->end() 
            ->add('token')
        ;       
    }
}