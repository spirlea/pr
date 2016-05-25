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
           
            return $this->render('MagBundle:Article:Article.html.twig');
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
           
            return $this->render('MagBundle:Article:phone.html.twig');
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
    
     public function computerAction($id) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT computers FROM MagBundle:computers computers WHERE computers.id= :id'
                )->setParameter('id', $id);
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
          
            return $this->render('MagBundle:Article:computer.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:computer.html.twig', compact('data'));
        }
    }
    
  public function componentAction($id) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT components FROM MagBundle:components components WHERE components.id= :id'
                )->setParameter('id', $id);
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
          
            return $this->render('MagBundle:Article:component.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:component.html.twig', compact('data'));
        }
    }
    
   public function peripheralAction($id) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT peripherals FROM MagBundle:peripherals peripherals WHERE peripherals.id= :id'
                )->setParameter('id', $id);
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
          
            return $this->render('MagBundle:Article:peripheral.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:peripheral.html.twig', compact('data'));
        }
    } 
    

    public function booksAction() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT books FROM MagBundle:books books ');
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
           
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig', array(
                        'data' => $data,
            ));
        }
    }
    
    
    public function phonesAction() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT phones FROM MagBundle:phones phones ');
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
           
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig', array(
                        'data' => $data,
            ));
        }
    }
    
    public function computersAction() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT computers FROM MagBundle:computers computers ');
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
           
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig', array(
                        'data' => $data,
            ));
        }
    }
    
    public function componentsAction() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT components FROM MagBundle:components components ');
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
           
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig', array(
                        'data' => $data,
            ));
        }
    }
    
    public function peripheralsAction() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT peripherals FROM MagBundle:peripherals peripherals ');
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
           
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
            return $this->render('MagBundle:Article:ArticleByCayegories.html.twig', array(
                        'data' => $data,
            ));
        }
    }
    
}
