<?php
/**
 * @Entity @Table(name="user")
 * @Entity(repositoryClass="UserRepository")
 **/

class User {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="string")
     * @var string
     */
    private $username;

    /**
     * @Column(type="string")
     * @var string
     */
    private $password;

    /**
     * @Column(type="string")
     * @var string
     */

    private $usertype;

    /**
     * @Column(type="string")
     * @var string
     */

    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * @param string $usertype
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;
    }






}