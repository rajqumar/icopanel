@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Solutions</small></h5>
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
            <form method="post" action="/solutionsPost" name="solutionsForm" id="solutionsForm" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group"><label>Heading 1</label> 
                    <input type="text" name="heading1" id="heading1" class="form-control" value="{{ $solutions[0]->heading1 }}">
                </div>

                <div class="form-group"><label>Bold Para 1</label> 
                    <textarea class="form-control" name="bold_para1" id="bold_para1">{{ $solutions[0]->bold_para1 }}</textarea>
                </div>

                <div class="form-group"><label>Light Para 1</label> 
                    <textarea class="form-control" name="light_para1" id="light_para1">{{ $solutions[0]->light_para1 }}</textarea>
                </div>

                <div class="form-group">
                    <label class="control-label">Image 1</label>
                     <input id="image1" name="image1" class="form-control" type="file" />
                        <br />
                        <div id="image-holder1"></div>
                </div>
                <div class="hr-line-dashed"></div>

                <div class="form-group"><label>Heading 2</label> 
                    <input type="text" name="heading2" id="heading2" class="form-control" value="{{ $solutions[0]->heading2 }}">
                </div>

                <div class="form-group"><label>Bold Para 2</label> 
                    <textarea class="form-control" name="bold_para2" id="bold_para2">{{ $solutions[0]->bold_para2 }}</textarea>
                </div>

                <div class="form-group"><label>Light Para 2</label> 
                    <textarea class="form-control" name="light_para2" id="light_para2">{{ $solutions[0]->light_para2 }}</textarea>
                </div>

                <div class="form-group">
                    <label class="control-label">Image 2</label>
                     <input id="image2" name="image2" class="form-control" type="file" />
                        <br />
                        <div id="image-holder2"></div>
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
        $("#image1").on('change', function () {

    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof (FileReader) != "undefined") {

            var image_holder = $("#image-holder1");
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

$("#image2").on('change', function () {

    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof (FileReader) != "undefined") {

            var image_holder = $("#image-holder2");
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