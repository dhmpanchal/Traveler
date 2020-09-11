<?php include('header.php'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <h2 class="text-center">Camps</h2>
        </div>
    </div>
    <div class="row mt-2 max-auto">
        <div class="col-md-12 col-sm-12 max-auto">
            <div class="row">
                <?php foreach($camps as $camp): ?>
                <div class="col-md-4 col-sm-4 max-auto">
                    <div class="card max-auto" style="width: 18rem;">
                        <img src="<?php echo $camp->cimage; ?>" 
                        class="card-img-top" alt="..." width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $camp->ctitle; ?></h5>
                            <p class="card-text"><b>Rs. </b><?php echo $camp->price; ?></p>
                            <a href="<?php echo base_url() ?>HomeController/camp_details/<?=$camp->id ?>" class="btn btn-primary btn-sm">Compare Now</a>
                        </div>
                    </div> 
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>