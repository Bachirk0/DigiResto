<?php

namespace App\DataPersister;


use DateTime;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;


class ProduitDataPersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $userPasswordEncoder;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    public function supports($data, array $context = []): bool
    {
        return $data instanceof Produit;
    }
    public function persist($data, array $context = [])
    {
       
       
        $data->setCreatedAt(new DateTime());
        $this->entityManager->persist($data);
        $this->entityManager->flush();
    }
    public function remove($data, array $context = [])
    {
        $this->entityManager->remove($data);
        $this->entityManager->flush();
    }

}