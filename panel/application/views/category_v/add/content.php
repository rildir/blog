<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Add New Category
        </h4>
    </div>
    <div class="col-md-12">
        <!-- yeni ürün ekleme -->
        <div class="widget">
            <div class="widget-body">
                <form action=" <?php echo base_url("/category/save") ?> " method="POST">
                    <div class="form-group">
                        <label>Title</label>
                        <input type=" text" class="form-control" placeholder="Title" name="title">
                        <?php if (isset($form_error)) { ?>
                            <small class=" input-form-error">
                                <?php echo form_error("title"); ?>
                            </small>
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Save</button>
                    <a href="<?php echo base_url("category") ?>" class="btn btn-md btn-danger btn-outline">Cancel</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>