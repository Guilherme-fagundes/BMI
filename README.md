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

use Guilherme\BMI;

require __DIR__. '/vendor/autoload.php';

$bmi = new BMI;

$bmi->setWeight(74);
$bmi->setHeight(1.75);
$bmi->calcImc();

$bmi->getResult();

var_dump($bmi);
```