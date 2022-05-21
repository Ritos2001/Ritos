<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<html>
    <head>
        <title>Panadería Els Ritos</title>
		<link rel="stylesheet" type="text/css" href="codigo3.css">
    </head>
    <body>
        <nav>
            <ul>
                <div class="div2">
                <li><a href="cliente.php">Home</a></li>
                <li><a href="pedidocliente.php">Lista productos</a></li>
                <li><a href="pedidocliente2.php">Ver pedidos</a></li>
		<li><a href="pedir_pedido.php">Hacer pedido</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </div>
            </ul>
        </nav>
        <head>

        <h1>Panadería Els Ritos</h1>
        <p>La mejor panadería del mundo, panadería els Ritos, 20 años proporcionando todo tipo de productos del pan con nuestros profesionales
            encargados de hacer los mejores panes del mundo a los mejores precios.
        </p>


        </head>
        <section>
            <article>

                <h2>Empresa dedicada a la venta de productos derivados del pan</h2>
                <p>
                    Nuestra tienda ofrece los mejores productos del pan, siendo
                    a precios bajos con los mejores profesionales en el sector.
                </p>

            </article>
            <article>
                <h2>Comprar pan online</h2>
                <p>
                    Comprar pan online se ha vuelto muy habitual en los últimos años, sobretodo desde la
                    pandemia. Es por eso que desde el último año hemos hecho que nuestra empresa mejore, para que nuestros clientes puedan tener productos muy buenos con un servicio excelente desde la comodidad de su hogar.
                </p>
            </article>
            <article>
                <h2>¿Por qué comprar tus productos del pan online?</h2>
                <p>
                    Es muy útil comprar tu pan online debido a la cantidad de productos y a la comodidad de llevarte tu pan recién hecho a casa,
                    puedes llevar tu pan con toda comodidad a tu casa sin apenas esfuerzo. Sobretodo para gente mayor que les cuesta más caminar 
                    y poder tener su pan en casa o llevar una gran cantidad de peso a casa sin apenas trabajo.
                </p>

            </article>
            <article>

                <h2>Historia del pan</h2>
                <p>
                    La historia del pan en la alimentación se desarrolla paralela a la del uso de los cereales por parte del ser humano.
                    El pan es un producto directo del procesado manual de los cereales (procesado que con posterioridad se transformó en
                    mecánico) y es muy posible que fuese la primera aplicación alimenticia de estos. El pan, el aceite y el vino quizás
                    fueron los primeros alimentos procesados en la historia de la humanidad.
                    Los cereales, por sí solos, no pueden ser digeridos adecuadamente por el aparato digestivo humano. Esta es la razón por la
                    que los cereales son artificialmente procesados (molidos, remojados, etc.) y solo a partir de este momento empezaron a 
                    convertirse en alimentos básicos para el ser humano, aportando carbohidratos, los cuales se complementarían con las 
                    proteínas procedentes de las carnes.​ Así pues, el pan primigenio (elaborado con especies antiguas de cebada) pudo haber
                    sido uno de los primeros alimentos elaborados de la historia de la alimentación. Algunos trabajos de investigación afirman
                    que el ser humano empezó a cocinar los cereales antes que a elaborar el pan.
                    A lo largo de la historia de las culturas, el pan se ha ido elaborando con el cereal disponible en la zona o con la variante
                    modificada más resistente. Así se tiene, por ejemplo, que tanto el trigo como los otros cereales se han empleado en Europa
                    y parte de África; el maíz es frecuente en América; el arroz, en Asia. Un hecho social relativo al pan es que 
                    históricamente se ha establecido una distinción social en función del color de la miga de pan que se haya comido. 
                    Por ejemplo, los panes de centeno (de miga más oscura) han correspondido a las clases menos favorecidas, mientras que los
                    de harina de trigo (de miga blanca) a clases más elitistas.5​ El pan es entendido por muchas culturas como un sinónimo de 
                    alimento y es un ingrediente que forma parte de diversos rituales religiosos y sociales en gran parte del mundo, siendo 
                    además en la actualidad un elemento económico que influye en índices económicos tales como el índice de precios al consumo
                    (IPC), empleado para determinar la evolución del costo de vida en las naciones.<br>
                </p>
            </article>
            <div>
                <img class="galeria" src="https://media-cdn.tripadvisor.com/media/photo-s/12/5c/54/29/entrada.jpg" width="240" height="240" alt="Galeria CSS 1"/>
                <img class="galeria" src="https://media-cdn.tripadvisor.com/media/photo-s/17/b8/fa/7b/photo0jpg.jpg" width="240" height="240" alt="Galeria CSS 2"/> 
                <img class="galeria" src="https://media-cdn.tripadvisor.com/media/photo-s/15/5c/2e/e4/seleccion-de-bolleria.jpg" width="240" height="240" alt="Galeria CSS 3"/>
                <img class="galeria" src="http://verlanga.com/wp-content/uploads/IMG_0810.jpg" width="240" height="240" alt="Galeria CSS 4"/>
            </div>
        </section>
    </body>
</html>
<?php }else{
header('Location: error404.html');
}?>
