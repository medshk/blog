@extends('layouts.static_layout')


@section('navbar')
@include('include.inc')


@endsection

<!-- static recruteur dashboard -->
@section('main')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Bienvenue {{$user->nom}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block no-padding">
        <div class="container">
             <div class="row no-gape">
                 <aside class="col-lg-3 column border-right">
                     <div class="widget">
                         <div class="tree_widget-sec">
                             <ul>
                                 <li><a href="employer_profile.html" title=""><i class="la la-file-text"></i>Company Profile</a></li>
                                 <li><a href="employer_manage_jobs.html" title=""><i class="la la-briefcase"></i>Manage Jobs</a></li>
                                 <li><a href="employer_transactions.html" title=""><i class="la la-money"></i>Transactions</a></li>
                                 <li><a href="employer_resume.html" title=""><i class="la la-paper-plane"></i>Resumes</a></li>
                                 <li><a href="employer_packages.html" title=""><i class="la la-user"></i>Packages</a></li>
                                 <li><a href="employer_post_new.html" title=""><i class="la la-file-text"></i>Post a New Job</a></li>
                                 <li><a href="employer_job_alert.html" title=""><i class="la la-flash"></i>Job Alerts</a></li>
                                 <li><a href="employer_change_password.html" title=""><i class="la la-lock"></i>Change Password</a></li>
                                 <li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
                             </ul>
                         </div>
                     </div>
                 </aside>
                 <div class="col-lg-9 column">
                     <div class="padding-left">

                             @yield('content')

                     </div>
                </div>
             </div>
        </div>
    </div>
</section>
@endsection
