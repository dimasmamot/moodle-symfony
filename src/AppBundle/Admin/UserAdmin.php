<?php
/**
 * Created by IntelliJ IDEA.
 * User: kana
 * Date: 17/12/2017
 * Time: 12:47
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id_role_pk', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblRole',
                'property' => 'role'
            ))
            ->add('dateRegistration', 'text')
            ->add('dateLastLogon', 'text')
            ->add('fisrtName', 'text')
            ->add('lastName', 'text')
            ->add('username', 'text')
            ->add('password', 'text')
            ->add('email', 'text')
            /*->add('paket_soal', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\paket_soal',
                'property' => 'namaPaketSoal',
            ))*/
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // $datagridMapper->add('idUserPk');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('username');
    }

}