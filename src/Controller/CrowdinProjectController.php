<?php

namespace App\Controller;

use App\Entity\CrowdinProject;
use App\Form\CrowdinProjectType;
use App\Repository\CrowdinProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/crowdin/project")
 */
class CrowdinProjectController extends AbstractController
{
    /**
     * @Route("/", name="crowdin_project_index", methods="GET")
     */
    public function index(CrowdinProjectRepository $crowdinProjectRepository): Response
    {
        return $this->render('crowdin_project/index.html.twig', ['crowdin_projects' => $crowdinProjectRepository->findAll(), 'projects' => 'active']);
    }

    /**
     * @Route("/new", name="crowdin_project_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $crowdinProject = new CrowdinProject();
        $form = $this->createForm(CrowdinProjectType::class, $crowdinProject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($crowdinProject);
            $em->flush();

            return $this->redirectToRoute('crowdin_project_index');
        }

        return $this->render('crowdin_project/new.html.twig', [
            'crowdin_project' => $crowdinProject,
            'form' => $form->createView(),
            'projects' => 'active'
        ]);
    }

    /**
     * @Route("/{id}", name="crowdin_project_show", methods="GET")
     */
    public function show(CrowdinProject $crowdinProject): Response
    {
        return $this->render('crowdin_project/show.html.twig', ['crowdin_project' => $crowdinProject, 'projects' => 'active']);
    }

    /**
     * @Route("/{id}/edit", name="crowdin_project_edit", methods="GET|POST")
     */
    public function edit(Request $request, CrowdinProject $crowdinProject): Response
    {
        $form = $this->createForm(CrowdinProjectType::class, $crowdinProject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('crowdin_project_index', ['id' => $crowdinProject->getId(), 'projects' => 'active']);
        }

        return $this->render('crowdin_project/edit.html.twig', [
            'crowdin_project' => $crowdinProject,
            'form' => $form->createView(),
            'projects' => 'active'
        ]);
    }

    /**
     * @Route("/{id}", name="crowdin_project_delete", methods="DELETE")
     */
    public function delete(Request $request, CrowdinProject $crowdinProject): Response
    {
        if ($this->isCsrfTokenValid('delete'.$crowdinProject->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($crowdinProject);
            $em->flush();
        }

        return $this->redirectToRoute('crowdin_project_index');
    }
}
