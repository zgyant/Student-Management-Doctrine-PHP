<?php
/**
 * @Entity @Table(name="student")
 * @Entity(repositoryClass="StudentRepository")
 **/
class Student
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    private $student_id;

    /**
     * @Column(type="integer")
     * @var int
     */
    private $card_num;

    /**
     * @return int
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param int $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return int
     */
    public function getCardNum()
    {
        return $this->card_num;
    }

    /**
     * @param int $card_num
     */
    public function setCardNum($card_num)
    {
        $this->card_num = $card_num;
    }







}