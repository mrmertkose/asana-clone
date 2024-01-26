<?php

namespace App\Interfaces;

interface SectionRepositoryInterface
{
    public function getAllSections();
    public function updatePosition(array $arrayData);

}
