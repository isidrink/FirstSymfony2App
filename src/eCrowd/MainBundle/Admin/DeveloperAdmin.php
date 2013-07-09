<?php // src/eCrowd/MainBUndle/Admin/DeveloperAdmin.php
 
namespace eCrowd\MainBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
 
class DeveloperAdmin extends Admin
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
                ->add('name', 'text', array('required' => true))
                ->add('NIF', 'text', array('required' => true))
                ->add('website', 'url', array('required' => false))
                ->add('logo', 'text', array('required' => false))
            ->end()
            ->with('General Contactperson')
                ->add('contactperson_firstname', 'text', array('required' => true))
                ->add('contactperson_lastname', 'text', array('required' => true))
                ->add('contactperson_telefone_fixed', 'text', array('required' => true))
                ->add('contactperson_telefone_mobile', 'text', array('required' => true))
                ->add('contactperson_mail', 'text', array('required' => true))
            ->end() 
                ->with('Fiscal Contactperson')
                ->add('fiscalcontactperson_firstname', 'text', array('required' => false))
                ->add('fiscalcontactperson_lastname', 'text', array('required' => false))
                ->add('fiscalcontactperson_telefone_fixed', 'text', array('required' => false))
                ->add('fiscalcontactperson_telefone_mobile', 'text', array('required' => false))
                ->add('fiscalcontactperson_mail', 'text', array('required' => false))
            ->end()
                ->with('Address')
                ->add('address', 'text', array('required' => true))
                ->add('zip', 'text', array('required' => true))
                ->add('city', 'text', array('required' => true))
                ->add('province', 'text', array('required' => true))
                ->add('country', 'text', array('required' => true))
            ->end()
        ;

        $formMapper
            ->with('Security')
                ->add('token', null, array('required' => false))
            ->end()
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('NIF')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->addIdentifier('NIF')
        ;
    }
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
      $showMapper
            ->with('General')
                ->add('name')
                ->add('NIF')
                ->add('website')
                ->add('logo')
            ->end()
            ->with('General Contactperson')
                ->add('contactperson_firstame')
                ->add('contactperson_lastname')
                ->add('contactperson_telephone_fixed')
                ->add('contactperson_telephone_mobile')
                ->add('contactperson_mail')
            ->end()    
           ->with('Fiscal Contactperson')
                ->add('fiscalcontactperson_firstame')
                ->add('fiscalcontactperson_lastname')
                ->add('fiscalcontactperson_telephone_fixed')
                ->add('fiscalcontactperson_telephone_mobile')
                ->add('fiscalcontactperson_mail:')
            ->end()
            ->with('Address')
                ->add('address')
                ->add('zip')
                ->add('city')
                ->add('province')
                ->add('country')
            ->end()
            ->with('Security')
                ->add('token')
                ->add('twoStepVerificationCode')
            ->end()
        ;
    }
}