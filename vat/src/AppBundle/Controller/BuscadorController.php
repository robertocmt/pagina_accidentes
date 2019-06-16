<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
//Usar request http fundation
use Symfony\Component\HttpFoundation\Request;


class BuscadorController extends Controller
{
	/**
     * @Route("/busqueda", name="search")
     */
	public function busqueda(Request $request){       
        //Recoger GET
        $var=$request->query->get("BusquedaProvincia");
        return $this->render('default/busqueda.html.twig', array(
            'provincia'   => $var
        ));
    }
}
