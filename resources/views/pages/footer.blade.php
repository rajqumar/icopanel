@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Footer</small></h5>
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
            <form action="/footerPost" method="post" class="form-horizontal" name="footerForm" id="footerForm">
                {{ csrf_field() }}

                <div class="form-group"><label>Facebook Link</label> 
                    <input type="text" class="form-control" name="facebook" id="facebook" value="{{ $footer[0]->facebook }}">
                </div>

                <div class="form-group"><label>Twitter Link</label> 
                    <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $footer[0]->twitter }}">
                </div>

                <div class="form-group"><label>LinkedIn Link</label> 
                    <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $footer[0]->linkedin }}">
                </div>

                <div class="form-group"><label>Github Link</label> 
                    <input type="text" name="github" id="github" class="form-control" value="{{ $footer[0]->github }}">
                </div>

                <div class="form-group"><label>Instagram Link</label> 
                    <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $footer[0]->instagram }}">
                </div>

                <div class="form-group"><label>BitcoinTalk Link</label> 
                    <input type="text" name="bitcointalk" id="bitcointalk" class="form-control" value="{{ $footer[0]->bitcointalk }}">
                </div>

                <div class="form-group"><label>Reddit Link</label> 
                    <input type="text" name="reddit" id="reddit" class="form-control" value="{{ $footer[0]->reddit }}">
                </div>

                <div class="form-group"><label>Telegram Link</label> 
                    <input type="text" name="telegram" id="telegram" class="form-control" value="{{ $footer[0]->telegram }}">
                </div>

                <div class="form-group"><label>Footer Desc</label> 
                    <input type="text" name="footerdesc" id="footerdesc" class="form-control" value="{{ $footer[0]->footerdesc }}">
                </div>

                <div class="form-group"><label>Copyright</label> 
                    <input type="text" name="copyright" id="copyright" class="form-control" value="{{ $footer[0]->copyright }}">
                </div>


                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-white" type="submit">Cancel</button>
                        <button class="btn btn-primary" id="footerButton" type="submit">Save changes</button>
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