<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 1/02/16
 * Time: 14:00
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