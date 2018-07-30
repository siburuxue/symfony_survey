<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2018/7/23
 * Time: 上午10:27
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BrandRepository")
 * @ORM\Table(name="brand")
 */
class Brand
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
    private $project_id;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $brand;

    /**
     * @ORM\Column(type="string",length=300)
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
     * Set projectId
     *
     * @param integer $projectId
     *
     * @return Brand
     */
    public function setProjectId($projectId)
    {
        $this->project_id = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return integer
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Brand
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }
}
