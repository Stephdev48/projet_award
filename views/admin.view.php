<div class="container section_admin">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6 m-5">
            <h2 class="text-center fs-2">Tableau de gestion des votants</h2>
            <table class="">
                <thead>
                    <tr>
                        <th scope="col" class="tableau">Email</th>
                        <th scope="col" class="tableau">Statut</th>
                        <th scope="col" class="tableau">Modification du statut</th>
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
                            <th scope="row" class="tableau"><?php echo $value['email']; ?></th>
                            <th scope="row" class="tableau"><?php echo $value['statut']; ?></th>
                            <td class="tableau"><?php 
                                if($value['statut'] == 1){
                                    echo "<a href='index.php?page=togglevote&email=".$value['email']."&statut=0'>Unvalidate</a>";
                                }else{ 
                                    echo "<a href='index.php?page=togglevote&email=".$value['email']."&statut=1'>Validate</a>" ;
                                }?></td>
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