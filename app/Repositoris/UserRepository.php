<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 25/01/16
 * Time: 16:51
 */

namespace App\Repositories;
use App\User;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository extends Repository
{
    /**
     * @return mixed
     */
    function model()
    {
        return User::class;
    }
}