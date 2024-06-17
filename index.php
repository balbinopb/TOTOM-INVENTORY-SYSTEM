<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/font/bootstrap-icons.min.css">
</head>
<body>
    
    <?php
        include("base/navbar.php");
    ?>
    <br>
    <br>
<div class="row w-25 w-50 p-3">
 <div class="col-4">
    <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end" style = "top: 0;">
        <nav class="nav nav-pills flex-column">
            <a class="nav-link" href="#item-1">Introdusaun</a>
            <a class="nav-link" href="#item-2">Item 2</a>
            <a class="nav-link" href="#item-3">Item 3</a>
            <nav class="nav nav-pills flex-column">
            <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
            <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
            </nav>
        </nav>
        </nav>
    </div>

    <div class="col-8" >
        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0" class = "overflow-auto" style="max-height: 400px;">
        <div id="item-1">
            <h4 class  = "display-1">Introdusaun</h4>
            <p>
            Fatin armazen, iha kontestu jeral, refere-se ba lokal ida ne'ebé utiliza hodi armazena produtu sira ka merkadurias. Kompañia sira no organizasaun sira uza fatin armazen hodi asegura katak sira nia produtu sira seguru, organizadu, no fasil atu hetan bainhira presiza. Tipu sira ne'ebé komun ba fatin armazen inklui:
            </p>
        </div>
        <div id="item-1-1">
            <h5 class>Tipu Primeiro</h5>
            <p>
                Armazéns Industriais: Estabelesimentu boot ne'ebé hatudu kapasidade atu armazena volumen boot husi produtu sira.
            </p>
        </div>
        <div id="item-1-2">
            <h5>Tipu Segundo</h5>
            <p>Depozitu sira iha Loja: Espásiu ki'ik iha loja sira hodi armazena produtu sira to'o sira hetan eskolla husi kliente.</p>
        </div>
        <div id="item-1-3">
            <h5>Tipu Terceiro</h5>
            <p>Armazenamentu Temporáriu: Eskola alternativa hodi armazena produtu sira iha situasaun sira ne'ebé espasu limitadu.</p>
        </div>
        
            <img src="img/gudang.jpg" class=" rounded-5 mt-5 pt-5 mx-auto position-absolute top-0 end-0 w-50 p-3 h-50 d-inline-block"alt="gundang">

        <div id="item-2">
            <h4>Item 2</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, quam. Quae ratione inventore consectetur nostrum eum sapiente maxime repellat reprehenderit. Molestias quo modi quaerat fugit vero deleniti iure architecto esse omnis temporibus. Modi iste delectus magni vitae a veniam voluptatem optio sint laboriosam iure totam vel pariatur ipsa, natus quia aliquid laborum facere placeat labore error. Eaque beatae ipsa assumenda sit error! Dicta, iure quis eveniet pariatur accusantium rem dolorum fugiat? Velit voluptatum illo dignissimos officia cupiditate iure magni, nobis molestias mollitia sed ex sint voluptate laboriosam deserunt, nulla ea consectetur quisquam nihil autem aspernatur odit iste! Consequatur, ducimus deleniti!</p>
        </div>
        <div id="item-3">
            <h4>Item 3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, quam. Quae ratione inventore consectetur nostrum eum sapiente maxime repellat reprehenderit. Molestias quo modi quaerat fugit vero deleniti iure architecto esse omnis temporibus. Modi iste delectus magni vitae a veniam voluptatem optio sint laboriosam iure totam vel pariatur ipsa, natus quia aliquid laborum facere placeat labore error. Eaque beatae ipsa assumenda sit error! Dicta, iure quis eveniet pariatur accusantium rem dolorum fugiat? Velit voluptatum illo dignissimos officia cupiditate iure magni, nobis molestias mollitia sed ex sint voluptate laboriosam deserunt, nulla ea consectetur quisquam nihil autem aspernatur odit iste! Consequatur, ducimus deleniti!</p>
        </div>
        <div id="item-3-1">
            <h5>Item 3-1</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, quam. Quae ratione inventore consectetur nostrum eum sapiente maxime repellat reprehenderit. Molestias quo modi quaerat fugit vero deleniti iure architecto esse omnis temporibus. Modi iste delectus magni vitae a veniam voluptatem optio sint laboriosam iure totam vel pariatur ipsa, natus quia aliquid laborum facere placeat labore error. Eaque beatae ipsa assumenda sit error! Dicta, iure quis eveniet pariatur accusantium rem dolorum fugiat? Velit voluptatum illo dignissimos officia cupiditate iure magni, nobis molestias mollitia sed ex sint voluptate laboriosam deserunt, nulla ea consectetur quisquam nihil autem aspernatur odit iste! Consequatur, ducimus deleniti!</p>
        </div>
        <div id="item-3-2">
            <h5>Item 3-2</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, quam. Quae ratione inventore consectetur nostrum eum sapiente maxime repellat reprehenderit. Molestias quo modi quaerat fugit vero deleniti iure architecto esse omnis temporibus. Modi iste delectus magni vitae a veniam voluptatem optio sint laboriosam iure totam vel pariatur ipsa, natus quia aliquid laborum facere placeat labore error. Eaque beatae ipsa assumenda sit error! Dicta, iure quis eveniet pariatur accusantium rem dolorum fugiat? Velit voluptatum illo dignissimos officia cupiditate iure magni, nobis molestias mollitia sed ex sint voluptate laboriosam deserunt, nulla ea consectetur quisquam nihil autem aspernatur odit iste! Consequatur, ducimus deleniti!</p>
        </div>
        </div>
    </div>
    </div>

<script src = "bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>