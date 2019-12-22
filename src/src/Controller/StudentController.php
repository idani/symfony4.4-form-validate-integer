<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index()
    {
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student);

        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
            'form' => $form->createView(),
        ]);
    }
}
