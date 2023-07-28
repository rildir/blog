<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "You are editing " . "<b>$item->title</b>" ?>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action=" <?php echo base_url("/post/update/$item->id") ?> " method="POST">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" value="<?php echo $item->title ?>" name="title">
                    </div>
                    <div class="form-group">
                        <label>Seo-url</label>
                        <input type="text" disabled class="form-control" value="<?php echo $item->seo_url ?>"
                            name="seo_url">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <!-- <input type="text" class="form-control" placeholder="Description" name="description"> -->

                        <textarea id="summernote" name="description" class="m-0" data-plugin="summernote"
                            data-options="{height: 250}">
                            <?php echo $item->description ?></textarea>
                        <script>
                            $('#summernote').summernote({
                                placeholder: 'Description',
                                tabsize: 2,
                                height: 100
                            });
                        </script>
                        <?php if (isset($form_error)) { ?>
                            <small class=" input-form-error">
                                <?php echo form_error("description"); ?>
                            </small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" value="<?php echo $item->img_url ?>" name="img_url">
                        <!-- <input type="text" class="form-control" value="<?php echo $item->img_url ?>" name="img_url"> -->

                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Update</button>
                    <a href="<?php echo base_url("post") ?>" class="btn btn-md btn-danger btn-outline">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>