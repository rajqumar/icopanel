@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Clients</small></h5>
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
            <form method="post" action="/clientsPost" enctype="multipart/form-data" class="form-horizontal" name="clientsForm" id="clientsForm">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label">Client Image 1</label>
                     <input id="client_image1" name="client_image1" class="form-control" type="file" />
                        <br />
                        <div id="image-holder1"></div>
                </div>
                
                <div class="form-group">
                    <label class="control-label">Client Image 2</label>
                     <input id="client_image2" name="client_image2" class="form-control" type="file" />
                        <br />
                        <div id="image-holder2"></div>
                </div>
                
                <div class="form-group">
                    <label class="control-label">Client Image 3</label>
                     <input id="client_image3" name="client_image3" class="form-control" type="file" />
                        <br />
                        <div id="image-holder3"></div>
                </div>
                
                <div class="form-group">
                    <label class="control-label">Client Image 4</label>
                     <input id="client_image4" name="client_image4" class="form-control" type="file" />
                        <br />
                        <div id="image-holder4"></div>
                </div>
                
                <div class="form-group">
                    <label class="control-label">Client Image 5</label>
                     <input id="client_image5" name="client_image5" class="form-control" type="file" />
                        <br />
                        <div id="image-holder5"></div>
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

    showImage("#client_image1", "#image-holder1");
    showImage("#client_image2", "#image-holder2");
    showImage("#client_image3", "#image-holder3");
    showImage("#client_image4", "#image-holder4");
    showImage("#client_image5", "#image-holder5");

    function showImage(id, holder){
    $(id).on('change', function () {

    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof (FileReader) != "undefined") {

            var image_holder = $(holder);
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
    }
    });
</script>