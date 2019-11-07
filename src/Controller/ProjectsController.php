<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function project()
    {
        $projects = ['project1', 'project2','project3'];

        return $this->render('projects/index.html.twig', [
            'projects' => $projects,
        ]);
    }
}
