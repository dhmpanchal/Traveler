<?php include('header.php') ?>
<div class="container">
        <h2 class="text-center">Package List</h2>

        <div class="row mt-5">
            <div class="col-md-12 col-sm-12">
                <a href="<?php echo base_url(); ?>Admin/post_package" class="btn btn-primary">Add package</a>
            </div>
        </div>

        <?php if($msg = $this->session->flashdata('sucess')): ?>
        <div class="row">
            <div class="col-lg-6 alert alert-success" style="margin-top:40px;">
            <?php echo $msg; ?>
            </div>
        </div>
        <?php elseif($msg = $this->session->flashdata('error')): ?>
            <div class="row">
            <div class="col-lg-6 alert alert-danger" style="margin-top:40px;">
                <?php echo $msg; ?>
            </div>
            </div>
        <?php endif; ?>

        <div class="row mt-5">
            <div class="col-md-12 col-sm-12">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                             </tr>
                    </thead>
                   

<?php include('footer.php') ?>   