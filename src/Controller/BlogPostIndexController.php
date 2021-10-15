<?php

namespace App\Controller;

use App\Repository\BlogPostRepository;
use Sylius\Component\Grid\Parameters;
use Sylius\Component\Grid\Provider\GridProviderInterface;
use Sylius\Component\Grid\View\GridView;
use Sylius\Component\Grid\View\GridViewFactoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class BlogPostIndexController extends AbstractController
{
    public function __invoke(
        Request               $request,
        GridProviderInterface $gridProvider,
        GridViewFactoryInterface $gridViewFactory
    )
    {
        $gridView = $gridViewFactory->create(
            $gridProvider->get('app_blog_post'),
            new Parameters($request->query->all())
        ) ;


        return $this->render('blogpost/index.html.twig', [
            'resources' => $gridView,
        ]);
    }
}