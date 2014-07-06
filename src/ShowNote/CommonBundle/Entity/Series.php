<?php

namespace ShowNote\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Series
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Series
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="tvrage_id", type="integer")
     */
    private $tvrageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tvdb_id", type="integer")
     */
    private $tvdbId;

    /**
     * @var integer
     *
     * @ORM\Column(name="anidb_id", type="integer")
     */
    private $anidbId;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="country", type="object")
     */
    private $country;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="status", type="object")
     */
    private $status;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="network", type="object")
     */
    private $network;

    /**
     * @var integer
     *
     * @ORM\Column(name="runtime", type="integer")
     */
    private $runtime;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Series
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set tvrageId
     *
     * @param integer $tvrageId
     * @return Series
     */
    public function setTvrageId($tvrageId)
    {
        $this->tvrageId = $tvrageId;

        return $this;
    }

    /**
     * Get tvrageId
     *
     * @return integer 
     */
    public function getTvrageId()
    {
        return $this->tvrageId;
    }

    /**
     * Set tvdbId
     *
     * @param integer $tvdbId
     * @return Series
     */
    public function setTvdbId($tvdbId)
    {
        $this->tvdbId = $tvdbId;

        return $this;
    }

    /**
     * Get tvdbId
     *
     * @return integer 
     */
    public function getTvdbId()
    {
        return $this->tvdbId;
    }

    /**
     * Set anidbId
     *
     * @param integer $anidbId
     * @return Series
     */
    public function setAnidbId($anidbId)
    {
        $this->anidbId = $anidbId;

        return $this;
    }

    /**
     * Get anidbId
     *
     * @return integer 
     */
    public function getAnidbId()
    {
        return $this->anidbId;
    }

    /**
     * Set country
     *
     * @param \stdClass $country
     * @return Series
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \stdClass 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set status
     *
     * @param \stdClass $status
     * @return Series
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \stdClass 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set network
     *
     * @param \stdClass $network
     * @return Series
     */
    public function setNetwork($network)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * Get network
     *
     * @return \stdClass 
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Set runtime
     *
     * @param integer $runtime
     * @return Series
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return integer 
     */
    public function getRuntime()
    {
        return $this->runtime;
    }
}
