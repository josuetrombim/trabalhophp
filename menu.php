<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JJ Lanches - Menu</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* height: 100vh;
			      width: 100vw; */
            background-image: url("img/fundo.png");
        }

        .container {
            height: 100vh;
            width: 100vw;
            background-image: url("fundo.png");
            background-repeat: round;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header {
            /* background-color: red; */
            padding: 5px;
            text-align: center;
            color: white;
        }

        .menu-content {
            width: 100%;
            max-width: 700px;
            padding: 10px;
            margin: 0 auto;
        }

        .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer; /* altera o cursor do mouse*/
        padding: 18px;
        border: none;
        text-align: left;
        font-size: 15px;
        margin-top: 5px;
      }

      .active,
      .collapsible:hover {
        background-color: #555;  /*deixa o campo mais escuro quando passa o mouse por cima*/
      }

      /* .collapsible:after {
        content: "\002B";
        color: white;
        font-weight: bold;
        float: right;
        margin-left: 5px;
      } */

      /* .active:after {
        content: "\2212";
      } */

      /* .content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
      } */
      .content {
        padding: 0 18px;
        max-height: 100px;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
        margin-top: 0px 0px;
        
      }
      .content p{
          margin-left: 2px;
          text-align: center;
          display: flex;
          justify-content: center;
      }
    
    </style>

</head>

<body>
    <header>
        <h2 class="subtitulo">Escolha o seu lanche e faça o seu pedido</h2>
    </header>
    <div class='menu-content'>
    <div class="collapsible">Cheese Bacon</div>
      <div class="content">
        <p>
        <img src="img/cheese.png" alt="hamburguer cheese bacon" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="collapsible">Cheese Egg</div>
      <div class="content">
        <p>
        <img src="img/cheeseburger.png" alt="hamburguer cheese burguer">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
   
     <!-- <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }
  </script> -->
</body>

</html>