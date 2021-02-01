<?php 
 session_start();
if(!isset($_SESSION["id"])) {
   
    echo "error";
    }
    else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="Js/jquery-1.8.2.min.js"></script>
    <title>JS</title>
 
</head>
<body>
<h1 class="title1" > <i>Ecole de formation TDW</i> </h1>
<form action="Logout.php"><button id="logout">Log out</button></form> 
<div class="slides">
<div class="slider">
    <div class="slider-img" style="padding: 2% 5%;">
        <img class="slide-img" src="assets/22702.jpg" alt="" >
    </div>
    <div class="slider-img"style="padding: 0% 5% 2% 5%;">
        <img class="slide-img" src="assets/29476.jpg" alt="" >
    </div>
    <div class="slider-img"style="padding: 0% 5% 2% 5%;">
        <img class="slide-img" src="assets/29493.jpg" alt="">
    </div>
    <div class="slider-img"style="padding: 0% 5% 2% 5%;">
        <img class="slide-img" src="assets/17885.jpg" alt="">
    </div>
</div>
</div>
<div class="detail">
    <p>TDW est une école de formation offrant diverses formations profesionelles dans les domaines informatique, finance et langues</p>
</div>

<div class="menu" id="nav">
<ul id="ul">
    <li><a href="#">Bureautique</a>
        <ul class="list-item">
            <li>MS Word</li>
            <li>Excel</li>
            <li>LateX</li>
        </ul>
    </li>

    <li><a href="#">Infographie</a>
        <ul class="list-item">
            <li>Photoshop</li>
            <li>Illustrator</li>
        </ul>
    </li>
    <li><a href="#">langues</a>
        <ul class="list-item">
            <li>Anglais</li>
            <li>Turque</li>
            <li>Chinois</li>
        </ul>
    </li>
    <li><a href="#">Management</a>
        <ul class="list-item">
            <li>Marketing</li>
            <li>Comptabilité</li>
            <li>finance</li>
            <li>Gestion de droit</li>
        </ul>
    </li>
</ul>

</div>
<form action="" id="form">
<label class="form-item">Entrez le nom de la formation
    <input  value="" name="nom" id="nom">
</label>
<label class="form-item">Entrez le Volume Horraire
    <input  value="" name="volume"id="volume">
</label>
<label class="form-item">Entrez le Taxe
    <input  value="" name="taxe" id="taxe">
</label>
<label class="form-item">Entrez le prix HT
    <input  value="" name="ht" id="ht">
</label>
<label class="form-item">
    <button type="button" id="button">Valider</button>
</label>

</form>

<h2 class="title1">Liste des tarifs</h2>
<table id="table">
    <tbody>
        <tr  class="ligne1">
            <td class="colonne1">Formations</td>
            <td>Volume Horraire(H)</td>
            <td>Taxe(%)</td>
            <td>Prix HT(DA)</td>
            <td>Prix TTC(DA)</td>
        </tr>
        <tr>
            <td  class="colonne1">Bureautique</td>
            <td rowspan="2" >60</td>
            <td >17</td>
            <td >20000</td>
            <td >23400</td>
        </tr>
        <tr>
            <td  class="colonne1">Infographie</td>
            <td >17</td>
            <td >20000</td>
            <td >23400</td>
        </tr>
        <tr>
            <td class="colonne1">Langues</td>
            <td >120</td>
            <td >0</td>
            <td colspan="2" >30000</td>
        </tr>
        <tr>
            <td class="colonne1">Management</td>
            <td rowspan="2" >90</td>
            <td >19</td>
            <td >25000</td>
            <td >30000</td>
        </tr>
        <tr>
            <td class="colonne1">Comptabilité</td>
            <td >19</td>
            <td >25000</td>
            <td >29750</td>
        </tr>

    </tbody>
</table>
<h2 class="title1">Formations TDW teaser</h2>
<div class="video">
<video src="assets/Démonstration objectifs CSS.mp4" height="300px" width="600px" preload="auto" controls autoplay></video>
</div>
<p class="contact">Pour plus d'information contactez nous par email <a href="#">contact</a></p>
</body>
<script>
    $(document).ready(function(){
    $("#button").click(function(){
    let nom = $("#nom").val();
    let volume =$("#volume").val();
    let taxe =$("#taxe").val();
    let ht =$("#ht").val();
    let table = $("#table")[0];
    let nav =$("#nav")[0];
    $("#ul").append('<li><a>'+nom+'</a></li>');
    nav.append(ul);
    var ttc = TTC(ht);
    var row = "<tr><td class='colonne1'>" + nom + "</td><td>" + volume+ "</td><td>" +taxe+ "</td><td>" +ht+ "</td><td>" +ttc+ "</td><tr>";
     $("tbody").append(row);
    function TTC (ht){
      return ht*1.196;
    }

    })
    
    })

</script>
</html>
<?php } ?>