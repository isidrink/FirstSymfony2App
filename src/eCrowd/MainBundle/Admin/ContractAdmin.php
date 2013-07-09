<?php // src/eCrowd/MainBUndle/Admin/ContractAdmin.php
 
namespace eCrowd\MainBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use ECrowd\MainBundle\Entity\Contract;
 
class ContractAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'name'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('type', 'choice', array('choices' => Contract::getTypes(), 'expanded' => true, 'required' => true))
                ->add('version', 'text', array('required' => true))
                ->add('locale', 'locale', array('required' => false))
                ->add('is_active', null, array('required' => false))
            ->end()
            ->with('Text')
                ->add('contracttext', 'text', array('required' => true))
            ->end() 
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('type')
            ->add('version')
            ->add('locale')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('type')
            ->addIdentifier('version')
            ->addIdentifier('locale')
        ;
    }
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
      $showMapper
            ->with('General')
                ->add('type', 'choice', array('choices' => Contract::getTypes(), 'expanded' => true, 'required' => true))
                ->add('version', 'text', array('required' => true))
                ->add('locale', 'locale', array('required' => false))
                ->add('is_active', null, array('required' => false))
            ->end()
            ->with('Text')
                ->add('contracttext', 'text', array('required' => true))
            ->end() 
        ;
    }
}