@extends('admin.layout.admin')

@section('content')
<div class="row">

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>click to add docotors</small></h5>

            </div>
            <div class="ibox-content">
                <div class="text-center">
                <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Add Doctors</a>
                </div>
                <div id="modal-form" class="modal fade" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Add doctors</h3>

                                        <p>Add doctors to your HMS</p>

                                        <form action="add" method="POST"  role="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group"><label>Name</label> <input type="text" name = "name" placeholder="Fullname" class="form-control"></div>
                                            <div>
                                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                            <div class="form-group"><label>Email</label> <input type="email" name="email" placeholder="Enter email" class="form-control"></div>
                                            <div class="form-group"><label>Profile</label> <input type="file" name="profile" placeholder="Profile" class="form-control"></div>
                                            <div class="form-group"><label>Password</label> <input type="password" name="password" placeholder="Password" class="form-control"></div>
                                            <div class="form-group"><label>Department</label>
                                            <select class="form-control" name="department" id="">
                                          <option value="">Choose department</option>
                                          @foreach ($departments as $department )
                                           <option value="{{ $department ->name }}"> {{ $department ->name }}</option>
                                          @endforeach


                                            </select>


                                            </div>
                                            <div>
                                            <div>

                                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                                <label> <input type="checkbox" class="i-checks"> Remember me </label>
                                            </div>
                                        </form>
                                    </div>

                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18)
                {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18)
                {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
                    errorPlacement: function (error, element)
                    {
                        element.before(error);
                    },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    }
                });
   });
</script>


@endsection

