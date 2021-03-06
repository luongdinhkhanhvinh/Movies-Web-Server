<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ChannelRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChannelRepository extends EntityRepository
{
	/****
	returns the number of entity's rows
	@return int
	*/
	public function count() {
		$query = $this->createQueryBuilder('e')->select('count(e)')->getQuery();
		return $query->getSingleScalarResult();
	}
	public function countShares() {
		$query = $this->createQueryBuilder('e')->select('sum(e.shares)')->getQuery();
		return $query->getSingleScalarResult();
	}
	public function countViews() {
		$query = $this->createQueryBuilder('e')->select('sum(e.views)')->getQuery();
		return $query->getSingleScalarResult();
	}
}
