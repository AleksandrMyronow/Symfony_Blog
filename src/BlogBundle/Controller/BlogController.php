<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 05.10.2017
 * Time: 13:14
 */
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function homepageAction() {
        return $this->render("::base.html.twig");
    }
}