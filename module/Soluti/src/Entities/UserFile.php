<?php

namespace Soluti\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFile
 *
 * @ORM\Table(name="user_file", indexes={@ORM\Index(name="user_file_user_id_foreign", columns={"user_id"}), @ORM\Index(name="user_file_file_id_foreign", columns={"file_id"})})
 * @ORM\Entity(repositoryClass="Soluti\Repositories\UserFileRepository")
 */
class UserFile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", precision=0, scale=0, nullable=false, options={"unsigned"=true}, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Files
     *
     * @ORM\ManyToOne(targetEntity="Files")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="file_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $file;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;


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
     * Set file.
     *
     * @param Files|null $file
     *
     * @return UserFile
     */
    public function setFile(Files $file = null)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file.
     *
     * @return Files|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set user.
     *
     * @param Users|null $user
     *
     * @return UserFile
     */
    public function setUser(Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return Users|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
