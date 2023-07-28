<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Post List
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <a href="<?php echo base_url("post/new_post") ?>">Add new</a>
                <table class="table table-hover table-bordered content-container">
                    <thead>
                        <th>id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>img_url</th>
                    </thead>
                    <tbody class="sortable" data-url="">
                        <?php foreach ($items as $item) { ?>
                            <tr>
                                <td>
                                    <?php echo $item->id; ?>
                                </td>
                                <td>
                                    <?php echo $item->title; ?>
                                </td>
                                <td>
                                    <?php echo $item->description; ?>
                                </td>
                                <td>
                                    <?php echo $item->img_url; ?>
                                </td>
                                <td>

                                    <button data-url="<?php echo base_url("post/delete/$item->id") ?>" type="button"
                                        class="btn btn-xs btn-danger remove-btn"><i class="fa fa-trash"></i>
                                        Delete
                                    </button>


                                    <a href="<?php echo base_url("post/update_post/$item->id") ?>">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <i class="fa fa-pencil-square-o"></i>
                                            Edit
                                        </button>
                                    </a>
                                    <a href="<?php echo base_url("post/image_form/$item->id"); ?>"
                                        class="btn btn-sm btn-dark btn-outline"><i class="fa fa-image"></i> Resimler</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>