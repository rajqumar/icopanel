@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Tokensale</small></h5>
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
            <form action="/tokensalePost" method="post" class="form-horizontal" name="tokensaleForm" id="tokensaleForm">
                {{ csrf_field() }}

                <div class="form-group"><label>Heading</label> 
                    <input type="text" name="heading" id="heading" value="{{ $tokensale[0]->heading }}" class="form-control">
                </div>

                <div class="form-group"><label>Start Date</label> 
                    <input type="text" name="start_date" id="start_date" value="{{ $tokensale[0]->start_date }}" class="form-control">
                </div>

                <div class="form-group"><label>Hard Cap</label> 
                    <input type="text" name="hardcap" id="hardcap" value="{{ $tokensale[0]->hardcap }}" class="form-control">
                </div>

                <div class="form-group"><label>Softcap</label> 
                    <input type="text" name="softcap" id="softcap" value="{{ $tokensale[0]->softcap }}" class="form-control">
                </div>

                <div class="form-group"><label>Token</label> 
                    <input type="text" name="token" id="token" value="{{ $tokensale[0]->token }}" class="form-control">
                </div>

                <div class="form-group"><label>Exchange Rate</label> 
                    <input type="text" name="exchange_rate" id="exchange_rate" value="{{ $tokensale[0]->exchange_rate }}" class="form-control">
                </div>

                <div class="form-group"><label>Project Protocol</label> 
                    <input type="text" name="protocol" id="protocol" value="{{ $tokensale[0]->protocol }}" class="form-control">
                </div>

                <div class="form-group"><label>Contract Address</label> 
                    <input type="text" name="contract_address" id="contract_address" value="{{ $tokensale[0]->contract_address }}" class="form-control">
                </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-white" type="submit">Cancel</button>
                        <button class="btn btn-primary" id="tokensaleButton" type="submit">Save changes</button>
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