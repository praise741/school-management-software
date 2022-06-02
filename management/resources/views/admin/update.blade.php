@extends('admin.layout.admin')


@section('content')

<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">

            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
        @if ($name == "true")
All records updated succesfully
        @else
        <form method="POST" action="/student/update" class="form-horizontal">
            @csrf
            <div class="form-group"><label class="col-sm-2 control-label">class</label>

                <div class="col-sm-10"><input type="text" name="class" required class="form-control"></div>
            </div>
            <div class="hr-line-dashed"></div>

            <div class="form-group"><label class="col-sm-2 control-label">Date of birth</label>

                <div class="col-sm-10"><input name="dob" type="date" required class="form-control"></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">parentname</label>

                <div class="col-sm-10"><input name="parentname" type="text" required class="form-control"></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">parentoccupation</label>

                <div class="col-sm-10"><input name="parentoccupation" type="text" required class="form-control"></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">parentemail</label>

                <div class="col-sm-10"><input name="parentemail" type="email" required class="form-control"></div>
            </div>
            <div class="hr-line-dashed"></div>

            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-white" type="submit">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </div>
        </form>
        @endif


        </div>
    </div>
</div>


@endsection
