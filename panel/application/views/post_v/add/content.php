<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Add New Post
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action=" <?php echo base_url("/post/save") ?> " method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title">
                        <?php if (isset($form_error)) { ?>
                            <small class=" input-form-error">
                                <?php echo form_error("title"); ?>
                            </small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="summernote" name="description" class="m-0" data-plugin="summernote"
                            data-options="{height: 250}"></textarea>
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
                        <input type="file" class="form-control" placeholder="Image" name="file">

                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Save</button>
                    <a href="<?php echo base_url("post") ?>" class="btn btn-md btn-danger btn-outline">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>