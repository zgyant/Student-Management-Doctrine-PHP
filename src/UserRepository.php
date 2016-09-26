<?php
//require_once "bootstrap.php";
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use	Doctrine\ORM\Query;



class UserRepository extends EntityRepository{


//    public function getUserId($username){
//            $qb = $this->getEntityManager()->createQueryBuilder();
//        $qb->select('u.id')
//            ->from('User','u')
//            ->where('username :username')
//            ->setParameter('username', $username);
//       // $query=$qb->getQuery();
//        echo $qb->getQuery()->getSql();
////        $result=$query->getSingleResult();
////        return $result;
//    }

}