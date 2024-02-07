<?php

namespace App\Interfaces;

interface ContactFactoriesInterface
{
    public function create($name, $greeting): void;

    public function saveToBase($name, $greeting): void;

    public function saveToMail($name, $greeting): void;
}
