<?php
namespace Soluti\V1\Rest\Files;

use Soluti\Entities\Files;
use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;
use ZF\ApiProblem\ApiProblem;

class FilesResource extends DoctrineResource
{
    public function create($data)
    {
        $fileRepository = $this->getObjectManager()->getRepository(Files::class);

        $result = $fileRepository->insertFile($data);

        if ($result instanceof ApiProblem) {
            return $result;
        }

        return parent::fetch($result->getId());
    }

    public function update($id, $data)
    {
        $fileRepository = $this->getObjectManager()->getRepository(Files::class);

        $result = $fileRepository->updateFile($id, $data);

        if ($result instanceof ApiProblem) {
            return $result;
        }

        return parent::fetch($result->getId());
    }
}
