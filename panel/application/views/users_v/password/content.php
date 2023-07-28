<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "You are changing the password for the <b>$item->full_name</b> recording"; ?>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("users/update_password/$item->id"); ?>" method="post">

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" placeholder="Password" name="password">
                        <?php if (isset($form_error)) { ?>
                            <small class="pull-right input-form-error">
                                <?php echo form_error("password"); ?>
                            </small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Password Repeat</label>
                        <input class="form-control" type="password" placeholder="Password Repeat" name="re_password">
                        <?php if (isset($form_error)) { ?>
                            <small class="pull-right input-form-error">
                                <?php echo form_error("re_password"); ?>
                            </small>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Update</button>
                    <a href="<?php echo base_url("users"); ?>" class="btn btn-md btn-danger btn-outline">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>