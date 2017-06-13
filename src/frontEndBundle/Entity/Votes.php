<?php

namespace frontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votes
 *
 * @ORM\Table(name="votes")
 * @ORM\Entity(repositoryClass="frontEndBundle\Repository\VotesRepository")
 */
class Votes
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
     * @ORM\Column(name="voting", type="string", length=255)
     */
    private $voting;

    /**
     * @var string
     *
     * @ORM\Column(name="votingFor", type="string", length=255)
     */
    private $votingFor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set voting
     *
     * @param string $voting
     *
     * @return Votes
     */
    public function setVoting($voting)
    {
        $this->voting = $voting;

        return $this;
    }

    /**
     * Get voting
     *
     * @return string
     */
    public function getVoting()
    {
        return $this->voting;
    }

    /**
     * Set votingFor
     *
     * @param string $votingFor
     *
     * @return Votes
     */
    public function setVotingFor($votingFor)
    {
        $this->votingFor = $votingFor;

        return $this;
    }

    /**
     * Get votingFor
     *
     * @return string
     */
    public function getVotingFor()
    {
        return $this->votingFor;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Votes
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
}

