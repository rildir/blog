<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action=" <?php echo base_url("/post/image_upload/$item->id") ?>" class="dropzone"
                    id="my-great-dropzone">
                </form>

                <script>
                    Dropzone.options.myGreatDropzone = { // camelized version of the `id`
                        paramName: "file", // The name that will be used to transfer the file
                        maxFilesize: 2, // MB
                        accept: function (file, done) {
                            if (file.name == "justinbieber.jpg") {
                                done("Naha, you don't.");
                            }
                            else { done(); }
                        }
                    };
                </script>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <b>
                <?php echo $item->title; ?>
            </b> kaydına ait Resimler
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body image_list_container">
                <?php $this->load->view("{$viewFolder}/{$subViewFolder}/render_elements/image_list_v"); ?>
            </div>
        </div>
    </div>
</div>