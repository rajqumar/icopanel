@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Token Structure</small></h5>
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
            <form action="/structurePost" method="post" class="form-horizontal" name="structureForm" id="structureForm">
                {{ csrf_field() }}

                <div class="form-group"><label>Description</label> 
                    <textarea class="form-control" name="description" id="description">{{ $tokenstructure[0]->description }}</textarea>
                </div>

                <div class="form-group"><label>Community Percent</label> 
                    <input type="text" name="community" id="community" value="{{ $tokenstructure[0]->community }}" class="form-control">
                </div>

                <div class="form-group"><label>Reserved Percent</label> 
                    <input type="text" name="reserved" id="reserved" value="{{ $tokenstructure[0]->reserved }}" class="form-control">
                </div>

                <div class="form-group"><label>Founders/Team Percent</label> 
                    <input type="text" name="founders" id="founders" value="{{ $tokenstructure[0]->founders }}" class="form-control">
                </div>

                <div class="form-group"><label>Advisors Percent</label> 
                    <input type="text" name="advisors" id="advisors" value="{{ $tokenstructure[0]->advisors }}" class="form-control">
                </div>

                <div class="form-group"><label>Bounty</label> 
                    <input type="text" name="bounty" id="bounty" value="{{ $tokenstructure[0]->bounty }}" class="form-control">
                </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-white" type="submit">Cancel</button>
                        <button class="btn btn-primary" id="structureButton" type="submit">Save changes</button>
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