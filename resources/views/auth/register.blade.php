
@extends('admin.layouts.app')
@section('meta_title','game')

@include('admin.includes.navbar')
@include('admin.includes.leftbar')



<section class="login-block" style="margin-top: 100px;">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material">
                    <div class="text-center">
                        <img src="assets/images/logo.png" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="user-name" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Choose Username</label>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Your Email Address</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="confirm-password" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="index.html"><b>Back to website</b></a></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>
@section('style')
    
@endsection
@section('script')
    
@endsection
