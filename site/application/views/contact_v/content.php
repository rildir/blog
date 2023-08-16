<section class="contact-form">
    <div class="row">
        <div class="col-md-12 mb-md-0 mb-5">
            <h2 class="h1-responsive font-weight-bold text-center contact-title">Contact</h2>

            <form class="mb-4 px-4" action="<?php echo base_url("send-message") ?>" method="POST">

                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2"
                                class="form-control md-textarea"></textarea>
                        </div>
                    </div>
                </div>

                <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </div>
            </form>

            <div class="status"></div>
        </div>
    </div>

</section>