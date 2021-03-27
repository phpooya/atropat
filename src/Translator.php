<?php

namespace phpooya\atropat;

use phpooya\atropat\packages\PackageInterface;

/**
 * Class Translator
 * @package pooyae\atropat
 *
 */
class Translator
{
    /** @var PackageInterface */
    private $package;

    public function __construct(PackageInterface $to)
    {
        $this->package = $to;
    }

    public function translate($str)
    {
        $str = strtr($str, $this->package->spaces());
        $str = preg_replace('/\s+/', ' ', trim($str));
        $words = explode(' ', $str);

        $words = array_map(function ($word) {

            // Begin with
            foreach ($this->package->beginWith() as $chr => $to) {
                $regex = "/^$chr(.+)/";
                if (preg_match($regex, $word)) {
                    $word = preg_replace($regex, $to . '$1', $word);
                    continue;
                }
            }

            // end with
            foreach ($this->package->endWith() as $chr => $to) {
                $regex = "/(.+)$chr$/";
                if (preg_match($regex, $word)) {
                    $word = preg_replace($regex, '$1' . $to, $word);
                    continue;
                }
            }

            // Single Replace
            return strtr($word, $this->package->chars());

        }, $words);

        return preg_replace($this->package->keep(), '', implode(' ', $words));
    }
}