<?php

namespace App\ApiRessource;

use ApiPlatform\Metadata\Put;
use App\State\CatProvider;

#[Put(
    provider: CatProvider::class
)]
class Cat
{
    public int $id;
    public string $name;
    public int $age;    
}
