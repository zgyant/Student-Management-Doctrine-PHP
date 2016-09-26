<?php
/**
 * @Entity @Table(name="privilage")
 * @Entity(repositoryClass="privilegerepository")
 **/
 class Privilege
 {
     /**
     *@ID
      * @Column(type="integer")
      * @GeneratedValue
      * @var int
      */
     private $pid;
  /**
   *
   * @Column(type="integer",unique=true)
   * @GeneratedValue
   * @var int
   */
  private $id;
  /**

   * @Column(type="boolean")
   * @GeneratedValue
   * @var boolean
   */
  private $adddetail;
  /**

   * @Column(type="boolean")
   * @GeneratedValue
   * @var boolean
   */
  private $updatedetail;
  /**

   * @Column(type="boolean")
   * @GeneratedValue
   * @var boolean
   */
  private $deletedetail;

     /**
      * @return int
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param int $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * @return boolean
      */
     public function isAdddetail()
     {
         return $this->adddetail;
     }

     /**
      * @param boolean $adddetail
      */
     public function setAdddetail($adddetail)
     {
         $this->adddetail = $adddetail;
     }

     /**
      * @return boolean
      */
     public function isUpdatedetail()
     {
         return $this->updatedetail;
     }

     /**
      * @param boolean $updatedetail
      */
     public function setUpdatedetail($updatedetail)
     {
         $this->updatedetail = $updatedetail;
     }

     /**
      * @return boolean
      */
     public function isDeletedetail()
     {
         return $this->deletedetail;
     }

     /**
      * @param boolean $deletedetail
      */
     public function setDeletedetail($deletedetail)
     {
         $this->deletedetail = $deletedetail;
     }





 }