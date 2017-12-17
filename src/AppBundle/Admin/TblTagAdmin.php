<?php
/**
 * Created by IntelliJ IDEA.
 * User: kana
 * Date: 17/12/2017
 * Time: 18:09
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TblTagAdmin  extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        ->with('Tags', array('class' => 'col-md-9'))
        ->add('tag_name', 'text')
        ;
        // ... configure $formMapper
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        // ... configure $listMapper
        $listMapper->addIdentifier('tag_name');
    }

}