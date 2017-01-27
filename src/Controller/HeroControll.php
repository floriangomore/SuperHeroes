<?php

namespace src\Controller;


class HeroControll extends Controller
{
    public function getAllAction()
    {
        echo "TEST1";die();
        $em = $this->getDoctrine();

        $heroRepo = $em->getRepository('src\Entity\Hero');
        return $this->render('hero', 'index', [
            "hero" => $heroRepo->findAll()
        ]);

    }

}
