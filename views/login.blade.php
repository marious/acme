@extends('base')

    @section('browsertitle') Acme: Login @stop

      @section('content')
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <h1>Log In</h1>
          <hr>

          <form action="" method="POST" class="form-horizontal" role="form">
               <div class="form-group">
                 <label for="username" class="col-sm-2 control-label">Email</label>
                 <div class="col-sm-10">
                   <input type="email" class="form-control" id="username" placeholder="user@example.com">
                 </div>
               </div>
               <div class="form-group">
                 <label for="password" class="col-sm-2 control-label">Password</label>
                 <div class="col-sm-10">
                   <input type="password" class="form-control" id="password" placeholder="Password">
                 </div>
               </div>

               <hr>

               <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-primary">Sign in</button>
                   <a href="register" class="btn btn-default">Register</a>
                 </div>
               </div>
             </form>

        </div>
        <div class="col-md-2">

        </div>
      </div><!-- ./ row -->

      @stop
