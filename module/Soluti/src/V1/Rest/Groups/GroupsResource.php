<?php
namespace Soluti\V1\Rest\Groups;

use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;

class GroupsResource extends DoctrineResource
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
