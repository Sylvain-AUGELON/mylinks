<?php
$headerNav = "navbarHome";
include '../templates/header.html.php';
?>


<main>
    <div>
    <style>
        li:hover .trash {
            display: inline !important;
        }
    </style>
        <ul>
            <?php
            echo "<pre>";
            //var_dump($_SESSION);
                foreach( $_SESSION["favorites"] as $key => $value): ?>
                   <li><a href="
                   <?=$value['href'] ?>
                   " target="_blank">
                   <?=$value['href']?>
                   <img src="
                   <?=$value['favicon']?>
                   "/>

                   <?=$value['text']?>
                   </a><a  class="d-none trash bi bi-trash" name="<?= $key?>"></a></li>
               <?php  endforeach;

            //var_dump($_SESSION["favorites"]);
            ?>
        </ul>
    </div>

</main>
<?php
include '../templates/footer.html.php';
 ?>