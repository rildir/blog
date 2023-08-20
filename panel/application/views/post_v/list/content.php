<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Post List
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body table-responsive">
                <a href="<?php echo base_url("post/new_post") ?>">Add new</a>
                <table class="table table-hover table-bordered content-container">
                    <thead>
                        <th>id</th>
                        <th>title</th>
                        <th>category</th>
                        <th>highlights</th>
                        <th>github_link</th>
                        <th>creator</th>
                        <th>url_link</th>
                        <th>description</th>
                        <th>created</th>
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
                                    <?php echo $item->username; ?>
                                </td>
                                <td>
                                    <?php echo substr($item->url_link, 0, 40); ?>
                                    <?php if (strlen($item->url_link) > 40) { ?>
                                        <a href="#" data-toggle="modal" data-target="#urlModal-<?php echo $item->id; ?>">...
                                            More</a>
                                        <div class="modal fade" id="urlModal-<?php echo $item->id; ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="urlModalLabel-<?php echo $item->id; ?>">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 style="display: inline-block; margin: 0; line-height: 1.428571429;"
                                                            id="urlModalLabel-<?php echo $item->id; ?>">URL
                                                            Link</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo $item->url_link; ?>
                                                        <a href="<?php echo base_url("post/update_post/$item->id") ?>">
                                                            <button type="button" class="btn btn-xs btn-warning"
                                                                style="display:block; margin-top: 1.2rem;">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                                Edit
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php echo substr($item->description, 0, 40); ?>
                                    <?php if (strlen($item->description) > 40) { ?>
                                        <a href="#" data-toggle="modal" data-target="#urlModal-<?php echo $item->id; ?>">...
                                            More</a>
                                        <div class="modal fade" id="urlModal-<?php echo $item->id; ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="urlModalLabel-<?php echo $item->id; ?>">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 style="display: inline-block; margin: 0; line-height: 1.428571429;"
                                                            id="urlModalLabel-<?php echo $item->id; ?>">
                                                            Description</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo $item->description; ?>
                                                        <a href="<?php echo base_url("post/update_post/$item->id") ?>">
                                                            <button type="button" class="btn btn-xs btn-warning"
                                                                style="display:block;">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                                Edit
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php echo convert_to_utc_plus_3($item->createdAt); ?>
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