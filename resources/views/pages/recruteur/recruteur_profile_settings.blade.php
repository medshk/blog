@extends('layouts.recruteur_layout')


@section('content')



<style media="screen">
        #actualite-upload{
          background-image:url('');
          background-size:cover;
          background-position: center;
          height: 250px; width: 250px;
          border: 1px solid #bbb;
          position:relative;
        border-radius:30px;
        overflow:hidden;
        color:#007bff
        }
        #actualite-upload:hover input.upload{
        display:block;
        }
        #actualite-upload:hover .hvr-profile-img{
        display:inline-block;
        }
        #actualite-upload .fa{   margin: auto;
          position: absolute;
          bottom: -4px;
          left: 0;
          text-align: center;
          right: 0;
          padding: 6px;
         opacity:1;
        transition:opacity 1s linear;
         -webkit-transform: scale(.75);


        }
        #actualite-upload:hover .fa{
         opacity:1;
         -webkit-transform: scale(1);
        }
        #actualite-upload input.upload {
          z-index:1;
          left: 0;
          margin: 0;
          bottom: 0;
          top: 0;
          padding: 0;
          opacity: 0;
          outline: none;
          cursor: pointer;
          position: absolute;
          background:#ccc;
          width:100%;
          display:none;
        }

        #actualite-upload .hvr-profile-img {
        width:100%;
        height:100%;
        display: none;
        position:absolute;
        vertical-align: middle;
        position: relative;
        background: transparent;
        }
        #actualite-upload .fa:after {
          content: "";
          position:absolute;
          bottom:0; left:0;
          width:100%; height:0px;
          background:rgba(0,0,0,0.3);
          z-index:-1;
          transition: height 0.3s;
          }

        #actualite-upload:hover .fa:after { height:100%; }
</style>

<div class="profile-title" id="mp">
    <h3>My Profile</h3>


</div>
<div class="profile-form-edit">
  <form method="POST" action="{{url('recruteur/1') }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
        <div class="upload-img-bar">
            <!-- <span><img src="{{$user->logo}}" alt="" /><i>x</i></span>
            <div class="upload-info">
                <a href="#" title="">Browse</a>
                <span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
            </div> -->
            <div id='actualite-upload' @if(isset($user->logo)) style="background-image:url('{{asset($user->logo)}}')" @endif>
              <div class="hvr-profile-img">
                <input type="file" name="img" id='actualite-photo'  class="upload w180" title="Dimensions 180 X 180" id="imag">
              </div>
              <i class="fa fa-camera"> <h4>Importer une photo</h4></i>
            </div>
        </div>






        <div class="row">
            <div class="col-lg-6">
                <span class="pf-title">Company Name</span>
                <div class="pf-field">
                    <input type="text" name="nom" value="{{$user->nom}}" />
                </div>
            </div>
            <div class="col-lg-6">
                <span class="pf-title">Allow In Search</span>
                <div class="pf-field">
                    <select data-placeholder="Please Select Specialism" class="chosen">
                       <option>Web Development</option>
                       <option>Web Designing</option>
                       <option>Art & Culture</option>
                       <option>Reading & Writing</option>
                   </select>
                </div>
            </div>
            <div class="col-lg-3">
                <span class="pf-title">Since</span>
                <div class="pf-field">
                    <input type="text" placeholder="1991" />
                </div>
            </div>
            <div class="col-lg-3">
                <span class="pf-title">Team Size</span>
                <div class="pf-field">
                    <input type="text" placeholder="100 - 201" />
                </div>
            </div>
            <div class="col-lg-6">
                <span class="pf-title">Allow In Search</span>
                <div class="pf-field">
                    <select data-placeholder="Please Select Specialism" class="chosen">
                       <option>Web Development</option>
                       <option>Web Designing</option>
                       <option>Art & Culture</option>
                       <option>Reading & Writing</option>
                   </select>
                </div>
            </div>
            <div class="col-lg-12">
                <span class="pf-title">Categories</span>
                <div class="pf-field no-margin">
                    <ul class="tags">
                      <li class="addedTag">Web Deisgn<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
                       <li class="addedTag">Web Develop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Develop"></li>
                       <li class="addedTag">SEO<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="SEO"></li>
                       <li class="tagAdd taglist">
                              <input type="text" id="search-field">
                       </li>
                   </ul>
               </div>
            </div>
            <div class="col-lg-12">
                <span class="pf-title">Description</span>
                <div class="pf-field">
                    <textarea>Spent several years working on sheep on Wall Street. Had moderate success investing in Yugos on Wall Street. Managed a small team buying and selling pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed severalnew methods for working with banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer ollaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present</textarea>
                </div>
            </div>
            <!-- <div class="col-lg-12">
                <button type="submit">Update</button>
            </div> -->
        </div>
        <h3>Contact</h3>
        <div class="row">
            <div class="col-lg-4">
                <span class="pf-title">Phone Number</span>
                <div class="pf-field">
                    <input type="text" name="num_tel" value="{{$user->num_tel}}" />
                </div>
            </div>
            <div class="col-lg-4">
                <span class="pf-title">Email</span>
                <div class="pf-field">
                    <input type="text" name="email" value="{{$user->email}}" />
                </div>
            </div>
            <div class="col-lg-4">
                <span class="pf-title">Website</span>
                <div class="pf-field">
                    <input type="text" name="website" value="{{$user->site_web}}" />
                </div>
            </div>


        </div>


        <h3>Informations compte</h3>
        <div class="row">

            <div class="col-lg-4">
                <span class="pf-title">Email</span>
                <div class="pf-field">
                    <input type="text" name="email" value="{{$user->email}}" />
                </div>
            </div>
            <div class="col-lg-4">
                <span class="pf-title">Mot de passe actuel</span>
                <div class="pf-field">
                    <input type="password" name="password" value="" required/>
                </div>
            </div>

            <div class="col-lg-4">
                <span class="pf-title">Nouveau mot de passe?</span>
                <div class="pf-field">
                    <input type="password" name="new_password" value="" />
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit">Update</button>
            </div>
        </div>
    </form>
