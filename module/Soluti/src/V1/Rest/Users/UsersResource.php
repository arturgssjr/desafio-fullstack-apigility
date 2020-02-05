<?php
namespace Soluti\V1\Rest\Users;

use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;

class UsersResource extends DoctrineResource
{
    public function create($data)
    {
        $data->createdAt = new \DateTime();
        $data->updatedAt = new \DateTime();
        return parent::create($data);
    }

    public function update($id, $data)
    {
        $data->updatedAt = new \DateTime();
        return parent::update($id, $data);
    }
}
