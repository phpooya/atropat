<?php

namespace pooyae\atropat\packages;

class EN implements PackageInterface
{
    public function chars()
    {
        return [
            "عو" => "uo",
            "مو" => "moo",

            "آ" => "a",   "ا" => "a",   "ب" => "b",   "پ" => "p",   "ت" => "t",   "ث" => "s",   "ج" => "j",
            "چ" => "ch",  "ح" => "h",   "خ" => "kh",  "د" => "d",   "ذ" => "z",   "ر" => "r",   "ز" => "z",
            "ژ" => "zh",  "س" => "s",   "ش" => "sh",  "ص" => "s",   "ض" => "z",   "ط" => "t",   "ظ" => "z",
            "ع" => "e",   "غ" => "gh",  "ف" => "f",   "ق" => "gh",  "ک" => "k",   "ك" => "k",   "گ" => "g",
            "ل" => "l",   "م" => "m",   "ن" => "n",   "‌ن" => "n",   "و" => "o",   "ه" => "h",   "ی" => "i",
            "ئ" => "i",   "ي" => "i",   "ى" => "i",
        ];
    }

    public function endWith()
    {
        return [
            "مه" => "meh",
            "یم" => "yam",
            "ه"  => "eh",
        ];
    }

    public function beginWith()
    {
        return [
            'ر'  => "ra",
            'ز'  => "za",
            'مه' => "meh",
            'مح' => "moh",
            'ح'  => "ha",
            'م'  => "ma",
            'و'  => "va",
            'عل' => "al",
            'عب' => "ab",
            'عس' => "as",
            'وا' => "va",
            'ی'  => "ya",
        ];
    }

    public function spaces()
    {
        return [
            "-"   => " ",
            "/"   => " ",
            "."   => " ",
            "،"   => " ",
            "("   => " ",
            ")"   => " ",
            "‍" => " ",
        ];
    }

    public function keep()
    {
        return '/[^a-zA-Z\s]/';
    }
}