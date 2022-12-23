## Calculation BMI

Class package responsible for performing the BMI calculation


##### Instalation

Run:
```bash
composer require guilherme/bmi
```

##### Usage 

```php
<?php

use Guilherme\IMC;

require __DIR__. '/vendor/autoload.php';

$imc = new IMC;

$imc->setWeight(74);
$imc->setHeight(1.75);
$imc->calcImc();

$imc->getResult();

var_dump($imc);
```