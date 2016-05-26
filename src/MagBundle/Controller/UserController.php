<?php

namespace MagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller {

    public function indexAction() {
        return $this->render('MagBundle:Default:test.html.twig');
    }

    public function loginAction() {
        $id = $this->get('session')->get('id');
        if (isset($_COOKIE['id']) || !empty($id)) {
            return $this->redirectToRoute('mag_homepage');
        } else {
            return $this->render('MagBundle:User:login.html.twig');
        }
    }

    
    public function check_loginAction() {


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
                ->getRepository('MagBundle:Users');

        $e = $this->getDoctrine()->getEntityManager();
        $query = $e->createQuery(
                        'SELECT users FROM MagBundle:Users users WHERE users.login = :Username ORDER BY users.login')
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
                                "SELECT users FROM MagBundle:Users users WHERE users.password =:Pass AND users.login =:Username")
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
                } else {
                    if ($remember == true) {

                        $session = $this->getRequest()->getSession();
                        $session->clear();
                        $session->set('id', $result->getId());
                        $session->set('login', $result->getLogin());
                    } else {
                         
                        setcookie('id', $result->getId(), time() + (3600*2), '/', $_SERVER['SERVER_NAME']); 
                        setcookie('login', $result->getLogin(), time() + (3600*2), '/', $_SERVER['SERVER_NAME']); 
                        
                    } {
                       $request = Request::createFromGlobals();
                        $referer = $request->headers->get('referer');
                        return new RedirectResponse($referer);
                    }
                }
            }
        }
    }

    public function exitAction() {
        $id = $this->get('session')->get('id');
        if (!empty($id)) {
            $this->get('session')->remove('id');
            $this->get('session')->remove('login');
        }elseif( isset($_COOKIE['id'])|| isset($_COOKIE['login'])){
      
        setcookie('id', null, time() - 2 * 3600, '/', $_SERVER['SERVER_NAME']);
        setcookie('login', null, time() - 2 * 3600, '/', $_SERVER['SERVER_NAME']);
        setcookie('access', null, time() - 2 * 3600, '/', $_SERVER['SERVER_NAME']);

        }


        return $this->redirectToRoute('mag_homepage');
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
    
    
    public function updateRegAction($var,$email,$login,$firstname,$lastname)
    {
        
        if ($var == 'empty') {
            $this->get('session')->getFlashBag()->set('RegFlashBag', 'Empty Field!');
            $request = Request::createFromGlobals();
                        $referer = $request->headers->get('referer');
                        return new RedirectResponse($referer);
        } elseif ($var == 'WrongEmail') {
            $this->get('session')->getFlashBag()->set('RegFlashBag', 'Email is busy!');
            $this->get('session')->getFlashBag()->set('RegWEmailFlashBag',"email busy");
            $this->get('session')->getFlashBag()->set('RegEmailFlashBag',"$email");
            $this->get('session')->getFlashBag()->set('RegFnameFlashBag',"$firstname");
            $this->get('session')->getFlashBag()->set('RegLnameFlashBag',"$lastname");
            $this->get('session')->getFlashBag()->set('RegLoginFlashBag',"$login");
            $request = Request::createFromGlobals();
                        $referer = $request->headers->get('referer');
                        return new RedirectResponse($referer);
        } elseif ($var == 'WrongLogin') {
            $this->get('session')->getFlashBag()->set('RegFlashBag', 'Login is bussy!');
            $this->get('session')->getFlashBag()->set('RegWLoginFlashBag',"login busy");
            $this->get('session')->getFlashBag()->set('RegEmailFlashBag',"$email");
            $this->get('session')->getFlashBag()->set('RegFnameFlashBag',"$firstname");
            $this->get('session')->getFlashBag()->set('RegLnameFlashBag',"$lastname");
            $this->get('session')->getFlashBag()->set('RegLoginFlashBag',"$login");
            $request = Request::createFromGlobals();
                        $referer = $request->headers->get('referer');
                        return new RedirectResponse($referer);
        } 
        
        elseif ($var == 'created') {
            $this->get('session')->getFlashBag()->set('RegFlashBag', 'Success');
            $this->get('session')->getFlashBag()->set('RegSuccessFlashBag',"Registartion was successifull!");
            
            $request = Request::createFromGlobals();
                        $referer = $request->headers->get('referer');
                        return new RedirectResponse($referer);
        } 
        
    }
    
    public function registrationAction() {
        return $this->render('MagBundle:User:registration.html.twig');
    }
    
    public function check_regAction()
    {
        if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
        if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
        if (isset($_POST['pass1'])) { $password=$_POST['pass1']; if ($password =='') { unset($password);} }
        if (empty($login) or empty($password) or (empty($email))) 
            {
              return $this->updateRegAction('empty');
            }
    
            $login = stripslashes($login);
            $login = htmlspecialchars($login);
            $password = stripslashes($password);
            $password = htmlspecialchars($password);
            $login = trim($login);
            $password = trim($password);
            
             $firstname= $_POST['firstname'];
            $lastname= $_POST['lastname'];
           
            $firstname= stripslashes($firstname);
            $lastname= stripslashes($lastname);
            
            $name= htmlspecialchars($firstname);
            $lastname= htmlspecialchars($lastname);
            
            
            $repository = $this->getDoctrine()
                ->getRepository('MagBundle:Users');

        $e = $this->getDoctrine()->getManager();
        $query = $e->createQuery(
                        'SELECT users FROM MagBundle:Users users WHERE users.email = :Email ORDER BY users.email')
                ->setParameter('Email', $email)
                ->setMaxResults(1);


        try {
            $result = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        } 
       
        
         if ($result==null){    
    $repository = $this->getDoctrine()
                ->getRepository('MagBundle:Users');

        $e = $this->getDoctrine()->getManager();
        $query = $e->createQuery(
                        'SELECT users FROM MagBundle:Users users WHERE users.login = :Username ORDER BY users.login')
                ->setParameter('Username', $login)
                ->setMaxResults(1);


        try {
            $result = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $result = null;
        } 


          
         
          if ($result==null){
            $user =new \MagBundle\Entity\Users();
            $user->setLogin($login);
            $user->setPassword($password);
            $user->setName($firstname);
            $user->setSubname($lastname);
            $user->setEmail($email);
            
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
            
            
    
    
         return $this->updateRegAction('created',$email,$login,$firstname,$lastname);} 
         
     else
         {return $this->updateRegAction('WrongLogin',$email,$login,$firstname,$lastname);}}
         
     else
         {return $this->updateRegAction('WrongEmail',$email,$login,$firstname,$lastname);}
      
     
        
        
      }

    public function testAction() {
        return $this->render('MagBundle:Default:test.html.twig');
    }

}
