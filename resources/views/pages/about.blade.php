@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>About elements</small></h5>
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
            <form action="/aboutPost" enctype="multipart/form-data" method="post" class="form-horizontal" name="aboutForm" id="aboutForm">
                {{ csrf_field() }}
                <div class="form-group"><label>Heading</label> 
                    <input type="text" name="heading" id="heading" value="{{ $about[0]->heading }}" class="form-control">
                </div>

                <div class="form-group"><label>Para 1</label> 
                    <textarea class="form-control" name="para1" id="para1">{{ $about[0]->para1 }}</textarea>
                </div>

                <div class="form-group"><label>Para 2</label> 
                    <textarea class="form-control" name="para2" id="para2">{{ $about[0]->para2 }}</textarea>
                </div>

                <div class="form-group"><label>Video link</label> 
                    <input type="text" class="form-control" name="video_link" id="video_link" value="{{ $about[0]->video_link }}">
                </div>


                <div class="form-group">
                    <label class="control-label">BG Image</label>
                     <input id="bgimage" name="bgimage" class="form-control" type="file" />
                        <br />
                        <div id="image-holder"></div>
                </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-white" type="submit">Cancel</button>
                        <button class="btn btn-primary" id="aboutButton" type="submit">Save changes</button>
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
    
    $("#bgimage").on('change', function () {

    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof (FileReader) != "undefined") {

                var image_holder = $("#image-holder");
                image_holder.empty();

                var reader = new FileReader();
                reader.onload = function (e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "thumb-image img-responsive col-md-4"
                    }).appendTo(image_holder);

                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
            alert("This browser does not support FileReader.");
            }
        } else {
        alert("Pls select only images");
        }
    });  

    });
</script>