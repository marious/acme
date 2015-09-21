  @extends('base')

  @section('browsertitle') Acme: Register @stop

    @section('content')
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <h1>Register</h1>

          <hr>

             <form class="form-horizontal" method="post" id="registerform" novalidate>

              <div class="form-group">
                <label for="first_name" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="first_name" placeholder="First Name"
                  name="first_name" >
                </div>
              </div>

              <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="last_name" placeholder="Last Name"
                  name="last_name" >
                </div>
              </div>

               <div class="form-group">
                 <label for="username" class="col-sm-2 control-label">Email</label>
                 <div class="col-sm-10">
                   <input type="email" class="form-control" id="email" placeholder="user@example.com"
                   name="email" >
                 </div>
               </div>

               <div class="form-group">
                 <label for="verify_username" class="col-sm-2 control-label">Verify Email</label>
                 <div class="col-sm-10">
                   <input type="email" class="form-control" id="verify_username" placeholder="user@example.com"
                   name="verify_email" >
                 </div>
               </div>

               <div class="form-group">
                 <label for="password" class="col-sm-2 control-label">Password</label>
                 <div class="col-sm-10">
                   <input type="password" class="form-control" id="password" placeholder="Password"
                   name="password" >
                 </div>
               </div>

               <div class="form-group">
                 <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>
                 <div class="col-sm-10">
                   <input type="password" class="form-control" id="verify_password" placeholder="Verify Password"
                   name="verify_password" >
                 </div>
               </div>

               <hr>

               <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-primary">Register</button>
                 </div>
               </div>
             </form>

        </div>
        <div class="col-md-2">

        </div>
      </div><!-- ./ row -->

  @stop


  @section('footerjs')
    <script>
      $(document).ready(function() {
          $('#registerform').validate({
            rules: {
              first_name: {required: true},
              last_name: {required: true},
              email: {required: true, email: true},
              verify_email: {required: true, email: true, equalTo: "#username"},
              password: {required: true},
              verify_password: {required: true, equalTo: "#password"}
            }
          });

          $('#registerform').on('submit', function() {
            var error = $('div.form-group').siblings('.error').html();
            if (error != '') {
              $('.error').closest('div.form-group').addClass('has-error');
            }
          });

          $('input').on('blur', function() {
              var error = $(this).siblings('.error').html();
              if (error == "") {
                $(this).parents('div.form-group').removeClass('has-error');
              }
          });
      });
    </script>
  @stop