<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2018/7/23
 * Time: 下午4:26
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 * @ORM\Table(name="car")
 */
class Car
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
    private $brand_id;

    /**
     * @ORM\Column(type="string",length=300,options={"default"=""})
     */
    private $img = '';

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
     * Set brandId
     *
     * @param integer $brandId
     *
     * @return Car
     */
    public function setBrandId($brandId)
    {
        $this->brand_id = $brandId;

        return $this;
    }

    /**
     * Get brandId
     *
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * Set img.
     *
     * @param string $img
     *
     * @return Car
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img.
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }
}
