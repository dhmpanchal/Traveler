<?php include('header.php') ?>
<div class="container">
    <h2 class="text-center">Add Camps</h2>

    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <form action="<?=base_url('Admin/save_camp'); ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="ctitle">Camp Title</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="ctitle" name="ctitle" 
                        placeholder="Enter camp title">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="cdesc">Camp Description</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <textarea class="form-control" id="cdesc" name="cdesc" rows="10" cols="75" placeholder="Type Here...">
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="cimage">Camp Image</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="file" class="form-control" id="cimage" name="cimage" 
                        >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="cdate">Camp Date</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="date" class="form-control" id="cdate" name="cdate" 
                        placeholder="Enter camp date">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="price">Camp Price</label>
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
                            <label for="day">No of Days</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="day" name="day" 
                        placeholder="Enter No of Days">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="night">No of Nights</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="night" name="night" 
                        placeholder="Enter No of Nights">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="night">Is Popular</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="checkbox" id="is_popular" name="is_popular" value="1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="active">Is Active</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="checkbox" id="active" name="active" value="1">
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
        </div>
    </div>
</div>

<?php include('footer.php') ?>   