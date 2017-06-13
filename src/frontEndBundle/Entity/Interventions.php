<?php

namespace frontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interventions
 *
 * @ORM\Table(name="interventions")
 * @ORM\Entity(repositoryClass="frontEndBundle\Repository\InterventionsRepository")
 */
class Interventions
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text")
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="cares", type="text")
     */
    private $cares;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="text")
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Interventions
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return Interventions
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set cares
     *
     * @param string $cares
     *
     * @return Interventions
     */
    public function setCares($cares)
    {
        $this->cares = $cares;

        return $this;
    }

    /**
     * Get cares
     *
     * @return string
     */
    public function getCares()
    {
        return $this->cares;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Interventions
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

