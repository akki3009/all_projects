@extends('advertiser.app')

@section('content')
<main>
    <section class="">
       <div class="container-xl">
          <h1 class="title mb-5">Change Password</h1>

          <div class="row justify-content-center">
             <div class="col-md-4 col-xl-5" >

                   <form action="">
                    <div class="form-group relative">
                       <label>Current Password</label>
                       <input class="form-control form-control-lg" type="text" placeholder="Enter Current Password" >
                     </div>
                     <div class="form-group relative">
                       <label>New Password</label>
                       <input class="form-control form-control-lg" type="password" placeholder="Enter New Password" >
                     </div>
                     <div class="form-group relative">
                <label>Confirm Password</label>
                <input class="form-control form-control-lg" type="password" placeholder="Enter Confirm New Password"">
               </div>
                     <div class="form-group pt-3">
                     <button type="submit" class="btn btn-purple rounded-pill btn-block">update</button>
                     </div>

                   </form>

             </div>
          </div>
       </div>
    </section>
 </main>
@endsection
