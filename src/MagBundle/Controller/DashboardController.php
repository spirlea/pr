<?php

namespace MagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller {
    
    public function adminLogInAction(){
         if (isset($_COOKIE['adminid']) && isset($_COOKIE['access']) ) { 
             $id=$_COOKIE['adminid'];
          $access=$_COOKIE['access'];
          $repository = $this->getDoctrine()
                ->getRepository('MagBundle:admin');

        $e = $this->getDoctrine()->getEntityManager();
        $query = $e->createQuery(
                        'SELECT admin FROM MagBundle:admin admin WHERE admin.id = :id AND admin.access = :access ')
                ->setParameter('id', $id)
                ->setParameter('access', $access)
                ->setMaxResults(1);


        try {
            $result = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result === null) { return $this->render('MagBundle:Dashboard:resricted.html.twig');} else{
           return $this->redirectToRoute('dashboard');
        } 
              
       
        
    } else {
        return $this->render('MagBundle:Dashboard:dashlogin.html.twig');
    }
        
       
    }
    
    public function adminCheckAction(){
         

        if (isset($_POST['login'])) {
            $login = $_POST['login'];
            if ($login == '') {
                unset($login);
            }
        }
        if (isset($_POST['pass'])) {
            $password = $_POST['pass'];
            if ($password == '') {
                unset($password);
            }
        }

        if (isset($_POST['remember'])) {
             $remember = true;
        } else {
            $remember = false;
        }
        if (empty($login) or empty($password)) {
            return $this->updateAction('gol',$login);
        }
        $login = stripslashes($login);
        $login = htmlspecialchars($login);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
        $login = trim($login);
        $password = trim($password);
        $repository = $this->getDoctrine()
                ->getRepository('MagBundle:admin');

        $e = $this->getDoctrine()->getEntityManager();
        $query = $e->createQuery(
                        'SELECT admin FROM MagBundle:admin admin WHERE admin.login = :Username ORDER BY admin.login')
                ->setParameter('Username', $login)
                ->setMaxResults(1);


        try {
            $result = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        } {
            if ($result == null) {
                return $this->updateAction('gresit',$login);
            } else {
                $e = $this->getDoctrine()->getEntityManager();
                $query = $e->createQuery(
                                "SELECT admin FROM MagBundle:admin admin WHERE admin.password =:Pass AND admin.login =:Username")
                        ->setParameter('Username', $login)
                        ->setParameter('Pass', $password)
                        ->setMaxResults(1);

                try {
                    $result = $query->getSingleResult();
                } catch (\Doctrine\Orm\NoResultException $e) {
                    $result = null;
                }

                if ($result === null) {
                    return $this->updateAction('gresit',$login);
                } else { $newAccess=rand(10000,999999);
                         $result->setAccess($newAccess);
                         $em = $this->getDoctrine()->getManager();
                         $em->persist($result);
                         $em->flush();
                         
                        setcookie('adminid', $result->getId(), time() + (3600*2), '/', $_SERVER['SERVER_NAME']); 
                        setcookie('adminlogin', $result->getLogin(), time() + (3600*2), '/', $_SERVER['SERVER_NAME']); 
                        setcookie('access', $result->getAccess(), time() + (3600*2), '/', $_SERVER['SERVER_NAME']);
                } 
                     
                       return $this->redirectToRoute('dashboard');
                    
                
            }
        }
                        }
    
    public function updateAction($var,$login) {
        if ($var == 'gol') {
            $this->get('session')->getFlashBag()->set('LoginFlashBag', 'Empty username or password.');
            $request = Request::createFromGlobals();
                        $referer = $request->headers->get('referer');
                        return new RedirectResponse($referer);
        } elseif ($var == 'gresit') {
            $this->get('session')->getFlashBag()->set('LoginFlashBag',"$login");
            $request = Request::createFromGlobals();
                        $referer = $request->headers->get('referer');
                        return new RedirectResponse($referer);
        } 
    }
    
