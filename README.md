## Commandes

Créer un projet symfony

```bash
composer create-project symfony/skeleton formation-api-platform
```

remarque: On a pas envie d'avoir twig, symfony ux, etc. Là on a le minimum pour une app web avec API.

Lancer le serveur :

```bash
symfony server:start -d
```

Installer API Platform :

```bash
composer require api
```

Si on n'est pas dans un environnement docker, on répond non en tapant `n`.

```bash
$ composer require api
./composer.json has been updated
Running composer update api-platform/api-pack
Loading composer repositories with package information
Restricting packages listed in "symfony/symfony" to "7.1.*"
Updating dependencies
Lock file operations: 62 installs, 0 updates, 0 removals
  - Locking api-platform/api-pack (v1.4.0)
  - Locking api-platform/doctrine-common (v4.0.3)
  - Locking api-platform/doctrine-orm (v4.0.3)
  - Locking api-platform/documentation (v4.0.3)
  - Locking api-platform/http-cache (v4.0.3)
  - Locking api-platform/hydra (v4.0.3)
  - Locking api-platform/json-schema (v4.0.3)
  - Locking api-platform/jsonld (v4.0.3)
  - Locking api-platform/metadata (v4.0.3)
  - Locking api-platform/openapi (v4.0.3)
  - Locking api-platform/serializer (v4.0.3)
  - Locking api-platform/state (v4.0.3)
  - Locking api-platform/symfony (v4.0.3)
  - Locking api-platform/validator (v4.0.3)
  - Locking doctrine/cache (2.2.0)
  - Locking doctrine/collections (2.2.2)
  - Locking doctrine/common (3.4.5)
  - Locking doctrine/dbal (3.9.2)
  - Locking doctrine/deprecations (1.1.3)
  - Locking doctrine/doctrine-bundle (2.13.0)
  - Locking doctrine/doctrine-migrations-bundle (3.3.1)
  - Locking doctrine/event-manager (2.0.1)
  - Locking doctrine/inflector (2.0.10)
  - Locking doctrine/instantiator (2.0.0)
  - Locking doctrine/lexer (3.0.1)
  - Locking doctrine/migrations (3.8.1)
  - Locking doctrine/orm (3.2.2)
  - Locking doctrine/persistence (3.3.3)
  - Locking doctrine/sql-formatter (1.5.0)
  - Locking nelmio/cors-bundle (2.5.0)
  - Locking phpdocumentor/reflection-common (2.2.0)
  - Locking phpdocumentor/reflection-docblock (5.4.1)
  - Locking phpdocumentor/type-resolver (1.8.2)
  - Locking phpstan/phpdoc-parser (1.32.0)
  - Locking psr/clock (1.0.0)
  - Locking psr/link (2.0.1)
  - Locking symfony/asset (v7.1.1)
  - Locking symfony/clock (v7.1.1)
  - Locking symfony/doctrine-bridge (v7.1.5)
  - Locking symfony/expression-language (v7.1.4)
  - Locking symfony/orm-pack (v2.4.1)
  - Locking symfony/password-hasher (v7.1.1)
  - Locking symfony/polyfill-uuid (v1.31.0)
  - Locking symfony/property-access (v7.1.4)
  - Locking symfony/property-info (v7.1.3)
  - Locking symfony/security-bundle (v7.1.4)
  - Locking symfony/security-core (v7.1.5)
  - Locking symfony/security-csrf (v7.1.1)
  - Locking symfony/security-http (v7.1.5)
  - Locking symfony/serializer (v7.1.5)
  - Locking symfony/serializer-pack (v1.3.0)
  - Locking symfony/stopwatch (v7.1.1)
  - Locking symfony/translation-contracts (v3.5.0)
  - Locking symfony/twig-bridge (v7.1.5)
  - Locking symfony/twig-bundle (v7.1.5)
  - Locking symfony/type-info (v7.1.5)
  - Locking symfony/uid (v7.1.5)
  - Locking symfony/validator (v7.1.5)
  - Locking symfony/web-link (v7.1.1)
  - Locking twig/twig (v3.14.0)
  - Locking webmozart/assert (1.11.0)
  - Locking willdurand/negotiation (3.1.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 62 installs, 0 updates, 0 removals
  - Downloading doctrine/dbal (3.9.2)
  - Downloading doctrine/sql-formatter (1.5.0)
  - Downloading nelmio/cors-bundle (2.5.0)
  - Downloading willdurand/negotiation (3.1.0)
  - Downloading api-platform/metadata (v4.0.3)
  - Downloading api-platform/validator (v4.0.3)
  - Downloading api-platform/state (v4.0.3)
  - Downloading api-platform/serializer (v4.0.3)
  - Downloading symfony/polyfill-uuid (v1.31.0)
  - Downloading symfony/uid (v7.1.5)
  - Downloading api-platform/json-schema (v4.0.3)
  - Downloading api-platform/openapi (v4.0.3)
  - Downloading api-platform/jsonld (v4.0.3)
  - Downloading api-platform/documentation (v4.0.3)
  - Downloading api-platform/hydra (v4.0.3)
  - Downloading api-platform/http-cache (v4.0.3)
  - Downloading api-platform/symfony (v4.0.3)
  - Downloading doctrine/common (3.4.5)
  - Downloading api-platform/doctrine-common (v4.0.3)
  - Downloading api-platform/doctrine-orm (v4.0.3)
  - Downloading api-platform/api-pack (v1.4.0)
  - Installing symfony/translation-contracts (v3.5.0): Extracting archive
  - Installing symfony/validator (v7.1.5): Extracting archive
  - Installing twig/twig (v3.14.0): Extracting archive
  - Installing symfony/twig-bridge (v7.1.5): Extracting archive
  - Installing symfony/twig-bundle (v7.1.5): Extracting archive
  - Installing symfony/serializer (v7.1.5): Extracting archive
  - Installing symfony/type-info (v7.1.5): Extracting archive
  - Installing symfony/property-info (v7.1.3): Extracting archive
  - Installing symfony/property-access (v7.1.4): Extracting archive
  - Installing phpstan/phpdoc-parser (1.32.0): Extracting archive
  - Installing webmozart/assert (1.11.0): Extracting archive
  - Installing phpdocumentor/reflection-common (2.2.0): Extracting archive
  - Installing doctrine/deprecations (1.1.3): Extracting archive
  - Installing phpdocumentor/type-resolver (1.8.2): Extracting archive
  - Installing phpdocumentor/reflection-docblock (5.4.1): Extracting archive
  - Installing symfony/serializer-pack (v1.3.0): Extracting archive
  - Installing symfony/password-hasher (v7.1.1): Extracting archive
  - Installing symfony/security-core (v7.1.5): Extracting archive
  - Installing symfony/security-http (v7.1.5): Extracting archive
  - Installing symfony/security-csrf (v7.1.1): Extracting archive
  - Installing psr/clock (1.0.0): Extracting archive
  - Installing symfony/clock (v7.1.1): Extracting archive
  - Installing symfony/security-bundle (v7.1.4): Extracting archive
  - Installing doctrine/event-manager (2.0.1): Extracting archive
  - Installing doctrine/persistence (3.3.3): Extracting archive
  - Installing doctrine/lexer (3.0.1): Extracting archive
  - Installing doctrine/instantiator (2.0.0): Extracting archive
  - Installing doctrine/inflector (2.0.10): Extracting archive
  - Installing doctrine/cache (2.2.0): Extracting archive
  - Installing doctrine/dbal (3.9.2): Extracting archive
  - Installing doctrine/collections (2.2.2): Extracting archive
  - Installing doctrine/orm (3.2.2): Extracting archive
  - Installing symfony/stopwatch (v7.1.1): Extracting archive
  - Installing doctrine/migrations (3.8.1): Extracting archive
  - Installing symfony/doctrine-bridge (v7.1.5): Extracting archive
  - Installing doctrine/sql-formatter (1.5.0): Extracting archive
  - Installing doctrine/doctrine-bundle (2.13.0): Extracting archive
  - Installing doctrine/doctrine-migrations-bundle (3.3.1): Extracting archive
  - Installing symfony/orm-pack (v2.4.1): Extracting archive
  - Installing symfony/expression-language (v7.1.4): Extracting archive
  - Installing symfony/asset (v7.1.1): Extracting archive
  - Installing nelmio/cors-bundle (2.5.0): Extracting archive
  - Installing willdurand/negotiation (3.1.0): Extracting archive
  - Installing psr/link (2.0.1): Extracting archive
  - Installing symfony/web-link (v7.1.1): Extracting archive
  - Installing api-platform/metadata (v4.0.3): Extracting archive
  - Installing api-platform/validator (v4.0.3): Extracting archive
  - Installing api-platform/state (v4.0.3): Extracting archive
  - Installing api-platform/serializer (v4.0.3): Extracting archive
  - Installing symfony/polyfill-uuid (v1.31.0): Extracting archive
  - Installing symfony/uid (v7.1.5): Extracting archive
  - Installing api-platform/json-schema (v4.0.3): Extracting archive
  - Installing api-platform/openapi (v4.0.3): Extracting archive
  - Installing api-platform/jsonld (v4.0.3): Extracting archive
  - Installing api-platform/documentation (v4.0.3): Extracting archive
  - Installing api-platform/hydra (v4.0.3): Extracting archive
  - Installing api-platform/http-cache (v4.0.3): Extracting archive
  - Installing api-platform/symfony (v4.0.3): Extracting archive
  - Installing doctrine/common (3.4.5): Extracting archive
  - Installing api-platform/doctrine-common (v4.0.3): Extracting archive
  - Installing api-platform/doctrine-orm (v4.0.3): Extracting archive
  - Installing api-platform/api-pack (v1.4.0): Extracting archive
Generating autoload files
63 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

Symfony operations: 8 recipes (8de6d56e2ec7f1aa9263d66429cbd689)
  - Configuring symfony/validator (>=7.0): From github.com/symfony/recipes:main
  - Configuring symfony/twig-bundle (>=6.4): From github.com/symfony/recipes:main
  - Configuring symfony/security-bundle (>=6.4): From github.com/symfony/recipes:main
  - Configuring doctrine/doctrine-bundle (>=2.12): From github.com/symfony/recipes:main
  -  WARNING  doctrine/doctrine-bundle (>=2.12): From github.com/symfony/recipes:main
    The recipe for this package contains some Docker configuration.

    This may create/update compose.yaml or update Dockerfile (if it exists).

    Do you want to include Docker configuration from recipes?
    [y] Yes
    [n] No
    [p] Yes permanently, never ask again for this project
    [x] No permanently, never ask again for this project
    (defaults to y): n
  - Configuring doctrine/doctrine-migrations-bundle (>=3.1): From github.com/symfony/recipes:main
  - Configuring nelmio/cors-bundle (>=1.5): From github.com/symfony/recipes:main
  - Configuring symfony/uid (>=7.0): From github.com/symfony/recipes:main
  - Configuring api-platform/symfony (>=4.0): From github.com/symfony/recipes:main
Unpacking Symfony packs
  - Unpacked api-platform/api-pack
  - Unpacked symfony/orm-pack
  - Unpacked symfony/serializer-pack
Loading composer repositories with package information
Updating dependencies
Nothing to modify in lock file
Installing dependencies from lock file (including require-dev)
Package operations: 0 installs, 0 updates, 3 removals
  - Removing symfony/serializer-pack (v1.3.0)
  - Removing symfony/orm-pack (v2.4.1)
  - Removing api-platform/api-pack (v1.4.0)
Generating autoload files
61 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

Run composer recipes at any time to see the status of your Symfony recipes.

Executing script cache:clear [OK]
Executing script assets:install public [OK]

No security vulnerability advisories found.
              
 What's next? 
              

Some files have been created and/or updated to configure your new packages.
Please review, edit and commit them: these files are yours.

 doctrine/doctrine-bundle  instructions:

  * Modify your DATABASE_URL config in .env

  * Configure the driver (postgresql) and
    server_version (16) in config/packages/doctrine.yaml

 api-platform/symfony  instructions:

  * Your API is almost ready:
    1. Create your first API resource in src/ApiResource;
    2. Go to /api to browse your API

  * Using MakerBundle? Try php bin/console make:entity --api-resource 

  * To enable the GraphQL support, run composer require api-platform/graphql,
    then browse /api/graphql.

  * Read the documentation at https://api-platform.com/docs/

No security vulnerability advisories found.
zak@strange:~/codes/formation-api-platform$ 
```

