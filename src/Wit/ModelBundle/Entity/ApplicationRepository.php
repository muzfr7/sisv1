<?php

namespace Wit\ModelBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ApplicationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ApplicationRepository extends EntityRepository
{
	// public function findAll()
	// {
	// 	return $this->findBy(array(), array('id' => 'DESC'));
	// }

	// public function findAllActive()
	// {
	// 	return $this->getEntityManager()->createQuery('SELECT a FROM ModelBundle:Albumphoto a WHERE a.status=1 ORDER BY a.id DESC')->getResult();
	// }

	public function getActiveApplicationsList(){
		return null;
	}
}
