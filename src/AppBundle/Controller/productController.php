<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class productController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function listproducts()
    {
        $products = $this->getDoctrine()->getRepository('AppBundle:Produit')->findAll();
        return $this->render('activity/product.html.twig', array('products' => $products));
    }
}
