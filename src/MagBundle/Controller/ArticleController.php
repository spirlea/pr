<?php

namespace MagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller {

    public function articleAction() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT articles FROM MagBundle:articles articles ');
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
            $data = ['book' => 'empty DB'];
            return $this->render('MagBundle:Article:Article.html.twig', compact('data'));
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:Article.html.twig', array(
                        'data' => $data,
            ));
        }
    }

    public function bookAction($id) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT books FROM MagBundle:books books WHERE books.id= :id'
                )->setParameter('id', $id);
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
            $data = ['name' => 'empty DB'];
            return $this->render('MagBundle:Article:phone.html.twig', compact('data'));
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:book.html.twig', compact('data'));
        }
    }

    public function phoneAction($id) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT phones FROM MagBundle:phones phones WHERE phones.id= :id'
                )->setParameter('id', $id);
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
          
            return $this->render('MagBundle:Article:phone.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:phone.html.twig', compact('data'));
        }
    }

}
