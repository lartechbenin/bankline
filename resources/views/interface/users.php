<?php
include('config.php');
//session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 10 Transitional//EN" "http://wwww3org/TR/xhtml1/DTD/xhtml1-transitionaldtd">
    <?php
include('headers.php')
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/stylecss" rel="stylesheet" title="Style" />
          <link href="stilecss" rel="stylesheet">

        <title>Liste des utilisateurs</title>
    </head>
    <body>
        <?php
        $url_home= "indexhtml" ;
        ?> 
        <div class="header">
<!--                <a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Espace Membre" /></a>-->
            </div>
        <div class="content">
<!--Voici votre profile:-->
<table>
<!--    <tr>
        <th>Id</th>
        <th>Nom d'utilisateur</th>
        <th>Email</th>
    </tr>-->
    <?php 
//    if(isset($_SESSION['username']))
//        {
//        echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');
//
//
//} ?>
<?php
//On recupere les identifiants, les pseudos et les emails des utilisateurs
//$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
$req = mysql_query('select id, titre, username, email,bank_cod,code_guichet,rib_key,iban,swift,amont,montant_client,type_compte,statut  from usersss WHERE username="'.mysql_real_escape_string($_SESSION['username']).'"');
//$req = mysql_query('select username, email from users ');
while($dnn = mysql_fetch_array($req))
{
?>
<center><table  class='er'>
    <tr>
        <td>
          <center>  INFORMATION PERSONNEL: </center><br>
            
       
    <div class='na'>   Titulaire du compte: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['username']; ?></div><br>
   <div class='no'>    iban:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['iban']; ?></div><br>
    <div class='na'>    Code banque:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['bank_cod']; ?></div><br>
    <div class='no'>    Code-guichet:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['code_guichet']; ?></div><br>
     <div class='na'>  Rib:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['rib_key']; ?></div><br>
    <div class='no'>    Switch:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['swift']; ?></div><br>
   <div class='na'>  solde initial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['montant_client']; ?></div><br>
<div class='no'>   montant crédit:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['amont']; ?></div><br>
<div class='na'> Solde disponible:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dnn['amont']; ?></div><br>




   </td>
</tr>
   </table></center>
 <center>  <table  class='es'>
    <tr>

        <td>
            <center>VOTRE COMPTE</center><br>

         <div class='na'>   N0 de compte :<?php echo $dnn['amont']; ?></div><br>

 <div class='no'>  type de compte : <?php echo $dnn['type_compte']; ?></div><br>

   <div class='na'>montant crédit:<?php echo $dnn['amont']; ?></div><br>
   <div class='no'>Statut:<?php echo $dnn['statut']; ?></div><br>


        </td>

    </tr>
   </table></center>
      
      <br><br><br><br><br><br><br><br><br><br><br><br> <a href="codefr/profilephp?id=<?php echo $dnn['id']; ?>"><center><br>CLIQUER ICI POUR AVOIR TOUTES LES INFORMATION SUR VOTRE COMPTE</center><br><br><br>
            
                
            </a></td>
<!--        <td class="left"><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>-->
    

<?php
}
?>
</table>
                </div>
                
        
      <center> <div class="foot"><a href="<?php echo $url_home; ?>">Retour &agrave; l'accueil</a> </center>
       </div>
        
    <?php
//include 'section.php';
    ?>
    </body>
</html>