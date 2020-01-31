@extends('layouts.candidate_layout')

@section('content')
<div class="manage-jobs-sec">
<h3>Candidates Dashboard</h3>
<div class="cat-sec">
   <div class="row no-gape">
       <div class="col-lg-4 col-md-4 col-sm-12">
           <div class="p-category">
               <a href="#" title="">
                   <i class="la la-briefcase"></i>
                   <span>Applied Job</span>
                   <p>14 Applications</p>
               </a>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12">
           <div class="p-category">
               <a href="{{url('resume')}}" title="">
                   <i class="la la-eye"></i>
                   <span>Voir mes CV</span>
                 
               </a>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12">
           <div class="p-category">
               <a href="{{url('resumevide')}}" title="">
                   <i class="la la-file-text "></i>
                   <span>Crée un CV</span>
                   <p>Create New Resume</p>
               </a>
           </div>
       </div>
   </div>
</div>
<div class="cat-sec">
   <div class="row no-gape">
       <div class="col-lg-4 col-md-4 col-sm-12">
           <div class="p-category">
               <a href="#" title="">
                   <i class="la la-check"></i>
                   <span>Appropriate For Me</span>
                   <p>(05 Jobs)</p>
               </a>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12">
           <div class="p-category follow-companies-popup">
               <a href="#" title="">
                   <i class="la la-user"></i>
                   <span>Follow Companies</span>
                   <p>56 Companies</p>
               </a>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12">
           <div class="p-category">
               <a href="{{url('profil')}}" title="">
                   <i class="la la-file"></i>
                   <span>My Profile</span>
                   <p>View Profile</p>
               </a>
           </div>
       </div>
   </div>
</div>
</div>
@endsection