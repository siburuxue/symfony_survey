<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2018/7/23
 * Time: 下午5:28
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Relation
 * 
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RelationRepository")
 * @ORM\Table(name="relation")
 *
 */
class Relation
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
     * @ORM\Column(type="integer")
     */
    private $car_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $config_id;

    /**
     * @ORM\Column(type="string",length=30)
     */
    private $val;

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
     * Set carId
     *
     * @param integer $carId
     *
     * @return Relation
     */
    public function setCarId($carId)
    {
        $this->car_id = $carId;

        return $this;
    }

    /**
     * Get carId
     *
     * @return integer
     */
    public function getCarId()
    {
        return $this->car_id;
    }

    /**
     * Set configId
     *
     * @param integer $configId
     *
     * @return Relation
     */
    public function setConfigId($configId)
    {
        $this->config_id = $configId;

        return $this;
    }

    /**
     * Get configId
     *
     * @return integer
     */
    public function getConfigId()
    {
        return $this->config_id;
    }

    /**
     * Set val
     *
     * @param string $val
     *
     * @return Relation
     */
    public function setVal($val)
    {
        $this->val = $val;

        return $this;
    }

    /**
     * Get val
     *
     * @return string
     */
    public function getVal()
    {
        return $this->val;
    }
}
