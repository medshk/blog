@extends('layouts.candidate_layout')

@section('content')
<div class="manage-jobs-sec">
    <h3>CV & Cover Letter</h3>
    <div class="coverletter-sec">
        <form>
            <div class="row">
                <div class="col-lg-6">
                    <span class="pf-title">Select Your CV</span>
                    <div class="pf-field">
                        <select data-placeholder="Select Your CV" class="chosen">
                           <option>alitufan-cv</option>
                           <option>alitufan-cv old</option>
                       </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <span class="pf-title">Cover Letter</span>
                    <div class="pf-field">
                        <textarea>Spent several years working on sheep on Wall Street. Had moderate success investing in Yugos on Wall Street. Managed a small team buying and selling pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed severalnew methods for working with banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer ollaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present</textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection