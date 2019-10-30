<?php

namespace App\Controller;

use App\Model\MonsterManager;

class MonsterController extends AbstractController
{
    public function index()
    {
        $monsterManager = new MonsterManager();
        $monsters       = $monsterManager->selectAll();
        $monsters2 = array_reverse($monsters['monsters']);
        return $this->twig->render('Monster/show.html.twig', ['monsters' => $monsters2]);
    }

}