@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Goals</small></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <form action="/goalsPost" method="post" class="form-horizontal" name="goalsForm" id="goalsForm">
                {{ csrf_field() }}
                <div class="form-group"><label>Light Heading</label> 
                    <input type="text" name="light_heading" id="light_heading" value="{{ $goals[0]->light_heading }}" class="form-control">
                </div>

                <div class="form-group"><label>Heading</label> 
                    <input type="text" name="heading" id="heading" value="{{ $goals[0]->heading }}" class="form-control">
                </div>

                <div class="form-group"><label>Para</label> 
                    <textarea class="form-control" name="para" id="para">{{ $goals[0]->para }}</textarea>
                </div>

                <div class="form-group"><label>Token Price</label> 
                    <input type="text" name="token_price" id="token_price" value="{{ $goals[0]->token_price }}" class="form-control">
                </div>

                <div class="form-group"><label>Participants</label> 
                    <input type="text" name="participants" id="participants" value="{{ $goals[0]->participants }}" class="form-control">
                </div>


                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-white" type="submit">Cancel</button>
                        <button class="btn btn-primary" id="goalsButton" type="submit">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@include('admin_includes.footer')

<script type="text/javascript">

    var APP_URL = {!! json_encode(url('/')) !!};
    
    $(document).ready(function(){
    
    });
</script>