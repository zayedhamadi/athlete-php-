<?php
    require_once "CRUD_Athlete.php";
    ob_start();
    $crud=new CRUD_Athlete();
    
?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        CIN : <?php 
                $cin=htmlspecialchars($_GET['cin']);
                echo '<input value="'.$cin.'" type="text" name="cin" id=""><br><br> ';
            ?>
        Taux : <input type="text" name="taux" id=""><br><br>
        <input type="submit" class="btn btn-success" name="sub" value="Enregistrer">
    </form>

<?php
    if (isset($_POST['sub'])) {
    
        $crud->Passer_test(htmlspecialchars($_POST['cin']),htmlspecialchars($_POST['taux']));
        header("location:listeAthletes.php");
    }

    $title="Passer un test de dopage";
    $container=ob_get_clean();
    include "layout.php";