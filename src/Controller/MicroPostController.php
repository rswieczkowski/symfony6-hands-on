<?php

namespace App\Controller;

use App\Entity\MicroPost;
use App\Repository\MicroPostRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MicroPostController extends AbstractController
{
    #[Route('/micro-post', name: 'app_micro_post')]
    public function index(MicroPostRepository $posts): Response
    {
//        $microPost = new MicroPost();
//        $microPost->setTitle('Post from controller');
//        $microPost->setText('Post from controller');
//        $microPost->setCreated(new DateTime());
        $microPost = $posts->find(5);

        $posts->remove($microPost, true);
//        dd($posts->find(4));
        return $this->render('micro_post/index.html.twig', [
            'controller_name' => 'MicroPostController',
        ]);
    }
}
