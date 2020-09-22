<?php
session_start();

require_once("./header.php");
require_once("./msg_session.php");
require_once("./connect_pdo.php");
global $bdd;

?>
<section>
    <div id="liste_cadeaux">
        <h2>Cadeaux et accessoires</h2>
        <article>
            <img src="images/home-img1.jpg">
            <!--TODO: faire en sort de prendre le dernier cadeaux en bdd-->
            <p id="little-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ducimus quos facilis vitae soluta
                quidem optio deleniti, eveniet quo dolores. Iste fugiat modi expedita veniam recusandae
                voluptatum repellat explicabo ullam!
                Inventore provident doloremque, sunt eum voluptas ex aspernatur sapiente excepturi at, omnis
                labore expedita itaque assumenda. In quos totam recusandae odio architecto voluptatem ducimus
                labore laborum iusto nostrum, laudantium ratione.
                Facere accusamus iste voluptatibus quidem assumenda amet distinctio consectetur repudiandae quos
                debitis, eveniet vero officia modi rerum itaque commodi sed iusto dolor vel reprehenderit
                asperiores ratione a! Quidem, eum voluptatem.</p>
        </article>
    </div>
</section>
    
<?php
    require_once("./footer.php");
    ?>