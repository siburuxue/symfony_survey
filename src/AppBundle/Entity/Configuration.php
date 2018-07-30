<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2018/7/23
 * Time: 下午5:24
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConfigurationRepository")
 * @ORM\Table(name="configuration")
 */
class Configuration
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
     * @ORM\Column(type="string",length=30)
     */
    private $name;

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
     * @return Configuration
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
     * Set name
     *
     * @param string $name
     *
     * @return Configuration
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
}
