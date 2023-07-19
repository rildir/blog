<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "You are editing " . "<b>$item->title</b>" ?>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action=" <?php echo base_url("/settings/update/$item->id") ?> " method="POST">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" value="<?php echo $item->title ?>" name="title">
                    </div>
                    <div class="form-group">
                        <label>About us</label>
                        <input type="text" class="form-control" value="<?php echo $item->about_us ?>" name="about_us">
                    </div>
                    <div class="form-group">
                        <label>Mission</label>
                        <input type="text" class="form-control" value="<?php echo $item->mission ?>" name="mission">
                    </div>
                    <div class="form-group">
                        <label>Vision</label>
                        <input type="text" class="form-control" value="<?php echo $item->vision ?>" name="vision">
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="text" class="form-control" value="<?php echo $item->logo ?>" name="logo">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" value="<?php echo $item->phone ?>" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" value="<?php echo $item->email ?>" name="email">
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" value="<?php echo $item->facebook ?>" name="facebook">
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" value="<?php echo $item->instagram ?>" name="instagram">
                    </div>
                    <div class="form-group">
                        <label>Github</label>
                        <input type="text" class="form-control" value="<?php echo $item->github ?>" name="github">
                    </div>
                    <div class="form-group">
                        <label>Linkedin</label>
                        <input type="text" class="form-control" value="<?php echo $item->linkedin ?>" name="linkedin">
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" class="form-control" value="<?php echo $item->twitter ?>" name="twitter">
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>
                        <input type="text" class="form-control" value="<?php echo $item->youtube ?>" name="youtube">
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Save</button>
                    <a href="<?php echo base_url("settings") ?>" class="btn btn-md btn-danger btn-outline">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>