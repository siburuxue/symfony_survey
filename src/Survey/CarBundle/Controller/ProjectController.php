<?php

namespace Survey\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Project;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class ProjectController extends Controller
{
    public function indexAction()
    {
        return $this->render('SurveyCarBundle:Project:index.html.twig');
    }

    public function listAction(Request $request){
        $page = (int)$request->request->get('page');
        $perPage = (int)$request->request->get('perPage');
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Project');
        $db = $repository->getProjectList();
        $pagination = $this->get('knp_paginator')->paginate($db,$page,$perPage);
        return $this->render('SurveyCarBundle:Project:list.html.twig',['pagination' => $pagination]);
    }

    public function updateAction(){
        $rs = $this->getDoctrine()->getManager()->getRepository('AppBundle:Project')->updateProject();
        return new JsonResponse($rs);
    }

    public function insertAction(){
        $rs = $this->getDoctrine()->getManager()->getRepository('AppBundle:Project')->insertProject();
        return new JsonResponse($rs);
    }

    public function deleteAction(){
        $rs = $this->getDoctrine()->getManager()->getRepository('AppBundle:Project')->deleteProject();
        return new JsonResponse($rs);
    }

    public function importAction(Request $request){
        $path = $request->files->get('file')->getPathName();
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject($path);
        $rs = $this->getDoctrine()->getManager()->getRepository('AppBundle:Project')->import($phpExcelObject);
        $json = new JsonResponse($rs);
        return $json;
    }

    public function surveyAction($project_id){
        $list = $this->getDoctrine()->getManager()->getRepository('AppBundle:Question')->survey($project_id);
        $city = $this->getDoctrine()->getManager()->getRepository('AppBundle:Question')->getCities($project_id);
        return $this->render('SurveyCarBundle:Project:survey.html.twig',['list' => $list,'city' => $city,'project_id' => $project_id]);
    }

    public function saveAction(){
        $rs = $this->getDoctrine()->getManager()->getRepository('AppBundle:Question')->save();
        return new JsonResponse($rs);
    }

    public function exportAction($project_id){
        $php_excel = $this->get('phpexcel');
        $response = $this->getDoctrine()->getManager()->getRepository('AppBundle:Project')->export($project_id,$php_excel);
        return $response;
    }
}
