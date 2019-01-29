<?php

namespace App\Controller;

use App\Form\FormUser;
use App\Entity\Task;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }


    /**
     * @Route("/form", name="myform")
     */
    public function insertObjet(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $task = $form->getData();
                dump($task);
                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($task);
                 $entityManager->flush();
        
                return $this->redirectToRoute('index');
            }

        return $this->render('index/formulaire.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/Debug", name="Debug")
     */
    public function DebugObjet(Request $request)
    {
        return $this->render('index/debug.html.twig', [
            'controller_name' => 'IndexController',
        ]);        
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function AdminObjet(Request $request)
    {
        return $this->render('index/admin.html.twig', [
            'controller_name' => 'IndexController',
        ]);        
    }

    /**
     * @Route("/AddUser", name="AddUser")
     */
    public function AddUser(Request $request)
    {
        $user = new User();
        $form = $this->createForm(FormUser::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('index/formulaire.html.twig', [
           
            'form' => $form->createView(),
        ]);
    }



}
