# Fa-GD
This Library forked from [PersianRender](https://github.com/mahmoud-eskandari/PersianRender)
And Fork again from [patriotblog](https://github.com/patriotblog/fa-gd)

# Installation

## Using Composer

You can install this package using [composer](https://getcomposer.org). Add this package to your `composer.json`:  

```
"require": {
	"gladx/fa-gd": "dev-master"
}
```

# manual

```

 \FaGD\PPersianRender::render('کتابخانه ی رندر GD image در php');

```

using in the Gd image
``` php
<?php
header('Content-Type: image/jpeg');
$width = 1280;
$height = 400;
$canvas = imagecreate($width, $height);

$black = imagecolorallocate($canvas, 0, 0, 0);
$font = './font-name.ttf';

$text  = \FaGD\PPersianRender::render('فارسی',true); //Reversed text for GD
imagettftext($canvas, 12, 0, 200, 200, $black, $font, "convert :" . $text);

imagejpeg($canvas);
// Clear Memory
imagedestroy($canvas);

```
#Test

phpunit
