<!-- update_view.php -->
<form action="<?=base_url()?>welcome/save_update/<?=$info["id"]?>" method="POST">
    <div class="row">
        <div class="col-lg-12">
            <label for="">First Name</label>
            <input type="text" name="fname" class="form-control" value="<?=isset($info["firstname"]) ? $info["firstname"] : ''?>">
            <span class="text-danger"><?=form_error("fname")?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="">Middle Name</label>
            <input type="text" name="mname" class="form-control" value="<?=isset($info["middlename"]) ? $info["middlename"] : ''?>">
            <span class="text-danger"><?=form_error("mname")?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="">Last Name</label>
            <input type="text" name="lname" class="form-control" value="<?=isset($info["lastname"]) ? $info["lastname"] : ''?>">
            <span class="text-danger"><?=form_error("lname")?></span>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <button class="btn btn-success">Update</button>
        </div>
    </div>
</form>
