@include('admin_includes.head')
@include('admin_includes.sidebar')
@include('admin_includes.header')

<div class="wrapper wrapper-content">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Email Newsletter Subscribers</h5>
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

        <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover subscribersTable" >
    <thead>
    <tr>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="footer">
<div class="pull-right">
10GB of <strong>250GB</strong> Free.
</div>
<div>
<strong>Copyright</strong> Example Company &copy; 2014-2017
</div>
</div>
@include('admin_includes.footer')

<script src="{{ asset('public/js/plugins/dataTables/datatables.min.js') }}"></script>
<script>

var APP_URL = {!! json_encode(url('/')) !!};

$(document).ready(function(){
    $('.subscribersTable').DataTable({
            "processing": true,
            "serverSide": true,
            "stripeClasses": [ 'odd-row', 'even-row' ],
            "ajax":{
                     "url": APP_URL +"/subscribersList",
                     "dataType": "json",
                     "type": "POST",
                     "data":{ _token: "{{csrf_token()}}"}
                   },
            "columns": [
                { "data": "email_address" }
                ]
        });

        $('.dataTables_filter input').attr({"class":"form-control","placeholder":"Enter text to search"});
        $('.dataTables_length label select').attr({"class":"form-control"});

});

</script>