<?php
/**
 * @Entity @Table(name="student_detail")
 * @Entity(repositoryClass="StudentDetailRepository")
 **/
class StudentDetail{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */

    private $card_num;

    /**
     * @Column(type="string")
     * @var string
     */
    private $student_name;

    /**

     * @Column(type="string")
     * @var string
     */
    private $address;
    /**

     * @Column(type="string")
     * @var string
     */
    private $contact_num;
    /**

     * @Column(type="string")
     * @var string
     */
    private $level;
    /**

     * @Column(type="text")
     * @var text
     */
    private $details;
    /**

     * @Column(type="boolean")
     * @var boolean
     */
    private $activity;

    /**
     * @return string
     */
    public function getStudentName()
    {
        return $this->student_name;
    }

    /**
     * @param string $student_name
     */
    public function setStudentName($student_name)
    {
        $this->student_name = $student_name;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getContactNum()
    {
        return $this->contact_num;
    }

    /**
     * @param string $contact_num
     */
    public function setContactNum($contact_num)
    {
        $this->contact_num = $contact_num;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return text
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param text $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return boolean
     */
    public function isActivity()
    {
        return $this->activity;
    }

    /**
     * @param boolean $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
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