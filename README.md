# laravel-deployer
Laravel integration for [deployer](https://github.com/jurios/deployer)

Please, refer to the [deployer's readme](https://github.com/jurios/deployer) in order to
get more information and documentation.

## 1 - Disclaimer
Deployer is an unattended script. However, in order to let you check the changes which Deployer is going to do, it will
print the change list and wait 15 seconds before start the process. If you see something unexpected, close the process.

What's more, Deployer can be launched with a `simulated mode` where it simulates the deployment process (no changes are 
done in production) in order to let you check the files which are going to be modified/added/removed.

Please, consider fill an issue if you see a bug or an unexpected behaviour. That would be really useful
to make Deployer better.


## 2 - Installation
First, add the `laravel-deployer` dependency to your `laravel` project:

```
composer require kodilab/laravel-deployer
```

Then, publish de `config` file with:

```
php artisan vendor:publish --provider="Kodilab\LaravelDeployer\DeployerProvider"
```

This command will add a file in `config/deployer.php`. This configuration is loaded by deployer
in the deployment process. The file contains comments of each parameter in order to adapt `deployer` to your needs. 
Take a look!

## 3 - Start a deploy
Once everything is set up, you can start a deployment process with this `artisan` command:

```
php artisan deployer:deploy
```

As part of the deployment process, `deployer` tries to get the 
[BUILD file](https://github.com/jurios/deployer#21---build-file) from the production environment
using the communication protocol defined in the `config/deployer.php`. However, you can specify
the production commit SHA reference passing it as a argument:

```
php artisan deployer:deploy --prod-commit=COMMIT_SHA
```
 
