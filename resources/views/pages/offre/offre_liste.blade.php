@extends('layouts.static_layout')
@section('navbar')
    @include('include.inc')
@endsection

@section('main')



<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Job List Modern</h3>
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
                         <div class="search_widget_job">
                             <div class="field_w_search" >
                                 <input type="text" id="kword" placeholder="Search Keywords" />
                                 <i class="la la-search"></i>
                                 <div id="kWordList" class="dropdown-menu"></div>
                             </div><!-- Search Widget -->
                            
                             <div class="field_w_search">
                                 <input type="text" id="loc" placeholder="All Locations" />
                                 <i class="la la-map-marker"></i>
                                 <div id="locList" class="dropdown-menu"></div>
                             </div><!-- Search Widget -->
                         </div>
                     </div>
                     <div class="widget">
                         <h3 class="sb-title open">Date Posted</h3>
                         <div class="posted_widget">
                            <input type="radio" name="choose" value="232" class="_date"><label for="232">Last Hour</label><br />
                            <input type="radio" name="choose" value="wwqe" class="_date"><label for="wwqe">Last 24 hours</label><br />
                            <input type="radio" name="choose" value="erewr" class="_date"><label for="erewr">Last 7 days</label><br />
                            <input type="radio" name="choose" value="qwe" class="_date"><label for="qwe">Last 14 days</label><br />
                            <input type="radio" name="choose" value="wqe" class="_date"><label for="wqe">Last 30 days</label><br />
                            <input type="radio" name="choose" value="qweqw" class="_date"><label class="nm" for="qweqw">All</label><br />
                         </div>
                     </div>
                     <div class="widget">
                         <h3 class="sb-title open">Type de Contract</h3>
                         <div class="type_widget">
                            <p class="flchek"><input type="checkbox" name="choosetype" value="freelance" class="_contract"><label for="freelance">Freelance</label></p>
                            <p class="ftchek"><input type="checkbox" name="choosetype" value="cdi" class="_contract"><label for="cdi">CDI</label></p>
                            <p class="ischek"><input type="checkbox" name="choosetype" value="cdd" class="_contract"><label for="cdd">CDD</label></p>
                            <p class="ptchek"><input type="checkbox" name="choosetype" value="stage" class="_contract"><label for="stage">Stage</label></p>
                            
                         </div>
                     </div>
                     <div class="widget">
                         <h3 class="sb-title open">Specialism</h3>
                         <div class="specialism_widget">
                            <div class="field_w_search">
                                 <input type="text" placeholder="Search Spaecialisms" />
                             </div><!-- Search Widget -->
                             <div class="simple-checkbox scrollbar">
                                <p><input type="checkbox" name="spealism" value="accountancy" class="_spc"><label for="as">Accountancy</label></p>
                                <p><input type="checkbox" name="spealism" value="asd" class="_spc"><label for="asd">Banking</label></p>
                                <p><input type="checkbox" name="spealism" value="errwe" class="_spc"><label for="errwe">Web Development</label></p>
                                <p><input type="checkbox" name="spealism" value="fdg" class="_spc"><label for="fdg">Marketing</label></p>
                                <p><input type="checkbox" name="spealism" value="sc" class="_spc"><label for="sc">Estate Agency</label></p>
                        
                             </div>
                         </div>
                     </div>
                     <div class="widget">
                         <h3 class="sb-title closed">Offerd Salary</h3>
                         <div class="specialism_widget">
                             <div class="simple-checkbox">
                                <p><input type="checkbox" name="smplechk" id="1" class="_salaire"><label for="1">10k - 20k</label></p>
                                <p><input type="checkbox" name="smplechk" id="2" class="_salaire"><label for="2">20k - 30k</label></p>
                                <p><input type="checkbox" name="smplechk" id="3" class="_salaire"><label for="3">30k - 40k</label></p>
                                <p><input type="checkbox" name="smplechk" id="4" class="_salaire"><label for="4">40k - 50k</label></p>
                             </div>
                         </div>
                     </div>
                    
                     <div class="widget">
                         <h3 class="sb-title closed">Experince</h3>
                         <div class="specialism_widget">
                             <div class="simple-checkbox">
                                <p><input type="checkbox" name="smplechk" value="1" class="_exp"><label for="9">1Year </label></p>
                                <p><input type="checkbox" name="smplechk" value="2" class="_exp"><label for="10">2Year</label></p>
                                <p><input type="checkbox" name="smplechk" value="3" class="_exp"><label for="11">3Year</label></p>
                                <p><input type="checkbox" name="smplechk" value="4" class="_exp"><label for="12">4Year</label></p>
                             </div>
                         </div>
                     </div>
                    
                     <div class="widget">
                         <div class="subscribe_widget">
                             <h3>Still Need Help ?</h3>
                            <p>Let us now about your issue and a Professional will reach you out.</p>
                            <form>
                                <input placeholder="Enter Valid Email Address" type="text">
                                <button type="submit"><i class="la la-paper-plane"></i></button>
                            </form>
                        </div>
                     </div>
                 </aside>
                 <div class="col-lg-9 column">
                     <div class="modrn-joblist">
                         <div class="tags-bar" id="search_bar">
                             <span>Full Time<i class="close-tag">x</i></span>
                             <span>UX/UI Design<i class="close-tag">x</i></span>
                             <span>Istanbul<i class="close-tag">x</i></span>
                             <span>yooo<i class="close-tag">x</i></span>
                             <div class="action-tags">
                                 <a href="#" title=""><i class="la la-cloud-download"></i> Save</a>
                                 <a href="#" title=""><i class="la la-trash-o"></i> Clean</a>
                             </div>
                         </div><!-- Tags Bar -->
                         <div class="filterbar">
                             <span class="emlthis"><a href="https://grandetest.com/cdn-cgi/l/email-protection#6c09140d011c0009420f0301" title=""><i class="la la-envelope-o"></i> Email me Jobs Like These</a></span>
                             <div class="sortby-sec">
                                 <span>Sort by</span>
                                 <select data-placeholder="Most Recent" class="chosen">
                                    <option>Most Recent</option>
                                    <option>Most Recent</option>
                                    <option>Most Recent</option>
                                    <option>Most Recent</option>
                                </select>
                                <select data-placeholder="20 Per Page" class="chosen">
                                    <option>30 Per Page</option>
                                    <option>40 Per Page</option>
                                    <option>50 Per Page</option>
                                    <option>60 Per Page</option>
                                </select>
                             </div>
                             <h5>98 Jobs & Vacancies</h5>
                         </div>
                     </div><!-- MOdern Job LIst -->
                     <div class="job-list-modern">
                         <div class="job-listings-sec">
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>
                                    <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is ft">Full time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div>
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>
                                    <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is pt ">Part time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                                    <h3><a href="#" title="">Regional Sales Manager South</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is ft ">Full time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                                    <h3><a href="#" title="">Marketing Dairector</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is ft ">Full time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l5.png" alt="" /> </div>
                                    <h3><a href="#" title="">Application Developer</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is pt ">Part time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l6.png" alt="" /> </div>
                                    <h3><a href="#" title="">Social Media and Public</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is fl ">Freelance</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>
                                    <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is pt ">Part time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                                    <h3><a href="#" title="">Regional Sales Manager South</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is ft ">Full time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                                    <h3><a href="#" title="">Marketing Dairector</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is ft ">Full time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l5.png" alt="" /> </div>
                                    <h3><a href="#" title="">Application Developer</a></h3>
                                    <span>Massimo Artemisis</span>
                                    <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                </div>
                                <div class="job-style-bx">
                                    <span class="job-is pt ">Part time</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <i>5 months ago</i>
                                </div>
                            </div><!-- Job -->
                            
                        </div>
                        <div class="viewmore"><span><i></i><i></i><i></i>View More</span></div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</section>
@endsection