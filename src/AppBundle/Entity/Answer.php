<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 2018/7/23
 * Time: 下午4:22
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnswerRepository")
 * @ORM\Table(name="answer")
 */
class Answer
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
    private $respondent_no;

    /**
     * @ORM\Column(type="string",length=30)
     */
    private $city;

    /**
     * @ORM\Column(type="text")
     */
    private $answer;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set projectId.
     *
     * @param int $projectId
     *
     * @return Answer
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

    /**
     * Set respondentNo.
     *
     * @param string $respondentNo
     *
     * @return Answer
     */
    public function setRespondentNo($respondentNo)
    {
        $this->respondent_no = $respondentNo;

        return $this;
    }

    /**
     * Get respondentNo.
     *
     * @return string
     */
    public function getRespondentNo()
    {
        return $this->respondent_no;
    }

    /**
     * Set city.
     *
     * @param string $city
     *
     * @return Answer
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set answer.
     *
     * @param string $answer
     *
     * @return Answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer.
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}
