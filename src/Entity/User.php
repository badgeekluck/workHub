<?php
/**
 * Created by PhpStorm.
 * User: samet.yilmaz
 * Date: 15.02.2020
 * Time: 23:41
 */

namespace WorkHub\Entity;


use FOS\UserBundle\Model\User as FOSUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends FOSUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
