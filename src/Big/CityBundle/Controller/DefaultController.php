<?php

namespace Big\CityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BigCityBundle:Default:index.html.twig');
    }


    public function sendContactAction()
    {
        
        $post = $this->getRequest()->request->all();
        
        $status = false;
        $response = null;
        
        $mail = 'fatbotmedia@gmail.com';
        
        if (isset($post['name']) && $post['name'] == '')
        {
            if ( isset($post['prenom'])
                && isset($post['nom'])
                && isset($post['phone'])
                && isset($post['email'])
                && isset($post['message']))
            {
                if( ($post['prenom'] != '')
                   && ($post['nom'] != '')
                   && ($post['phone'] != '')
                   && ($post['email'] != '')
                   && ($post['message'] != '')
                   //expression régulière qui vérifie que l'utilisateur entre bien un numéro de téléphone valide
                   && preg_match ('/^\+?[0-9]{5,12}$/i', $post['phone'])
                   //expression régulière qui vérifie que l'utilisateur entre bien une adresse mail valide
                   && preg_match ('/^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/i', $post['email']))
                {
                    
                    $message = \Swift_Message::newInstance()
                        ->setSubject('Ethnies Cités')
                        ->setFrom($post['email'])
                        ->setTo($mail)
                        ->setBody(
                            $this->renderView('BigCityBundle:Contact:email.txt.twig',
                                                array('post'=>$post), 'text/plain'));
                    $this->get('mailer')->send($message);
                    
                    $status = true;
                }
                else
                {
                    $response = 'Les champs sont vides.';
                }
            }
            else
            {
                $response = 'Tout les champs ne sont pas remplis.';
            } 
        }
        else
        {
            $response = 'Erreur';
        }
        return $this->render('BigCityBundle:Contact:sendContact.json.twig', array('errorMessage' => $response, 'status' => $status));
    }
}






