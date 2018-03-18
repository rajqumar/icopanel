@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Features | 4 Blocks</small></h5>
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

            <form method="post" action="/featuesPost" id="featuesForm" name="featuesForm" role="form">
                {{ csrf_field() }}
                <div class="form-group"><label>Icon 1</label> 
                    <input type="text" name="icon1" id="icon1" class="form-control" value="{{ $features[0]->icon1 }}">
                </div>
                <div class="form-group"><label>Title 1</label> 
                    <input type="text" name="title1" id="title1" class="form-control" value="{{ $features[0]->title1 }}">
                </div>
                <div class="form-group"><label>Desc 1</label> 
                    <textarea class="form-control" name="desc1" id="desc1">{{ $features[0]->desc1 }}</textarea>
                </div>

                <div class="hr-line-dashed"></div>
                <h3>SECOND</h3>                
                <div class="hr-line-dashed"></div>

                <div class="form-group"><label>Icon 2</label> 
                    <input type="text" name="icon2" id="icon2" class="form-control" value="{{ $features[0]->icon2 }}">
                </div>
                <div class="form-group"><label>Title 2</label> 
                    <input type="text" name="title2" id="title2" class="form-control" value="{{ $features[0]->title2 }}">
                </div>
                <div class="form-group"><label>Desc 2</label> 
                    <textarea name="desc2" id="desc2" class="form-control">{{ $features[0]->desc2 }}</textarea>
                </div>

                <div class="hr-line-dashed"></div>
                <h3>THIRD</h3>                
                <div class="hr-line-dashed"></div>


                <div class="form-group"><label>Icon 3</label> 
                    <input type="text" name="icon3" id="icon3" class="form-control" value="{{ $features[0]->icon3 }}">
                </div>
                <div class="form-group"><label>Title 3</label> 
                    <input type="text" name="title3" id="title3" class="form-control" value="{{ $features[0]->title3 }}">
                </div>
                <div class="form-group"><label>Desc 3</label> 
                    <textarea name="desc3" id="desc3" class="form-control">{{ $features[0]->desc3 }}</textarea>
                </div>

                <div class="hr-line-dashed"></div>
                <h3>FOURTH</h3>                
                <div class="hr-line-dashed"></div>

                <div class="form-group"><label>Icon 4</label> 
                    <input type="text" name="icon4" id="icon4" class="form-control" value="{{ $features[0]->icon4 }}">
                </div>
                <div class="form-group"><label>Title 4</label> 
                    <input type="text" name="title4" id="title4" class="form-control" value="{{ $features[0]->title4 }}" >
                </div>
                <div class="form-group"><label>Desc 4</label> 
                    <textarea name="desc4" id="desc4" class="form-control">{{ $features[0]->desc4 }}</textarea>
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