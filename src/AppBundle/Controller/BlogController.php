<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

//use http\Env\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function listAction()
    {
        return new Response('<html>You opened blog with nothing</html>');
    }

    /**
     * @Route("/blog/{page}", name="blog_page", requirements={"page"="\d+"})
     */
    public function listActionPages($page)
    {
        return new Response("<html>You opened blog with page $page</html>");
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        return new Response("<html>You opened blog with word $slug</html>");

    }

}