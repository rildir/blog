<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Dashboard
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <a href="<?php echo base_url("dashboard/new_todo") ?>">Add new</a>
                <table class="table table-hover table-bordered content-container">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
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

                                    <button data-url="<?php echo base_url("dashboard/delete/$item->id") ?>" type="button"
                                        class="btn btn-xs btn-danger remove-btn"><i class="fa fa-trash"></i>
                                        Delete
                                    </button>


                                    <a href="<?php echo base_url("dashboard/update_todo/$item->id") ?>">
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