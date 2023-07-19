<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "You are editing " . "<b>$item->title</b>" ?>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action=" <?php echo base_url("/dashboard/update/$item->id") ?> " method="POST">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" value="<?php echo $item->title ?>" name="title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" value="<?php echo $item->description ?>"
                            name="description">
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Save</button>
                    <a href="<?php echo base_url("dashboard") ?>" class="btn btn-md btn-danger btn-outline">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>