On utilise la database SQLite au lieu de PostgrSQL :

```diff
diff --git a/.env b/.env
index 3813277..bd16d83 100644
--- a/.env
+++ b/.env
@@ -23,10 +23,10 @@ APP_SECRET=e0a802ca03ea238384cf1d883cee0400
 # Format described at https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url
 # IMPORTANT: You MUST configure your server version, either here or in config/packages/doctrine.yaml
 #
-# DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
+DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
 # DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=8.0.32&charset=utf8mb4"
 # DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=10.11.2-MariaDB&charset=utf8mb4"
-DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=16&charset=utf8"
+#DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=16&charset=utf8"
 ###< doctrine/doctrine-bundle ###
 
 ###> nelmio/cors-bundle ###
```

Puis se rendre dans la page "api" en allant sur `http://127.0.0.1:8000/api`.

![alt text](./img/uri-api.png)

Installer maker bundle :

```bash
composer require --dev symfony/maker-bundle
```

Créer une entity :

```bash
$ symfony console make:entity
```

```bash
$ symfony console make:entity

 Class name of the entity to create or update (e.g. VictoriousChef):
 > Animal

 Mark this class as an API Platform resource (expose a CRUD API for it) (yes/no) [no]:
 > yes

 created: src/Entity/Animal.php
 created: src/Repository/AnimalRepository.php
 
 Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 New property name (press <return> to stop adding fields):
 > name

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Animal.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > age

 Field type (enter ? to see all types) [string]:
 > integer

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Animal.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > 


           
  Success! 
           

 Next: When you're ready, create a migration with symfony console make:migration
 
zak@strange:~/codes/formation-api-platform$ 
```

