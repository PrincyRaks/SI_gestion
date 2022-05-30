<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function index(){
    	 
        $this->load->view('index');

    
    }
    public function date(){
      $this->load->view('accueil');
    }
    public function retour(){
      $this->load->view('reception1');
    }
    public function selectCompte(){
      $this->load->model('news_model');
      $this->load->helper('url_helper');
       $data = array();

            $data['infos'] = $this->news_model->select_racine();
      $this->load->view('accueil',$data);      
    }
    public function zoneliste(){
      $this->load->model('news_model');
      $this->load->helper('url_helper');
       $data = array();

            $data['info'] = $this->news_model->select_racine();

      $this->load->view('reception2',$data);      
    }

    public function maka_racine(){
      $this->load->model('news_model');
      $data = array();
    $data['rac'] = $_POST['racine'];
    $data['nombres']=$_POST['nombre'];
     
     // $data['intitule']=$this->news_model->select_titre(5);
    
    $this->load->helper('url_helper');
   $this->load->view('reception2',$data);
     $this->news_model->get_racine($data['rac']);
    //$data1=array();
    //
    
    
    
    }
 
 
  
    public function mamadika_char(){
      $this->load->model('news_model');
      $data=array();
     $data['numero']=$_POST['isa'];
      $data['val']=substr($data['numero'],2,1);
      $data['un']='1';
      if ($data['val']=='0') {
         $data['val']=$data['un'];
                
      }
      $data['chaine1']=substr($data['numero'],0,2);
      $data['chaine2']=substr($data['numero'],3);
      $data['final']=$data['chaine1'].$data['val'].$data['chaine2'];
      

 

      //$data['racines']=$_POST['raci'];
      //$data['date']=$_POST['daty'];
      $data['refe']=$_POST['ref'];
       //$data['mv']=$_POST['mouv'];
        $data['cmt']=$_POST['isa'];
         $data['tier']=$_POST['tiers'];
          $data['libelle']=$_POST['libel'];
           $data['db']=$_POST['debit'];
      $data['cr']=$_POST['credit'];


  
      
       if( ($data['db']!=0 && $data['cr']!=0) || ($data['db']==0 && $data['cr']==0)  /*($data['racines']!=substr($data['numero'],0,1))*/ ){

        echo "Syntaxe error";
      } elseif ( ($data['db']!=0 && $data['cr']==0) || ($data['db']==0 && $data['cr']!=0)  /*($data['racines']==substr($data['numero'],0,1))*/ ) {
         echo "Insertion reussi";
         //$this->news_model->insert_compte($data['racines'],$data['date'],$data['refe'],$data['mv'],$data['cmt'],$data['tier'],$data['libelle'],$data['db'],$data['cr']);
         $this->news_model->insert_compte( $data['refe'],$data['cmt'],$data['tier'],$data['libelle'],$data['db'],$data['cr']);

        }
        
      

    
   $data['info_compte']=$this->news_model->select_compte();
   //$data['nb_numero']=strlen($data['numero']);
    //$add='0';
 
  
      $this->load->helper('url_helper');
       $this->load->view('reception2',$data);
    }
    public function   maka_date(){
      $this->load->model('news_model');
      $data=array();
     // $data['annee']=strval($_POST['anne']);
      //$data['moi']=strval($_POST['mois']);
      $data['annee']=$_POST['date'];

  
    
      
      $this->load->helper('url_helper');
      $this->load->view('reception2',$data);
       
    }
 

    
      public function confirme(){
         $this->load->model('news_model');
         $data=array();
         $data['balance']=$this->news_model->verify();
    

         foreach ($data['balance'] as $row) {
                      if ($row['balance']!=0) {
                  echo 'Erreur';
                }
                elseif ($row['balance']==0) {
                  $this->news_model->insert_ecri();
                  $this->news_model->suppr();
                }
                   
            
        
          }
          
        
      $this->load->helper('url_helper');
      $this->load->view('reception2');
      }
      public function result(){
        $this->load->model('news_model');
        $data=array();
        $data['info_compte']=$this->news_model->select_compte();

      $this->load->helper('url_helper');
       $this->load->view('reception2',$data);
      }
            
      public function finale(){
         $this->load->model('news_model');
        $data=array();
        $data['info_compte']=$this->news_model->select_ecri();

      $this->load->helper('url_helper');
       $this->load->view('resultat',$data);
      }      
  
          public function annule(){
         $this->load->model('news_model');
         
        $this->news_model->suppr();


      $this->load->helper('url_helper');
      $this->load->view('reception2');
      }
  



    

}
