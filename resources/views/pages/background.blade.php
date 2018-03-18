@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Background elements</small></h5>
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
            <form action="/backgroundPost" enctype="multipart/form-data" method="post" class="form-horizontal" name="backgroundForm" id="backgroundForm" role="form">
                {{ csrf_field() }}
                <div class="form-group"><label>Heading</label> 
                    <textarea class="form-control" id="heading" name="heading">{{$background[0]->heading}}</textarea>
                </div>
                <div class="form-group"><label>Paragraph</label> 
                    <textarea class="form-control" id="paragraph" name="paragraph">{{$background[0]->paragraph}}</textarea>
                </div>
                <div class="form-group">
                    <label>Whitepaper</label>
                     <input id="whitepaper" name="whitepaper" class="form-control" type="file" />
                        <br />
                </div>
                <div class="form-group"><label>Token worth</label> 
                    <input type="text" name="token_worth" id="token_worth" value="{{$background[0]->token_worth}}" class="form-control">
                </div>
                <div class="form-group"><label>BTC Raised</label>
                    <input type="text" name="btc_raised" id="btc_raised" value="{{$background[0]->btc_raised}}" class="form-control">
                </div>
                <div class="form-group"><label>Softcap</label> 
                    <input type="text" name="softcap" id="softcap" value="{{$background[0]->softcap}}" class="form-control">
                </div>
                <div class="form-group"><label>Hardcap</label> 
                    <input type="text" name="hardcap" id="hardcap" value="{{$background[0]->hardcap}}" class="form-control">
                </div>
                
                <div>
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Submit</strong></button>
                </div>
                <div class="nothin"><br></div>
            </form>
        </div>
    </div>
</div>
</div>
@include('admin_includes.footer')

<script type="text/javascript">
    
</script>