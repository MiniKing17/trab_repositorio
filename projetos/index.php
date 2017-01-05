<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mini Game bueda mini memo piki piki</title>
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="script.js"></script>
  <script>
    $(document).ready(function(){
      $('.draggable2').hide();
      $('.droppable3').hide();
      $('.draggable4').hide();
      $('.droppable5').hide();
      $('.draggable6').hide();
      $('.droppable7').hide();
    })

    $( function() {
      // run the currently selected effect
      function runEffect() {
        // get effect type from
        var selectedEffect = $( "#effectTypes" ).val();
   
        // Most effect types need no options passed by default
        var options = {};
        // some effects have required parameters
        if ( selectedEffect === "scale" ) {
          options = { percent: 50 };
        } else if ( selectedEffect === "size" ) {
          options = { to: { width: 200, height: 60 } };
        }
   
        // Run the effect
        $( "#effect" ).toggle( selectedEffect, options, 500 );
      };
 
      // Set effect from select menu value
      $( "#botao" ).on( "click", function(){
        runEffect();
      });
  });

  </script>
  <!-- CSS -->
  <style>
    .draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
    .droppable1 { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
    .draggable2 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
    .droppable3 { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
    .draggable4 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
    .droppable5 { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
    .draggable6 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
    .droppable7 { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
    .nowrap { white-space: nowrap; }
    .ui-menu { width: 200px; }
    #bttryagain { background-color: #f6a828 ; color: white; border: 1px solid #e78f08; border-radius: 4px; font-size: 16px; }
    #botao { font-size: 16; }

  </style>
  <!-- Javascript -->
  <script>
    $( function() {
      $( ".draggable" ).draggable();
      $( ".droppable1" ).droppable({
        drop: function( event, ui ) {
          $(this)
            .addClass( "ui-state-highlight" )
            .find( "h2" )
            .html( "Muito Bem!" );
        }
      });
    });

    $( function() {
      $( ".draggable2" ).draggable();
      $( ".droppable3" ).droppable({
        drop: function( event, ui ) {
          $(this)
            .addClass( "ui-state-highlight" )
            .find( "h2" )
            .html( "Muito Bem!" );
        }
      });
    });

    $( function() {
      $( ".draggable4" ).draggable();
      $( ".droppable5" ).droppable({
        drop: function( event, ui ) {
          $(this)
            .addClass( "ui-state-highlight" )
            .find( "h2" )
            .html( "Muito Bem!" );
        }
      });
    });

    $( function() {
      $( ".draggable6" ).draggable();
      $( ".droppable7" ).droppable({
        drop: function( event, ui ) {
          $(this)
            .addClass( "ui-state-highlight" )
            .find( "h2" )
            .html( "Muito Bem!" );
        }
      });
    });

    $(function(){
      $("#menu-2").menu({
        icons: { submenu: "ui-icon-circle-triangle-e"},
        position: { my: "right top", at: "right-10 top+5" }
      })
    });

    $(document).ready(function(){
      $("#gohan").click(function(){
        $('.draggable2').hide();
        $('.droppable3').hide();
        $('.draggable4').hide();
        $('.droppable5').hide();
        $('.draggable6').hide();
        $('.droppable7').hide();
        $('.draggable').show();
        $('.droppable1').show();
      });

      $("#goku").click(function(){
        $('.draggable').hide();
        $('.droppable1').hide();
        $('.draggable4').hide();
        $('.droppable5').hide();
        $('.draggable6').hide();
        $('.droppable7').hide();
        $('.draggable2').show();
        $('.droppable3').show();
      });

      $("#piccolo").click(function(){
        $('.draggable').hide();
        $('.droppable1').hide();
        $('.draggable2').hide();
        $('.droppable3').hide();
        $('.draggable6').hide();
        $('.droppable7').hide();
        $('.draggable4').show();
        $('.droppable5').show();
      });

      $("#vegeta").click(function(){
        $('.draggable').hide();
        $('.droppable1').hide();
        $('.draggable2').hide();
        $('.droppable3').hide();
        $('.draggable4').hide();
        $('.droppable5').hide();
        $('.draggable6').show();
        $('.droppable7').show();
      });
  });
  </script>
</head>
<body>
  <ul id="menu-2">
     <li><a id="gohan" href="#">Gohan</a></li> 
     <li><a id="goku" href="#">Goku</a></li>
     <li><a id="piccolo" href="#">Piccolo </a></li>
     <li><a id="vegeta" href="#">Vegeta</a></li>
  </ul>
 
 <div class="cadastro">
  <form action="" id="form-msg" method="post" enctype="multipart/form-data">
    <fieldset>
      <p>
        <span><b>Deixe um comentario:</b></span><br>
        <textarea name="mensagem" style="margin: 0px; width: 511px; height: 119px;"></textarea>
      </p>
      <input type="submit" value="Enviar">
    </fieldset>
  </form>   
</div>
<div class="comments">
  <?php
    $db = new mysqli("localhost", "root", "usbw", "mini_game");
    $qr = $db->query("SELECT * FROM comentarios");

    while ($row = $qr->fetch_assoc()):
      echo "<fieldset>";
      echo sprintf("<p>%s</p>", $row["comentario"]);
      echo "</fieldset>";
    endwhile;
  ?>    
</div>

<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h1 class="ui-widget-header ui-corner-all">Mini Game</h1>
    <h3>Desfrute deste jogo incrivel!</h3>
    <img src="../imagens/gokuicon.png">
  </div>
</div>

<div>
  <select name="effects" id="effectTypes">
    <option value="blind">Blind</option>
    <option value="bounce">Bounce</option>
    <option value="clip">Clip</option>
    <option value="drop">Drop</option>
    <option value="explode">Explode</option>
    <option value="fade">Fade</option>
    <option value="fold">Fold</option>
    <option value="highlight">Highlight</option>
    <option value="puff">Puff</option>
    <option value="pulsate">Pulsate</option>
    <option value="scale">Scale</option>
    <option value="shake">Shake</option>
    <option value="size">Size</option>
    <option value="slide">Slide</option>
  </select>
  <button id="botao" class="ui-state-default ui-corner-all">Fazer efeito</button>
</div>

<div>
  <button id="bttryagain" onclick="myFunction()">Jogar outra vez!</button>
  <script>
    function myFunction() {
        location.reload();
    } 
  </script>
</div>

<div id="draggable" class="draggable">
  <img id="imgohan" src="imagens/gohan_sayian.png">
</div>
 
<div id="droppable" class="droppable1" style="padding-left: 781px;">
  <h2 class="nowrap">Coloque a imagem no sitio certo.</h2>
  <img id="imgohan1" src="../imagens/gohan_sayian1.png">
</div>
 
<div id="draggable" class="draggable2">
  <img id="imgoku" src="../imagens/goku.png">
</div>

<div id="droppable" class="droppable3" style="padding-left: 781px;">
  <h2 class="nowrap">Coloque a imagem no sitio certo.</h2>
  <img id="imgoku1" src="../imagens/goku1.png">
</div>

<div id="draggable" class="draggable4">
  <img id="imgpiccolo" src="../imagens/piccolo.png">
</div>

<div id="droppable" class="droppable5" style="padding-left: 781px;">
  <h2 class="nowrap">Coloque a imagem no sitio certo.</h2>
  <img id="imgpiccolo1" src="../imagens/piccolo1.png">
</div>

<div id="draggable" class="draggable6">
  <img id="imgvegeta" src="../imagens/vegeta.png">
</div>

<div id="droppable" class="droppable7" style="padding-left: 781px;">
  <h2 class="nowrap">Coloque a imagem no sitio certo.</h2>
  <img id="imgvegeta1" src="../imagens/vegeta1.png">
</div>
</body>
</html>
