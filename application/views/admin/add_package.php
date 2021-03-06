<?php include('header.php') ?>
<div class="container">
    <h2 class="text-center">Add package</h2>

    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <form action="<?=base_url('Admin/save_package'); ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="pkg_title">Package Title</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="pkg_title" name="pkg_title" 
                        placeholder="Enter package title">
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
                        placeholder="Enter camp price">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="camp_id">Camps</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <select name="camp_id" id="camp_id" class="form-control">
                            <option value="def">Select Camp</option>
                            <?php foreach($campAll as $c): ?>
                                <option value="<?= $c->id ?>"><?php echo $c->ctitle ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </div>
            </form>
<?php include('footer.php') ?>