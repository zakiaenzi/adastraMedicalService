<?php

namespace frontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="frontEndBundle\Repository\PatientRepository")
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="treatments", type="string", length=255)
     */
    private $treatments;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="glasses", type="string", length=255)
     */
    private $glasses;

    /**
     * @var string
     *
     * @ORM\Column(name="protheses", type="string", length=255)
     */
    private $protheses;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedents", type="text", nullable=true)
     */
    private $antecedents;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="text", nullable=true)
     */
    private $remarks;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Patient
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Patient
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Patient
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Patient
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set treatments
     *
     * @param string $treatments
     *
     * @return Patient
     */
    public function setTreatments($treatments)
    {
        $this->treatments = $treatments;

        return $this;
    }

    /**
     * Get treatments
     *
     * @return string
     */
    public function getTreatments()
    {
        return $this->treatments;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Patient
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set glasses
     *
     * @param string $glasses
     *
     * @return Patient
     */
    public function setGlasses($glasses)
    {
        $this->glasses = $glasses;

        return $this;
    }

    /**
     * Get glasses
     *
     * @return string
     */
    public function getGlasses()
    {
        return $this->glasses;
    }

    /**
     * Set protheses
     *
     * @param string $protheses
     *
     * @return Patient
     */
    public function setProtheses($protheses)
    {
        $this->protheses = $protheses;

        return $this;
    }

    /**
     * Get protheses
     *
     * @return string
     */
    public function getProtheses()
    {
        return $this->protheses;
    }

    /**
     * Set antecedents
     *
     * @param string $antecedents
     *
     * @return Patient
     */
    public function setAntecedents($antecedents)
    {
        $this->antecedents = $antecedents;

        return $this;
    }

    /**
     * Get antecedents
     *
     * @return string
     */
    public function getAntecedents()
    {
        return $this->antecedents;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Patient
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Patient
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
}

