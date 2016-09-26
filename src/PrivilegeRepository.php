<?php
/**
 * Created by PhpStorm.
 * User: Jayant
 * Date: 8/13/2016
 * Time: 11:10 PM
 */
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use	Doctrine\ORM\Query;
class PrivilegeRepository extends EntityRepository
{

    public function getPriv($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('*')
            ->from('privilage', 'p')
            ->where('p.id ='.$id);
       return $qb->getQuery()->execute();

    }
}