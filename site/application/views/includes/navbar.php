<div class="m-4 ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <div class="container-fluid">
            <a href="<?php echo base_url(); ?>" class="navbar-brand"><img
                    src="<?php echo base_url('assets/image/' . $settings[0]->logo) ?>" alt=""></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <figcaption class="navbar-nav ms-auto blockquote-footer">
                    <?php if (!empty($settings)): ?>
                        <?php echo $settings[0]->email; ?>
                    <?php endif; ?>
                </figcaption>
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <a href="#" class="nav-item nav-link">Messages</a>
                </div>
            </div>
        </div>
    </nav>
</div>