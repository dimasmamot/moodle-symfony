<?php
	
	// src/AppBundle/Admin/PaketSoalAdmin.php
	namespace AppBundle\Admin;

	use Sonata\AdminBundle\Admin\AbstractAdmin;
	use Sonata\AdminBundle\DataGrid\ListMapper;
	use Sonata\AdminBundle\DataGrid\DatagridMapper;
	use Sonata\AdminBundle\Form\FormMapper;

	/**
	* 
	*/
	class PaketSoalAdmin extends AbstractAdmin	{
		
		protected function configureFormFields(FormMapper $formMapper){
			$formMapper->add('namaPaketSoal', 'text');
		}

		protected function configureDatagridFilters(DatagridMapper $datagridMapper){
			$datagridMapper->add('namaPaketSoal');
		}

		protected function configureListFields(ListMapper $listMapper){
			$listMapper->addIdentifier('namaPaketSoal');
		}
	}

?>