<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\ContactType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/t_accidente", name="Tipo Accidente")
     */
    public function tipo_accidente()
    {
        return $this->render('default/t_accidente.html.twig');
    }

    /**
     * @Route("/a_provincia", name="Accidente Provincia")
     */
    public function accidente_provincia()
    {
        return $this->render('default/a_provincia.html.twig');
    }

    /**
     * @Route("/a_comunidad", name="Accidente Comunidad")
     */
    public function accidente_comunidad()
    {
        return $this->render('default/a_comunidad.html.twig');
    }
}
