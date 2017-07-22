<?php
/**
 * Created by PhpStorm.
 * User: isaacearl
 * Date: 7/22/17
 * Time: 3:02 AM
 */

namespace App\Entities\Traits;


use App\Entities\User;
use EntityManager;

trait UsesPasswordGrant
{

    /**
     * @param string $userIdentifier
     * @return User
     */
    public function findForPassport($userIdentifier)
    {
        $userRepository = EntityManager::getRepository(get_class($this));
        return $userRepository->findOneByEmail($userIdentifier);
    }

}