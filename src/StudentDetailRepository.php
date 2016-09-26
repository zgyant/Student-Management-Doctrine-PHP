<?php
/**
 * Created by PhpStorm.
 * User: Jayant
 * Date: 8/13/2016
 * Time: 9:12 PM
 */

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use	Doctrine\ORM\Query;
class StudentDetailRepository extends EntityRepository
{
//    public function getActiveStudent()
//    {
//        $dql = 'SELECT COUNT(`card_num`) FROM student_detail';
//        $query = $this->getEntityManager()->createQuery($dql);
//        return $query->getResult();
//    }
//
////    public function getInActiveStudent()
////    {
////        $dql = 'SELECT COUNT(`card_num`) FROM student_detail WHERE `activity`=0';
////        $query = $this->getEntityManager()->createQuery($dql);
////        return $query->getResult();
////    }

}