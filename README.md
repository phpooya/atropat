# atropat
Attropat is an original persian name. this library is a persian name translator


## installation
    composer require phpooya/atropat
    
## usage
    use phpooya\atropat\Translator;
    use phpooya\atropat\packages\EN;
    $t = new Translator(new En);
    $t->translate('داریوش') //dariush
