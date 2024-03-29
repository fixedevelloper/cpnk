@extends('bakend.layout')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">My Profile</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route("uploadimage")}}" id="form_upload" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="profile-img-edit position-relative">
                                @if(is_null($user->image))
                                    <img class="img-fluid avatar avatar-100 avatar-rounded" src="{{asset('backend/images/avatars/01.png')}}" alt="profile-pic">
                                @else
                                    <img class="img-fluid avatar avatar-100 avatar-rounded" src="{{asset('storage/uploads/'.$user->image)}}" alt="profile-pic">
                                    @endif
                               <div class="upload-icone bg-primary">
                                    <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
                                        <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                    </svg>
                                    <input name="photo" class="file-upload" type="file" accept="image/*">
                                </div>
                            </div>
                            <div class="img-extension mt-3">
                                <div class="d-inline-block align-items-center">
                                    <span>Only</span>
                                    <a href="javascript:void();">.jpg</a>
                                    <a href="javascript:void();">.png</a>
                                    <a href="javascript:void();">.jpeg</a>
                                    <span>allowed</span>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"></h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <form method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="fname">First Name:</label>
                                    <input value="{{$user->name}}" type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="lname">Last Name:</label>
                                    <input value="{{$user->last_name}}" type="text" name="last_name" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="mobno">Mobile Number:</label>
                                    <input value="{{$user->phone}}" type="text" class="form-control" id="mobno" placeholder="Mobile Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="email">Email:</label>
                                    <input value="{{$user->email}}" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="cname">Company Name:</label>
                                    <input value="{{$user->company_name}}" type="text" name="company_name" class="form-control" id="cname" placeholder="Company Name">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="form-label">Country:</label>
                                    <select name="country" class="selectpicker form-control" data-style="py-0">
                                        <option>Select Country</option>
                                        <option>Cameroon</option>
                                        <option>Republic of Congo</option>
                                        <option >RDC</option>
                                        <option>RCA</option>
                                        <option>Chad</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="altconno">Alternate Contact:</label>
                                    <input value="{{$user->alternate_contact}}" type="text" name="alternate_contact" class="form-control" id="altconno" placeholder="Alternate Contact">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="city">Town/City:</label>
                                    <input type="text" value="{{$user->town}}" name="town" class="form-control" id="city" placeholder="Town/City">
                                </div>
                            </div>
                            <hr>
                            <h5 class="mb-3">Security</h5>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="uname">Phone:</label>
                                    <input value="{{$user->phone}}" name="phone" type="text" class="form-control" id="phone" placeholder="Phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="pass">Password:</label>
                                    <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="rpass">Repeat Password:</label>
                                    <input type="password" name="repeat_password" class="form-control" id="rpass" placeholder="Repeat Password ">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">Enable Two-Factor-Authentication</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Update profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push("scripts")
    <script>
        $(function(){
            $('.file-upload').change(function () {
                $('#form_upload').submit()
            })
        })
    </script>
@endpush
