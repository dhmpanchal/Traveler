<?php include('header.php') ?>
    <div class="container">
        <h2 class="text-center">Camps List</h2>

        <div class="row mt-5">
            <div class="col-md-12 col-sm-12">
                <a href="<?php echo base_url(); ?>Admin/post_camp" class="btn btn-primary">Add Camps</a>
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
                            <th>Date</th>
                            <th>Price</th>
                            <th>Days</th>
                            <th>Nights</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(count($camps)): ?>
                        <?php $c = $this->uri->segment(3); ?>
                        <?php foreach ($camps as $camp): ?>
                        <tr>
                            <td><?= ++$c; ?></td>
                            <td><?php echo $camp->ctitle; ?></td>
                            <td><?php echo $camp->cdate; ?></td>
                            <td><?php echo $camp->price; ?></td>
                            <td><?php echo $camp->day; ?></td>
                            <td><?php echo $camp->night; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>Admin/update_camp/<?=$camp->id ?>" class="btn btn-primary">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="<?= base_url(); ?>Admin/delete_camp/<?=$camp->id ?>" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">No data found.</td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>   