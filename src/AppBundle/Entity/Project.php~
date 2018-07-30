<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2018/7/23
 * Time: 下午4:15
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 * @ORM\Table(name="project")
 */
class Project
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
     * @ORM\Column(type="string",length=20)
     */
    private $name;

    /**
     * @ORM\Column(type="integer",options={"default":0})
     */
    private $del = 0;

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
     *
     * @return Project
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
     * Set del.
     *
     * @param int $del
     *
     * @return Project
     */
    public function setDel($del)
    {
        $this->del = $del;

        return $this;
    }

    /**
     * Get del.
     *
     * @return int
     */
    public function getDel()
    {
        return $this->del;
    }
}
