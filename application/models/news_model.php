<?php if (! defined('BASEPATH')) exit('NO direct script access allowed');
    class News_model extends CI_Model {
 
                public function select_racine(){
                $query= $this->db->query('Select * from plancompte');
                return $query->result_array();

                }
                public function get_racine($valracine){
                    try{
                        $sql="CREATE OR REPLACE VIEW racines as SELECT racine FROM plancompte WHERE racine=%d";
                        $sql=sprintf($sql, $this->db->escape($valracine));
                        $this->db->query($sql);
                    }
                    catch(SQLException $e){
                        echo "erreur = " .$e->getMessage();
                    }
                }

                public function select_titre($valtitre){
                                try{
                            $sql="SELECT intitule FROM plancompte WHERE racine=$valtitre";
                            //$sql=sprintf($sql, $this->db->escape($valtitre));
                        
                            $this->db->query($sql);
                        }
                        catch(SQLException $e){
                            echo "erreur = " .$e->getMessage();
                        }
                    }

       
        

                public function insert_compte($date,$ref,$compte,$tiers,$libelle,$debit,$credit){
                    try{
                    // $sql="INSERT INTO plancompte(racine,intitule)VALUES($rac,'$titre')";
                        $sql=" INSERT INTO Compte (Daty,Ref,Id_compte,Tiers,Libelle,Debit,Credit)values( '$date','$ref',$compte,'$tiers','$libelle',$debit,$credit)";
                        //$sql=sprintf($sql, $this->db->escape($rac,$titre));
                    $this->db->query($sql);
                    }
                    catch(SQLException $e){
                        echo "erreur = " .$e->getMessage();
                    }
                }

                public function select_compte(){
                    $query= $this->db->query('Select * from compte');
                return $query->result_array();
                }

                public function insert_ecri(){
                    try{
                        $sql="INSERT INTO ecriture( ref,comptes,tiers,libelle,debit,credit)Select  ref,comptes,tiers,libelle,debit,credit from compte";
                        $this->db->query($sql);
                    }
                    catch(SQLException $e){
                    echo "erreur = " .$e->getMessage();  
                    }
                }
                public function select_ecri(){
                    $query= $this->db->query('Select * from ecriture');
                    return $query->result_array();
                }

                public function suppr(){
                    try{
                        $sql="DELETE FROM compte";
                        $this->db->query($sql);
                    }
                    catch(SQLException $e){
                    echo "erreur = " .$e->getMessage();  
                    }
                }
                public function verify(){
                    $query=$this->db->query('Select * from balancer');
                    return $query->result_array();
                }
                public function select_plancompte(){
                    $query= $this->db->query('Select * from plancompte');
                    return $query->result_array();
                }
                
                

    }
?>                        