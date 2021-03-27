# atropat
Attropat is an original persian name. this library is a persian name translator.


## installation
    composer require phpooya/atropat
    
## usage
```php
use phpooya\atropat\Translator;
use phpooya\atropat\packages\EN;
$t = new Translator(new En);
$t->translate('داریوش'); //dariush
```

## thanks
atropat implements a translating algorithm based on the [jahanshiri.ir](https://www.jahanshiri.ir/fa/en/persian-alphabet) website.

![vowels](https://github.com/phpooya/atropat/blob/master/doc/img1.PNG?raw=true)

## contribute
if you want to extend a new language feel free to make a pull request.
