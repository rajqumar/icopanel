@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Customizations</small></h5>
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

            <form method="post" action="/customizePost" enctype="multipart/form-data" id="customizeForm" name="customizeForm" role="form">
                {{ csrf_field() }}
                <div class="form-group"><label>ICO Start Date</label> 
                    <input type="text" name="ico_start" id="ico_start" class="form-control" value="{{ $customize[0]->ico_start }}">
                </div>
                
                <div class="form-group"><label>Softcap Days</label> 
                    <input type="text" name="softcap_days" id="softcap_days" class="form-control" value="{{ $customize[0]->softcap_days }}">
                </div>

                <div class="form-group"><label>Progress Completed</label> 
                    <input type="text" name="progress" id="progress" class="form-control" value="{{ $customize[0]->progress }}">
                </div>

                <div class="form-group"><label>Left Marker</label> 
                    <input type="text" name="marker" id="marker" class="form-control" value="{{ $customize[0]->marker }}">
                </div>

                <div class="form-group"><label>Ethereum Address</label> 
                    <input type="text" name="ethereum_address" id="ethereum_address" value="{{ $customize[0]->ethereum_address }}" class="form-control">
                </div>

                <div class="form-group"><label>Litecoin Address</label> 
                    <input type="text" name="litecoin_address" id="litecoin_address" value="{{ $customize[0]->litecoin_address }}" class="form-control">
                </div>

                <div class="form-group"><label>Ripple Address</label> 
                    <input type="text" name="ripple_address" id="ripple_address" value="{{ $customize[0]->ripple_address }}" class="form-control">
                </div>

                <div class="form-group"><label>Bitcoin Address</label> 
                    <input type="text" name="bitcoin_address" id="bitcoin_address" value="{{ $customize[0]->bitcoin_address }}" class="form-control">
                </div>
                
                <div class="form-group"><label>Media heading 1</label> 
                    <input type="text" name="media_head1" id="media_head1" value="{{ $customize[0]->media_head1 }}" class="form-control">
                </div>

                <div class="form-group"><label>Media heading 2</label> 
                    <input type="text" name="media_head2" id="media_head2" value="{{ $customize[0]->media_head2 }}" class="form-control">
                </div>

                <div class="form-group"><label>Media heading 3</label> 
                    <input type="text" name="media_head3" id="media_head3" value="{{ $customize[0]->media_head3 }}" class="form-control">
                </div>

                <div class="form-group"><label>Media desc 1</label> 
                    <input type="text" name="media_desc1" id="media_desc1" value="{{ $customize[0]->media_desc1 }}" class="form-control">
                </div>

                <div class="form-group"><label>Media desc 2</label> 
                    <input type="text" name="media_desc2" id="media_desc2" value="{{ $customize[0]->media_desc2 }}" class="form-control">
                </div>

                <div class="form-group"><label>Media desc 3</label> 
                    <input type="text" name="media_desc3" id="media_desc3" value="{{ $customize[0]->media_desc3 }}" class="form-control">
                </div>

                <div class="form-group"><label>Contract Description</label> 
                    <textarea class="form-control" name="contract_desc" id="contract_desc">{{ $customize[0]->contract_desc }}</textarea>
                </div>

                <div class="form-group">
                    <label>Onepager</label>
                     <input id="onepager" name="onepager" class="form-control" type="file" />
                        <br />
                </div>
                
                <div>
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                        <strong>Submit</strong>
                    </button>
                </div>
                <div class="nothin"><br></div>
            </form>
        </div>
    </div>
</div>
</div>
@include('admin_includes.footer')

<script type="text/javascript">
    $(document).ready(function(){
    });
</script>