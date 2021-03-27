<?php

namespace pooyae\atropat\packages;

interface PackageInterface
{
    public function chars();
    public function beginWith();
    public function endWith();
    public function spaces();
    public function keep();
}