@extends('layouts.static_layout')

@section('navbar')
    @include('navbar')
@endsection
@section('main')
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Employer</h3>
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
                             <div class="field_w_search">
                                 <input type="text" placeholder="Search Keywords" />
                                 <i class="la la-search"></i>
                             </div><!-- Search Widget -->
                             <div class="field_w_search">
                                 <input type="text" placeholder="All Locations" />
                                 <i class="la la-map-marker"></i>
                             </div><!-- Search Widget -->
                         </div>
                     </div>
                     <div class="widget">
                         <h3 class="sb-title open">Specialism</h3>
                         <div class="specialism_widget">
                             <div class="simple-checkbox">
                                <p><input type="checkbox" name="spealism" id="as"><label for="as">Accountancy (2)</label></p>
                                <p><input type="checkbox" name="spealism" id="asd"><label for="asd">Banking (2)</label></p>
                                <p><input type="checkbox" name="spealism" id="errwe"><label for="errwe">Charity & Voluntary (3)</label></p>
                                <p><input type="checkbox" name="spealism" id="fdg"><label for="fdg">Digital & Creative (4)</label></p>
                                <p><input type="checkbox" name="spealism" id="sc"><label for="sc">Estate Agency (3)</label></p>
                                <p><input type="checkbox" name="spealism" id="aw"><label for="aw">Graduate (2)</label></p>
                                <p><input type="checkbox" name="spealism" id="ui"><label for="ui">IT Contractor (7)</label></p>
                             </div>
                         </div>
                     </div>
                     <div class="widget">
                         <h3 class="sb-title open">Team Size</h3>
                         <div class="specialism_widget">
                             <div class="simple-checkbox">
                                <p><input type="checkbox" name="spealism" id="t1"><label for="t1">1 - 10</label></p>
                                <p><input type="checkbox" name="spealism" id="t2"><label for="t2">100 - 200</label></p>
                                <p><input type="checkbox" name="spealism" id="t3"><label for="t3">201 - 301</label></p>
                                <p><input type="checkbox" name="spealism" id="t4"><label for="t4">301 - 401</label></p>
                                <p><input type="checkbox" name="spealism" id="t5"><label for="t5">401 - 501</label></p>
                                <p><input type="checkbox" name="spealism" id="t6"><label for="t6">501 - 601</label></p>
                                <p><input type="checkbox" name="spealism" id="t7"><label for="t7">601 - 701</label></p>
                             </div>
                         </div>
                     </div>
                 </aside>
                 <div class="col-lg-9 column">
                     <div class="emply-list-sec">
                         <div class="emply-list">
                             <div class="emply-list-thumb">
                                 <a href="#" title=""><img src="images/resource/em1.jpg" alt="" /></a>
                             </div>
                             <div class="emply-list-info">
                                 <div class="emply-pstn">4 Open Position</div>
                                 <h3><a href="#" title="">King LLC</a></h3>
                                 <span>Accountancy, Human Resources</span>
                                 <h6><i class="la la-map-marker"></i> Toronto, Ontario</h6>
                                 <p>The Heavy Equipment / Grader Operator  is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move,…</p>
                             </div>
                         </div><!-- Employe List -->
                         <div class="emply-list">
                             <div class="emply-list-thumb">
                                 <a href="#" title=""><img src="images/resource/em2.jpg" alt="" /></a>
                             </div>
                             <div class="emply-list-info">
                                 <div class="emply-pstn">4 Open Position</div>
                                 <h3><a href="#" title="">Telimed</a></h3>
                                 <span>Accounting Assistant, Arts, Design, and Media</span>
                                 <h6><i class="la la-map-marker"></i> Toronto, Ontario</h6>
                                 <p>The Heavy Equipment / Grader Operator  is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move,…</p>
                             </div>
                         </div><!-- Employe List -->
                         <div class="emply-list">
                             <div class="emply-list-thumb">
                                 <a href="#" title=""><img src="images/resource/em3.jpg" alt="" /></a>
                             </div>
                             <div class="emply-list-info">
                                 <div class="emply-pstn">4 Open Position</div>
                                 <h3><a href="#" title="">Ucess</a></h3>
                                 <span>Arts, Design, and Media, Web Developer</span>
                                 <h6><i class="la la-map-marker"></i> Toronto, Ontario</h6>
                                 <p>The Heavy Equipment / Grader Operator  is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move,…</p>
                             </div>
                         </div><!-- Employe List -->
                         <div class="emply-list">
                             <div class="emply-list-thumb">
                                 <a href="#" title=""><img src="images/resource/em4.jpg" alt="" /></a>
                             </div>
                             <div class="emply-list-info">
                                 <div class="emply-pstn">4 Open Position</div>
                                 <h3><a href="#" title="">Airbnb</a></h3>
                                 <span>Arts, Design, and Media</span>
                                 <h6><i class="la la-map-marker"></i> Toronto, Ontario</h6>
                                 <p>The Heavy Equipment / Grader Operator  is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move,…</p>
                             </div>
                         </div><!-- Employe List -->
                         <div class="emply-list">
                             <div class="emply-list-thumb">
                                 <a href="#" title=""><img src="images/resource/em5.jpg" alt="" /></a>
                             </div>
                             <div class="emply-list-info">
                                 <div class="emply-pstn">4 Open Position</div>
                                 <h3><a href="#" title="">TeraPlaner</a></h3>
                                 <span>Financial Services, Sales & Marketing</span>
                                 <h6><i class="la la-map-marker"></i> Toronto, Ontario</h6>
                                 <p>The Heavy Equipment / Grader Operator  is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move,…</p>
                             </div>
                         </div><!-- Employe List -->
                         <div class="emply-list">
                             <div class="emply-list-thumb">
                                 <a href="#" title=""><img src="images/resource/em6.jpg" alt="" /></a>
                             </div>
                             <div class="emply-list-info">
                                 <div class="emply-pstn">4 Open Position</div>
                                 <h3><a href="#" title="">King LLC</a></h3>
                                 <span>Accountancy, Human Resources</span>
                                 <h6><i class="la la-map-marker"></i> Toronto, Ontario</h6>
                                 <p>The Heavy Equipment / Grader Operator  is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move,…</p>
                             </div>
                         </div><!-- Employe List -->
                         <div class="emply-list">
                             <div class="emply-list-thumb">
                                 <a href="#" title=""><img src="images/resource/em7.jpg" alt="" /></a>
                             </div>
                             <div class="emply-list-info">
                                 <div class="emply-pstn">4 Open Position</div>
                                 <h3><a href="#" title="">King LLC</a></h3>
                                 <span>Accountancy, Human Resources</span>
                                 <h6><i class="la la-map-marker"></i> Toronto, Ontario</h6>
                                 <p>The Heavy Equipment / Grader Operator  is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move,…</p>
                             </div>
                         </div><!-- Employe List -->
                         <div class="pagination">
                            <ul>
                                <li class="prev"><a href="#"><i class="la la-long-arrow-left"></i> Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><span class="delimeter">...</span></li>
                                <li><a href="#">14</a></li>
                                <li class="next"><a href="#">Next <i class="la la-long-arrow-right"></i></a></li>
                            </ul>
                        </div><!-- Pagination -->
                     </div>
                </div>
             </div>
        </div>
    </div>
</section>
@endsection
