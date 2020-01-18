

<div class="manage-jobs-sec">

<form action="{{url('createComp/'.$id)}}"  method="POST">
          {{csrf_field()}}


        

<div class="resumeadd-form">
        <div class="row">
         
        <div class="col-lg-12">
                <span class="pf-title">Description</span>
                <div class="pf-field">
                    <textarea name="description"></textarea>
                </div>
                <div class="col-lg-12">
                 <button type="submit">Save</button>
            </div>
            </div>

            <input type="submit" name="" value="Enregistrer">         

    </form>