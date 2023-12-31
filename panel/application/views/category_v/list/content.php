<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Category List
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <a href="<?php echo base_url("category/new_category") ?>">Add new</a>
                <table class="table table-hover table-bordered content-container">
                    <thead>
                        <th>id</th>
                        <th>title</th>
                        <th>seo-url</th>
                        <th>action</th>
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
                                    <?php echo $item->seo_url; ?>
                                </td>
                                <td>

                                    <button data-url="<?php echo base_url("category/delete/$item->id") ?>" type="button"
                                        class="btn btn-xs btn-danger remove-btn"><i class="fa fa-trash"></i>
                                        Delete
                                    </button>


                                    <a href="<?php echo base_url("category/update_category/$item->id") ?>">
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