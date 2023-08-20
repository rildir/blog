<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Settings
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <table class="table table-hover table-bordered content-container">
                    <thead>
                        <th>Title</th>
                        <th>About us</th>
                        <th>mission</th>
                        <th>vision</th>
                        <th>logo</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>facebook</th>
                        <th>instagram</th>
                        <th>github</th>
                        <th>linkedin</th>
                        <th>twitter</th>
                        <th>youtube</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="sortable" data-url="">
                        <?php foreach ($items as $item) { ?>
                            <tr>
                                <td>
                                    <?php echo substr($item->title, 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($item->about_us, 0, 40); ?>
                                    <?php if (strlen($item->about_us) > 40) { ?>
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
                                                        <?php echo $item->about_us; ?>
                                                        <a href="<?php echo base_url("settings/update_settings/$item->id") ?>">
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
                                    <?php echo substr($item->mission, 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo $item->vision; ?>
                                </td>
                                <td>
                                    <?php echo $item->logo; ?>
                                </td>
                                <td>
                                    <?php echo $item->phone; ?>
                                </td>
                                <td>
                                    <?php echo substr($item->email, 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($item->facebook, 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($item->instagram, 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($item->github, 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($item->linkedin, 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($item->twitter, 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($item->youtube, 0, 10); ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url("settings/update_settings/$item->id") ?>">
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