<div class="container resultats_apprenants">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <table>
                <caption>
                    Gestion des votants
                </caption>
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Modification du statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        // echo "<pre>";
                        // var_dump($votes);
                        // echo "</pre>";
                        foreach ($votes as $key => $value){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $value['email']; ?></th>
                            <th scope="row"><?php echo $value['statut']; ?></th>
                            <td><?php 
                                if($value['statut'] == 1){
                                    echo "<a href='index.php?page=togglevote&email=".$value['email']."&statut=0'>Unvalidate</a>";
                                }else{ echo "<a href='index.php?page=togglevote&email=".$value['email']."&statut=1'>Validate</a>" ;}?></td>
                        </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>