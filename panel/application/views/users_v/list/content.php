<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            User List
            <a href="<?php echo base_url("users/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right">
                <i class="fa fa-plus"></i> Add User</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>There is no data available here. Please <a href="<?php echo base_url("users/new_form"); ?>">click
                            here to add</a></p>
                </div>

            <?php } else { ?>

                <table class="table table-hover table-bordered content-container">
                    <thead>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Job</th>
                        <th>Process</th>
                    </thead>
                    <tbody>

                        <?php foreach ($items as $item) { ?>

                            <tr>
                                <td>
                                    <?php echo $item->full_name; ?>
                                </td>
                                <td class=>
                                    <?php echo $item->email; ?>
                                </td>
                                <td class=>
                                    <?php echo $item->job; ?>
                                </td>
                                <td class="text-center w300">
                                    <button data-url="<?php echo base_url("users/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                    <a href="<?php echo base_url("users/update_form/$item->id"); ?>"
                                        class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
                                        Edit</a>
                                    <a href="<?php echo base_url("users/update_password_form/$item->id"); ?>"
                                        class="btn btn-sm btn-purple btn-outline"><i class="fa fa-key"></i> Change Password</a>
                                </td>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            <?php } ?>

        </div>
    </div>
</div>