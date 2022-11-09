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
                        $stmt2 = makeTableSelectHightlightId("CALL FirmenstammAlle();","rad",$PostId );

                        $stmt2->closeCursor();
                    ?>

                    <button type="submit" class="btn btn-info">Details Anzeigen</button>
                </form>
            </div>


        </div>

        <?php 
        if(isset($_POST["rad"])){ ?>

        <!-- Hauptdetails -->
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <h5 class="card-header">Immobilien-Details</h5>

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
                <h5 class="card-header">Heizen/Wasser</h5>

                <?php 
                    $stmt4 = makeList("CALL GetFirma(?)",[$_POST["rad"]]);
                    
                    $stmt4->CloseCursor(); 
                ?>

            </div>

        <?php }?>
        

    </div>
</div>

</div>
<!-- / Content -->

<?php include "components/default/pagebottom.php"; ?>