Dans la céation d'une entité on a une nouvelle question :

```bash
 Mark this class as an API Platform resource (expose a CRUD API for it) (yes/no) [no]:
```

Où on répond **yes**.

On n'oublie de générer ses migrations et de les appliquer :

```bash
# Création de la database
symfony console doctrine:database:create

# Création de la migration
symfony console make:migration

# Application de la migration
symfony console doctrine:migrations:migrate
```

Puis, on raffraichi le /api :

![alt text](./img/uri-api02.png)

De base, notre `APIRessource` possède toutes les opérations CRUD via API/Rest.

Il est possible de personnaliser ces opérations dans notre entity en utilisant `ApiPlatform\Metadata` :

```php
<?php
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
#[ApiResource(
    operations: [
        new Put(allowCreate: true),
        new GetCollection(),
    ]
)]
class Animal
{
}
```

Cela va écrasser les autres verbes http dans `/api`.

![alt text](./img/uri-api03.png.png)

> [!NOTE]
> Il est important de lire les bonnes pratiques : https://api-platform.com/docs/core/design/ .

Création de notre propre ApiResource `Cat` :

```php
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
```

Customisation des traitements avec une ressouce spécifique (PUT, GET, DELETE, etc.).
On crée dans un premier temps notre Provider :

```bash
$ symfony console make:state-provider

 Choose a class name for your state provider (e.g. AwesomeStateProvider):
 > CatProvider

 created: src/State/CatProvider.php

           
  Success! 
           

 Next: Open your new state provider class and start customizing it.
 ```

Résultat sur on retourne sur l'interface d'API Platfom ::

![Résultat dans l'interface d'api platfrom](./img/uri-api03.png)

## Autres

Il existe un repo pour jouer avec API Platform accessible pour les débutants : https://github.com/api-platform/demo .

## Remerciements

Merci à @soyuka et de @dunglas d'avoir préparé cet atelier de 2h durant le Forum PHP de 2024.
