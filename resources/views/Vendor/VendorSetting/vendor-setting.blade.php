@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>

                <li class="active-bre"><a href="{{route('vendor.dashboard')}}"> Dashboard</a>
                </li>

            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h3>Vendor Settings</h3>
                        </div>

                        <div class="tab-inn mb-1 text-center">
                            <form enctype="multipart/form-data" action="{{route('vendor-settings.update', [$user->id])}}"
                                  method="POST">

                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                   name="image"
                                                   class="custom-file-input hidden"
                                                   id="imageInput"
                                                   accept="image/*">
                                        </div>
                                        <label
                                            class="custom-file-label"
                                            for="imageInput">
                                            Choose file
                                        </label>
                                    </div>
                                    <div id="imagePreview">

                                        @if($user->image)
                                            <img
                                                id="previewImage"
                                                src="{{ asset('storage/'. $user->image) }}"
                                                alt="User Image"
                                                class="profile-image"
                                            >
                                        @else
                                            <img
                                                id="previewImage"
                                                src="{{ asset('admin/images/profile-image.png')}}"
                                                alt="Default Image"
                                                class="profile-image"
                                            >
                                        @endif


                                    </div>
                                </div>


                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Update Image" class="btn btn-sm">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-inn">
                            <form action="{{route('vendor-settings.update', [$user->id])}}" method="POST">
                                @csrf
                                @method('PUT')

                                @error('password')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                                @error('error')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input
                                            id="old_password"
                                            name="old_password"
                                            type="password"
                                        >
                                        <label for="old_password">Old Password</label>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="input-field col s6">
                                        <input id="password"
                                               name="password"
                                               type="password"
                                               class="validate">
                                        <label for="password">Password</label>

                                    </div>
                                    <div class="input-field col s6">
                                        <input id="c_password"
                                               name="password_confirmation"
                                               type="password"
                                               class="validate">
                                        <label for="c_password">Confirm Password</label>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit"
                                               value="submit"
                                               class="waves-effect waves-light btn-large">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script>
        document.getElementById('imageInput').addEventListener('change', function (e) {
            const file = e.target.files[0];
            const preview = document.getElementById('previewImage');

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                }

                reader.readAsDataURL(file);
            } else {
                preview.src = '{{asset($user->image)}}'
            }
        });
    </script>
@endsection
