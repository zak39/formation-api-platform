<?php

namespace App\State;

use App\Entity\Animal;
use App\ApiRessource\Cat;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class CatProvider implements ProviderInterface
{
    public function __construct(
        #[Autowire(service: 'api_platform.doctrine.orm.state.item_provider')]
        private ProviderInterface $inner
    )
    {
    }
    
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        // Retrieve the state from somewhere
        $animal = $this->inner->provide($operation->withClass(Animal::class), $uriVariables, $context);
        return new Cat(id: $animal->getId(), name: $animal->getName(), age: $animal->getAge());
    }
}
