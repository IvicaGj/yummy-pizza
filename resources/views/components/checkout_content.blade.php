<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="{{ url('/create') }}">
                @csrf
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                        <label>Address</label>
                        <input id="address" type="text" class="form-control" placeholder="Address" name="address" required>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                        <label>City</label>
                        <input id="city" type="text" class="form-control" placeholder="City" name="city" required>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                        <label>Zip Code</label>
                        <input id="zipcode" type="number" class="form-control" placeholder="12345" name="zipcode" required>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                        <label>Phone Number</label>
                        <input id="phonenumber" type="tel" class="form-control" placeholder="Phone Number" name="phonenumber" required>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>
        </div>
    </div>
</div>