</div>
<!-- <div class="social-edit"  id="sn">
    <h3>Social Edit</h3>
    <form>
        <div class="row">
            <div class="col-lg-6">
                <span class="pf-title">Facebook</span>
                <div class="pf-field">
                    <input type="text" placeholder="www.facebook.com/TeraPlaner" />
                    <i class="fa fa-facebook"></i>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="pf-title">Twitter</span>
                <div class="pf-field">
                    <input type="text" placeholder="www.twitter.com/TeraPlaner" />
                    <i class="fa fa-twitter"></i>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="pf-title">Google</span>
                <div class="pf-field">
                    <input type="text" placeholder="www.google-plus.com/TeraPlaner" />
                    <i class="la la-google"></i>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="pf-title">Linkedin</span>
                <div class="pf-field">
                    <input type="text" placeholder="www.Linkedin.com/TeraPlaner" />
                    <i class="fa fa-linkedin"></i>
                </div>
            </div>
        </div>
    </form>
</div> -->
<!-- <div class="contact-edit" id="ci">

    <form>
        <div class="row">
            <div class="col-lg-4">
                <span class="pf-title">Phone Number</span>
                <div class="pf-field">
                    <input type="text" name="num_tel" placeholder="{{$user->num_tel}}" />
                </div>
            </div>
            <div class="col-lg-4">
                <span class="pf-title">Email</span>
                <div class="pf-field">
                    <input type="text" name="email" placeholder="{{$user->email}}" />
                </div>
            </div>
            <div class="col-lg-4">
                <span class="pf-title">Website</span>
                <div class="pf-field">
                    <input type="text" placeholder="{{$user->site_web}}" />
                </div>
            </div>
            <div class="col-lg-6">
                <span class="pf-title">Country</span>
                <div class="pf-field">
                    <select data-placeholder="Please Select Specialism" class="chosen">
                       <option>Web Development</option>
                       <option>Web Designing</option>
                       <option>Art & Culture</option>
                       <option>Reading & Writing</option>
                   </select>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="pf-title">City</span>
                <div class="pf-field">
                    <select data-placeholder="Please Select Specialism" class="chosen">
                       <option>Web Development</option>
                       <option>Web Designing</option>
                       <option>Art & Culture</option>
                       <option>Reading & Writing</option>
                   </select>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="pf-title">Find On Map</span>
                <div class="pf-field">
                    <input type="text" placeholder="Collins Street West, Victoria 8007, Australia." />
                </div>
            </div>
            <div class="col-lg-3">
                <span class="pf-title">Latitude</span>
                <div class="pf-field">
                    <input type="text" placeholder="41.1589654" />
                </div>
            </div>
            <div class="col-lg-3">
                <span class="pf-title">Longitude</span>
                <div class="pf-field">
                    <input type="text" placeholder="21.1589654" />
                </div>
            </div>
            <div class="col-lg-12">
                <a href="#" title="" class="srch-lctn">Search Location</a>
            </div>
            <div class="col-lg-12">
                <span class="pf-title">Maps</span>
                <div class="pf-map">
                    <div id="map_div"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit">Update</button>
            </div>
        </div>
    </form>
</div> -->
@endsection


@section('scripts')
<script type="text/javascript">
    document.getElementById('actualite-photo').addEventListener('change', readURL, true);
    function readURL(){
      var file = document.getElementById("actualite-photo").files[0];
      var reader = new FileReader();
      reader.onloadend = function(){
          document.getElementById('actualite-upload').style.backgroundImage = "url(" + reader.result + ")";
      }
      if(file){
          reader.readAsDataURL(file);
      }else{
      }
    }
</script>
@endsection