    public function restrictedAction(){
        return $this->render('MagBundle:Dashboard:restrict.html.twig');
    }
    
    public function dashboardAction(){
         if (isset($_COOKIE['adminid']) && isset($_COOKIE['access']) ) { 
             $id=$_COOKIE['adminid'];
          $access=$_COOKIE['access'];
          $repository = $this->getDoctrine()
                ->getRepository('MagBundle:admin');

        $e = $this->getDoctrine()->getEntityManager();
        $query = $e->createQuery(
                        'SELECT admin FROM MagBundle:admin admin WHERE admin.id = :id AND admin.access = :access ')
                ->setParameter('id', $id)
                ->setParameter('access', $access)
                ->setMaxResults(1);


        try {
            $result = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result === null) {
            return $this->redirectToRoute('admin');} else{
            $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT articles FROM MagBundle:articles articles ');
        try {
            $result = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result == null) {
           
             return $this->render('MagBundle:Dashboard:dashboard.html.twig');
        } else {
            $data = ['name' => $query->getResult(),];
             return $this->render('MagBundle:Dashboard:dashboard.html.twig', array(
                        'data' => $data,
            ));
        }
            
            
            
            
            
          
        } 
              
       
        
    }
    else {return $this->redirectToRoute('admin');}
        }
    
    public function exitaAction(){
      if( isset($_COOKIE['adminid'])&& isset($_COOKIE['access'])){
          $id=$_COOKIE['adminid'];
          $access=$_COOKIE['access'];
          $repository = $this->getDoctrine()
                ->getRepository('MagBundle:admin');

        $e = $this->getDoctrine()->getEntityManager();
        $query = $e->createQuery(
                        'SELECT admin FROM MagBundle:admin admin WHERE admin.id = :id AND admin.access = :access ')
                ->setParameter('id', $id)
                ->setParameter('access', $access)
                ->setMaxResults(1);


        try {
            $result = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result === null) {} else{
            $nullAccess=0;
                         $result->setAccess($nullAccess);
                         $em = $this->getDoctrine()->getManager();
                         $em->persist($result);
                         $em->flush();
            
        }
          
        setcookie('adminid', null, time() - 2 * 3600, '/', $_SERVER['SERVER_NAME']);
        setcookie('adminlogin', null, time() - 2 * 3600, '/', $_SERVER['SERVER_NAME']);
        setcookie('access', null, time() - 2 * 3600, '/', $_SERVER['SERVER_NAME']);

        }


        
        return $this->redirectToRoute('admin');
        
    }
    
    public function deleteArticleAction($id){
        $repository = $this->getDoctrine()
                ->getRepository('MagBundle:articles');

        $e = $this->getDoctrine()->getEntityManager();
        $query = $e->createQuery(
                        'SELECT articles FROM MagBundle:articles articles WHERE articles.id = :id ')
                ->setParameter('id', $id)  
                ->setMaxResults(1);


        try {
            $result = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        }
        if ($result === null) {} else{
           
                         $table= $result->getArticleType().'s';
                         
                         $tableId =$result->getArticleId();
                         $em = $this->getDoctrine()->getManager();
                         $em->remove($result);
                        
                         $em->flush();
                         
                         
        $repository = $this->getDoctrine()
                ->getRepository("MagBundle:$table");

        $e = $this->getDoctrine()->getEntityManager();
        $query = $e->createQuery(
                        "SELECT $table  FROM MagBundle:$table $table WHERE $table.id = :id ")
                ->setParameter('id', $tableId)  
                ->setMaxResults(1);


        try {
            $result1 = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result1 = null;
        }   
        if ($result1 === null) {} else{
            $em = $this->getDoctrine()->getManager();
                         $em->remove($result1);
                         
                         $em->flush();
            
        }
            
        }
     
           return $this->redirectToRoute('dashboard');
    }
    
 public function addArticleAction(){
    return $this->render('MagBundle:Dashboard:addArticle.html.twig');
 }

}