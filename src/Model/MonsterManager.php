<?php

namespace App\Model;

class MonsterManager extends AbstractApiManager
{
    const ENDPOINT = 'monsters';

    public function __construct()
    {
        parent::__construct(self::ENDPOINT);
    }
}