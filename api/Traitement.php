<?php

// traitement talab1 : 

function Authentification($login,$password)
{
    $flag=0;    
    if($login=='TDM'    &&    $password='123')
    {
        $flag=1;
    }    
    return $flag;
}
//II   Fonction Save :

function Save($nom,$prenom,$ville) 
        {
   // 1- ouverture du fichier :
    
    
    $fs= fopen("/students.txt", "a");
    
    
    // 2 declaration de l'enregistrement :
    
    
    $En="$nom-$prenom-$ville";
   
    // 3 ecrire dans le fichier :
    
    fwrite($fs, $En);
    
    // 4 retour à la ligne :
    
    fwrite($fs, "\r\n");
    
    
    //5 fermer le fichier :
    
    
    fclose($fs);
    
   // 6 upload de la photo :
    
    
   move_uploaded_file($tp, $des);
    
    
    
}

// III fonction displayAllStudents


function DispalyAll() {
      ?>
    
      <div class="container mt-4">
            <div class="row">
                
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Ville</th>
                     
                    
                    </tr>
                  </thead>
                  <tbody>
                
                      
                 

    
    <?php
    //1 - ouvrir le fichier :
    
    $fs= fopen("/students.txt", "r");
    
    // 2 -parcours des lignes :
    
    while (!feof($fs))
    {
       // 3 -lecture d'une ligne :
        
     $ligne=  fgets($fs);
     
     // 4 tester si la ligne n'est pas vide :
     
         if($ligne!="")
         {
           $infos=  explode("-", $ligne);
         
          // echo "  Nom :$infos[0]--Prenom:$infos[1]---Ville:$infos[2]<br/>";
          
           
           
        echo "<tr>";   
                echo "<td>$infos[0]</td>";     
               echo "<td>$infos[1]</td>"; 
               echo "<td>$infos[2]</td>"; 
          
              
                   
                    
          echo "</tr>";  
           
            
           
           
         
          }
        
        
        
        
        
        
    }
    
    // 5 fermer le fichier text
    fclose($fs);
    
    ?> 
    
                </tbody>
                </table>
            </div>
        </div>
 <?php    
}