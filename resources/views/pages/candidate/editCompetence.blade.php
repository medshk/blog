
<div class="manage-jobs-sec">
<form action="{{url('resumeComp/'.$competence->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}

						
                          
    <div class="border-title"><h3>Competence</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
    <div class="resumeadd-form">
        <div class="row">
            <div class="col-lg-6">
                <span class="pf-title">Description</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="description" value="{{$competence->description}}">
                </div>
                <input type="submit" name="" value="Modifier">
            </div>
</form>
</div>