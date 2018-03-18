@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')
<div class="row">
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Team</small></h5>
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
            <form method="post" action="/teamPost" enctype="multipart/form-data" class="form-horizontal" name="teamForm" id="teamForm">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label class="control-label">Name 1</label>
                     <input id="name1" name="name1" class="form-control" type="text" value="{{ $team[0]->name1 }}" />
                </div>

                <div class="form-group">
                    <label class="control-label">Linkedin Link 1</label>
                     <input id="link1" name="link1" class="form-control" value="{{ $team[0]->link1 }}" type="text" />
                </div>

                <div class="form-group">
                    <label class="control-label">Desc 1</label>
                     <input id="desc1" name="desc1" class="form-control" value="{{ $team[0]->desc1 }}" type="text" />
                </div>

                <div class="form-group">
                    <label class="control-label">Team Image 1</label>
                     <input id="image1" name="image1" class="form-control" type="file" />
                        <br />
                        <div id="holder1"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group">
                    <label class="control-label">Name 2</label>
                     <input id="name2" name="name2" class="form-control" type="text" value="{{ $team[0]->name2 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Linkedin Link 2</label>
                     <input id="link2" name="link2" class="form-control" type="text" value="{{ $team[0]->link2 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Desc 2</label>
                     <input id="desc2" name="desc2" class="form-control" type="text" value="{{ $team[0]->desc2 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Team Image 2</label>
                     <input id="image2" name="image2" class="form-control" type="file"/>
                        <br />
                        <div id="holder2"></div>
                </div>

                <div class="hr-line-dashed"></div>


                <div class="form-group">
                    <label class="control-label">Name 3</label>
                     <input id="name3" name="name3" class="form-control" type="text" value="{{ $team[0]->name3 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Linkedin Link 3</label>
                     <input id="link3" name="link3" class="form-control" type="text" value="{{ $team[0]->link3 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Desc 3</label>
                     <input id="desc3" name="desc3" class="form-control" type="text" value="{{ $team[0]->desc3 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Team Image 3</label>
                     <input id="image3" name="image3" class="form-control" type="file" />
                        <br />
                        <div id="holder3"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group">
                    <label class="control-label">Name 4</label>
                     <input id="name4" name="name4" class="form-control" type="text" value="{{ $team[0]->name4 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Linkedin Link 4</label>
                     <input id="link4" name="link4" class="form-control" type="text" value="{{ $team[0]->link4 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Desc 4</label>
                     <input id="desc4" name="desc4" class="form-control" type="text" value="{{ $team[0]->desc4 }}" />
                </div>

                <div class="form-group">
                    <label class="control-label">Team Image 4</label>
                     <input id="image4" name="image4" class="form-control" type="file" />
                        <br />
                        <div id="holder4"></div>
                </div>
                <div class="hr-line-dashed"></div>

                <div class="form-group">
                    <label class="control-label">Name 5</label>
                     <input id="name5" name="name5" class="form-control" type="text" value="{{ $team[0]->name5 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Linkedin Link 5</label>
                     <input id="link5" name="link5" class="form-control" type="text" value="{{ $team[0]->link5 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Desc 5</label>
                     <input id="desc5" name="desc5" class="form-control" type="text" value="{{ $team[0]->desc5 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Team Image 5</label>
                     <input id="image5" name="image5" class="form-control" type="file" />
                        <br />
                        <div id="holder5"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group">
                    <label class="control-label">Name 6</label>
                     <input id="name6" name="name6" class="form-control" type="text" value="{{ $team[0]->name6 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Linkedin Link 6</label>
                     <input id="link6" name="link6" class="form-control" type="text" value="{{ $team[0]->link6 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Desc 6</label>
                     <input id="desc6" name="desc6" class="form-control" type="text" value="{{ $team[0]->desc6 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Team Image 6</label>
                     <input id="image6" name="image6" class="form-control" type="file" />
                        <br />
                        <div id="holder6"></div>
                </div>

                <div class="hr-line-dashed"></div>


                <div class="form-group">
                    <label class="control-label">Name 7</label>
                     <input id="name7" name="name7" class="form-control" type="text" value="{{ $team[0]->name7 }}" />
                </div>

                <div class="form-group">
                    <label class="control-label">Linkedin Link 7</label>
                     <input id="link7" name="link7" class="form-control" type="text" value="{{ $team[0]->link7 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Desc 7</label>
                     <input id="desc7" name="desc7" class="form-control" type="text" value="{{ $team[0]->desc7 }}" />
                </div>

                <div class="form-group">
                    <label class="control-label">Team Image 7</label>
                     <input id="image7" name="image7" class="form-control" type="file" />
                        <br />
                        <div id="holder7"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group">
                    <label class="control-label">Name 8</label>
                     <input id="name8" name="name8" class="form-control" type="text" value="{{ $team[0]->name8 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Linkedin Link 8</label>
                     <input id="link8" name="link8" class="form-control" type="text" value="{{ $team[0]->link8 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Desc 8</label>
                     <input id="desc8" name="desc8" class="form-control" type="text" value="{{ $team[0]->desc8 }}"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Team Image 8</label>
                     <input id="image8" name="image8" class="form-control" type="file" />
                        <br />
                        <div id="holder8"></div>
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

    showImage("#image1", "#holder1");
    showImage("#image2", "#holder2");
    showImage("#image3", "#holder3");
    showImage("#image4", "#holder4");
    showImage("#image5", "#holder5");
    showImage("#image6", "#holder6");
    showImage("#image7", "#holder7");
    showImage("#image8", "#holder8");

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