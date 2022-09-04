<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/article', name: 'article_')]
class ArticleController extends AbstractController
{
    #[Route('/{id}', name: 'show')]
    public function index(Category $id, ArticleRepository $articles): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articles->findBy(['category' => $id]),
        ]);
    }
}
