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
                        <th>category</th>
                        <th>highlights</th>
                        <th>github_link</th>
                        <th>url_link</th>
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
                                    <?php echo $item->post_category; ?>
                                </td>
                                <td>
                                    <?php echo $item->highlights; ?>
                                </td>
                                <td>
                                    <?php echo $item->github_link; ?>
                                </td>
                                <td>
                                    <?php echo $item->url_link; ?>
                                </td>
                                <td>
                                    <?php echo substr($item->description, 0, 100); ?>
                                    <?php if (strlen($item->description) > 100)
                                        echo "..."; ?>
                                </td>
                                <td>
                                    <img class="post_images" src="<?php echo base_url("uploads/post_v/$item->img_url") ?>"
                                        alt="<?php echo base_url("uploads/post_v/$item->img_url") ?>">
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
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>