 @extends('admin.index')      
  @section('content')

<div class="container-fluid">


      <div class="row">
        <div class="col-md-12">
          <form method="post" action="https://material-dashboard-laravel.creative-tim.com/profile" autocomplete="off" class="form-horizontal">
            <input type="hidden" name="_token" value="2135U7L0SyXaFJQ2U6L5BkL5wtwSbC4t1KBOEf3B">            <input type="hidden" name="_method" value="put">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">User information</p>
              </div>
              <div class="card-body ">
                                                <div class="row">
                  <label class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group is-filled">
                      <input class="form-control" name="name" id="input-name" type="text" placeholder="Name" value="Admin Admin" required="true" aria-required="true">
                                          </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group is-filled">
                      <input class="form-control" name="email" id="input-email" type="email" placeholder="Email" value="admin@material.com" required="">
                                          </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="https://material-dashboard-laravel.creative-tim.com/profile/password" class="form-horizontal">
            <input type="hidden" name="_token" value="2135U7L0SyXaFJQ2U6L5BkL5wtwSbC4t1KBOEf3B">            <input type="hidden" name="_method" value="put">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Change password</h4>
                <p class="card-category">Password</p>
              </div>
              <div class="card-body ">
                                                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">Current Password</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" input="" type="password" name="old_password" id="input-current-password" placeholder="Current Password" value="" required="">
                                          </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">New Password</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="password" id="input-password" type="password" placeholder="New Password" value="" required="">
                                          </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">Confirm New Password</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="Confirm New Password" value="" required="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Change password</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  @endsection