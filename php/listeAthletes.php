<?php
    require_once "CRUD_Athlete.php";
    ob_start();
    $crud=new CRUD_Athlete();
?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        Liste des athletes : <select name="SelAth" id="">
            <option value="N_D">Non Dopés</option>
            <option value="D">Dopés</option>
        </select>
        <input type="submit" class="btn btn-primary" name="sub" value="Afficher">
    </form>
    <table class="table" >
        <tr>
            <th>Cin</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Test</th>
        </tr>
        
            <?php 
                if (isset($_POST['sub'])) {
                    if ($_POST['SelAth']=='N_D') {
                        $LesAthletes=$crud->listeAthlete(0);
                    }
                    if ($_POST['SelAth']=='D') {
                        $LesAthletes=$crud->listeAthlete(1);
                    }

                    foreach ($LesAthletes as $Athlete) {
                        echo "<tr>";
                        foreach ($Athlete as $key => $value) {
                            echo"<td>$value</td>";
                        }
                        echo'<td><a class="btn btn-success" href="testDopage.php?cin='.$Athlete[0].'">Test</a></td>';
                        echo"</tr>";
                    }
                }

                echo"</table>";

                $title="Lister les Athlete";
                $container=ob_get_clean();
                include "layout.php";
            ?>
        