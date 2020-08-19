<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form name="sentMessage" id="contactForm" novalidate="">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls floating-label-form-group-with-value warning">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" required="" data-validation-required-message="Please enter your email address." aria-invalid="true">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls floating-label-form-group-with-value">
                        <label>Password</label>
                        <input type="tel" class="form-control" placeholder="Password" id="password" required="" data-validation-required-message="Please enter your phone number." aria-invalid="false">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Log in</button>
            </form>
        </div>
    </div>
</div>
