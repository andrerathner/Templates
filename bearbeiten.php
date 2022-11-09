<?php include "components/default/pagetop.php"; ?>
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">

        <!-- Total Revenue -->
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-12">
                        <h5 class="card-header m-0 me-2 pb-3">Neue Firma erstellen</h5>

                        <div style="margin: 5px">
                            <form class="d-flex" method="post">
                                <input class="form-control me-2" type="text" placeholder="Firmenname"
                                    aria-label="firmenname" name="firmenname">
                                <select class="form-select" name="Ort" placeholder="Ort" value="">
                                    <option value="0" disabled selected>Select your option</option>
                                    <option value="1" >Wels</option>
                                    <option value="2" >Linz</option>
                                </select> 
                                
                                

                                <button class="btn btn-outline-info" type="submit">Hinzufügen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?php include "components/default/pagebottom.php"; ?>