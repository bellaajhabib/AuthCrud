<?php
/**
 * Created by PhpStorm.
 * User: habib bellaaj
 * Date: 07/05/2016
 * Time: 23:31
 */

namespace Stocks\AchatBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *
 * Class User
 * @package Stocks\AchatBundle\Entity
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var
     */
    protected $id;

    public function __construct(){
        parent::__construct();
    }
} 