<?php

namespace Bio\BiodataBundle\Entity;


/**
 * User
 */

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var boolean
     */
    protected $gender = false;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $birthdate;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username.
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param \DateTime $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return bool
     */
    public function isGender()
    {
        return $this->gender;
    }

    /**
     * @param bool $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender.
     *
     * @return bool
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var string
     */
    private $diseases;

    /**
     * @var string
     */
    private $medications;


    /**
     * Set age.
     *
     * @param int $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set salt.
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt.
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set diseases.
     *
     * @param string $diseases
     *
     * @return User
     */
    public function setDiseases($diseases)
    {
        $this->diseases = $diseases;

        return $this;
    }

    /**
     * Get diseases.
     *
     * @return string
     */
    public function getDiseases()
    {
        return $this->diseases;
    }

    /**
     * Set medications.
     *
     * @param string $medications
     *
     * @return User
     */
    public function setMedications($medications)
    {
        $this->medications = $medications;

        return $this;
    }

    /**
     * Get medications.
     *
     * @return string
     */
    public function getMedications()
    {
        return $this->medications;
    }
    /**
     * @var int
     */
    private $phoneNumber;


    /**
     * Set phoneNumber.
     *
     * @param int $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber.
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @var string
     */
    private $educationalAttainment;


    /**
     * Set educationalAttainment.
     *
     * @param string $educationalAttainment
     *
     * @return User
     */
    public function setEducationalAttainment($educationalAttainment)
    {
        $this->educationalAttainment = $educationalAttainment;

        return $this;
    }

    /**
     * Get educationalAttainment.
     *
     * @return string
     */
    public function getEducationalAttainment()
    {
        return $this->educationalAttainment;
    }
}
