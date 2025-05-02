<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <h2> {$nome}</h2>
    </header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section id="home">
            <h2>Home</h2>
            <p>This is the home section.</p>
        </section>
        <section id="about">
            <h2>About</h2>
            <p>This is the about section.</p>
        </section>
        <section id="contact">
            <h2>Contact</h2>
            <p>This is the contact section.</p>
        </section>
         // aula 6 carrinho <div class="list-group">
         <span class="list-group-item active">
         Categorias</span>

         {foreach from=$CATEGORIAS item=c}
         
         // Quando clickar na categoria desejada,
          o usuario será direcionado a pagina deles
        <a href="{$C.cate_link}" class="list-group-item"><span
         class="glyphicon glyphicon-menu-right"></span>{$C.cate_nome}</a>
        </div> // puxara as categorias na lista //<---

        {/foreach}
        //cria uma categoria todos
        <a href="{$PAG_PRODUTOS}" class="list-group-item"><span
         class="glyphicon glyphicon-menu-right"></span>Todos</a>
        </div>

    </main>
    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>
</body>
</html>