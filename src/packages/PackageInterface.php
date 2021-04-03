<?php

namespace phpooya\atropat\packages;

interface PackageInterface
{
    public function chars();
    public function beginWith();
    public function endWith();
    public function spaces();
    public function keep();
    public function words();
}