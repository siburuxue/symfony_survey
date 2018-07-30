<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2018/7/23
 * Time: 下午4:17
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionRepository")
 * @ORM\Table(name="question")
 */
class Question
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
    private $car_id;

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
     * @param string $carId
     *
     * @return Question
     */
    public function setCarId($carId)
    {
        $this->car_id = $carId;

        return $this;
    }

    /**
     * Get carId
     *
     * @return string
     */
    public function getCarId()
    {
        return $this->car_id;
    }

    /**
     * Set projectId.
     *
     * @param int $projectId
     *
     * @return Question
     */
    public function setProjectId($projectId)
    {
        $this->project_id = $projectId;

        return $this;
    }

    /**
     * Get projectId.
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->project_id;
    }
}
