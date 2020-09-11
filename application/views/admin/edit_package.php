<?php include('header.php') ?>
<?php foreach($getPackageById as $value): ?>
<div class="container">
    <h2 class="text-center">Edit Package</h2>

    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <form action="<?=base_url('Admin/edit_package'); ?>/<?=$value->id ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="pkg_title">Package Title</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="pkg_title" name="pkg_title" 
                        placeholder="Enter package title" value="<?=set_value('pkg_title',$value->pkg_title); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="pkg_desc">Package Description</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <textarea class="form-control" id="pkg_desc" name="pkg_desc" rows="10" cols="75" placeholder="Type Here...">
                        <?=set_value('pkg_desc',$value->pkg_desc); ?>
                        </textarea>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="price">Package Price</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="price" name="price" 
                        placeholder="Enter package price" value="<?=set_value('price',$value->price); ?>">
                    </div>
                </div>
        
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php include('footer.php') ?>   