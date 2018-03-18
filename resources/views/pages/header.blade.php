@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Header elements</small></h5>
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
            @if($header[0]->site_logo)
            <img src="{{$header[0]->site_logo}}" class="img-responsive">
            <div style="padding-bottom: 30px; "></div>
            @endif

            <form method="post" action="/headerPost" name="headerForm" id="headerForm" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm-2 control-label">Site Logo</label>
                    <input id="logoUpload" name="logoUpload" class="" type="file" />
                    <br />
                    <div id="image-holder"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-white" type="submit">Cancel</button>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@include('admin_includes.footer')

<script type="text/javascript">
    $(document).ready(function(){
        $("#logoUpload").on('change', function () {

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