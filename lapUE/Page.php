<?php include "components/default/pagetop.php"; ?>
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">

        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <h5 class="card-header">Alle Immobilien</h5>
                <form method="post">
                    <?php 
                        if(isset($_POST["rad"])){
                            $PostId = $_POST["rad"];
                        }else{
                            $PostId = -1;
                        }
                        $stmt2 = makeTableSelect("CALL FirmenstammAlle();","rad");

                        $stmt2->closeCursor();

                        
                    ?>

                    <button type="submit" class="btn btn-info" name="btn-info">Details Anzeigen</button>
                    <button type="submit" class="btn btn-info" name="btn-loeschen">Auswahl Löschen</button>
                    <button type="submit" class="btn btn-info" name="btn-bearbeiten">Auswahl bearbeiten</button>
                    <button type="submit" class="btn btn-info" name="btn-hinzufuegen">Neues Hinzufügen</button>
                    </form>   
                <!--<form method="post">


                </form>-->
            </div>
        </div>

        <?php 
        if(isset($_POST['btn-info'])){ ?>

        <!-- Hauptdetails -->
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <h5 class="card-header">Firmen-Details</h5>

                 <?php
                    $stmt3 = makeTable("CALL GetFirma(?)",[$_POST["rad"]]);

                    $stmt3->CloseCursor();
                 ?>
                

            </div>
        </div>

        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <h5 class="card-header">Darstellung</h5>
        

        </div>
        </div>

        <!-- Heizung -->
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <h5 class="card-header">Anderes Liste</h5>

                <?php 
                    $stmt4 = makeList("CALL GetFirma(?);", [$_POST["rad"]]);
                    
                    $stmt4->CloseCursor(); 
                    $POST = array();
                ?>

            </div>

        
        <?php }?>
        
        <?php 
        if(isset($_POST['btn-loeschen'])){ ?>
            <?php

                $stmt5 = makeStatement("delete from firmenstamm where idFirmenstamm = ?", [$_POST["rad"]]);

                $stmt5->CloseCursor(); 
                $POST = array();
                echo "<meta http-equiv='refresh' content='0'>";
            ?>
        <?php }?>

        <?php
        if(isset($_POST['btn-hinzufuegen'])){ ?>

            <?php

            ?>

        <?php }?>
    </div>
</div>

</div>
<!-- / Content -->

<?php include "components/default/pagebottom.php"; ?>