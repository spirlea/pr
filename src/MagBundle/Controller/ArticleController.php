<?php


namespace MagBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller {
     public function articleAction() {
         
         $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT books FROM MagBundle:books books ');
           try {
                  $result = $query->getResult();
         } 
     catch (\Doctrine\Orm\NoResultException $e) {
                  $result = null;
          }
          if($result==null){$data=['book'=>'empty DB'];
          return $this->render('MagBundle:Article:article.html.twig',compact('data'));}
          else{
         $data=['book'=>$result['book']=$query->getResult(),
                'id'=>$result['id']=$query->getResult(),
                'wallper'=>$result['wallper']=$query->getResult()];
          return $this->render('MagBundle:Article:article.html.twig',compact('data'));}
    }
    
    public function itemAction($id) {
         
         $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT books FROM MagBundle:books books WHERE books.id= :id'
                                         )->setParameter('id',$id);
           try {
                  $result = $query->getResult();
         } 
     catch (\Doctrine\Orm\NoResultException $e) {
                  $result = null;
          }
          if($result==null){$data=['book'=>'empty DB'];
          return $this->render('MagBundle:Article:article.html.twig',compact('data'));}
          else{
         $data=['book'=>$result['book']=$query->getResult(),
                'author'=>$result['author']=$query->getResult(),
                'year'=>$result['year']=$query->getResult(),
                'description'=>$result['description']=$query->getResult(),
                'wallper'=>$result['wallper']=$query->getResult()];
          return $this->render('MagBundle:Article:book.html.twig',compact('data'));}
    }
    
    
    
    
}
