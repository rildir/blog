<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Settings
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <table class="table table-hover">
                    <thead>
                        <th>id</th>
                        <th>title</th>
                        <th>about_us</th>
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
                                    <?php echo $item->about_us; ?>
                                </td>
                                <td>
                                    <?php echo $item->mission; ?>
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
                                    <?php echo $item->email; ?>
                                </td>
                                <td>
                                    <?php echo $item->facebook; ?>
                                </td>
                                <td>
                                    <?php echo $item->instagram; ?>
                                </td>
                                <td>
                                    <?php echo $item->github; ?>
                                </td>
                                <td>
                                    <?php echo $item->linkedin; ?>
                                </td>
                                <td>
                                    <?php echo $item->twitter; ?>
                                </td>
                                <td>
                                    <?php echo $item->youtube; ?>
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