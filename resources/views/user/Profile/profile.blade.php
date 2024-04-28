@extends('user.master')
@section('user-dashboard')
    <!--CENTER SECTION-->
    <div class="db-2">
        <div class="db-2-com db-2-main">

            <h4>My Profile</h4>

            <div class="db-2-main-com db-2-main-com-table p-5">

                @if(session('success'))
                    <strong class="text-success">
                        {{session('success')}}
                    </strong>
                @endif

                @if(session('error'))
                    <strong class="text-danger">
                        {{session('error')}}
                    </strong>
                @endif

                <form action="{{route('update.image')}}" method="POST" enctype="multipart/form-data"
                      class="text-center">
                    @method('PUT')
                    @csrf
                    <div id="imagePreview" class="default-preview">
                        @if(session('user')->image != null)
                            <img class="img previewImage" src="{{asset("storage/".session('user')->image)}}"
                                 alt="Default Image">
                        @else
                            <img class="img previewImage" src="{{asset('Logo/placeholder.jpg')}}"
                                 alt="Default Image">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Choose Image</label>
                        <input type="file" class="form-control-file hidden" id="image" name="image"
                               accept="image/*" onchange="previewImage(event)">
                    </div>
                    <input type="submit" value="upload Image" class="image_btn">
                </form>

                <hr>
                <form action="{{route('profile.update')}}" method="POST">

                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <input type="text"
                                   value="{{auth()->user()->name}}"
                                   name="name"
                                   class="form-control"
                                   placeholder="Name">

                            @error('name')
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                value="{{session('user')->email}}"
                                class="form-control"
                                placeholder="Email"
                                readonly
                            >
                            @if(session('user')->email_verified_at === Null)
                                <small class="text-warning">We strongly recommend you to
                                    <a href="{{route('verify-auth-user-verifyEmail')}}">Verify Your Email</a>
                                </small>
                            @endif

                            <br>
                            @error('email')
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                    </div>
                    <input type="submit" value="Update Profile"
                           style="border: 1px solid gray; padding: 5px; border-radius: 5px;">

                </form>
                    <br>

                    <div class="row">
                        <form>

                            <div class="col-md-6">
                                <label for="phone">Phone Number</label>
                                <input
                                    type="number"
                                    value="{{auth()->user()->phone}}"
                                    name="phone"
                                    class="form-control"
                                    placeholder="Phone"
                                    min="0"
                                >
                                @error('phone')
                                {{ $message }}
                                @enderror
                                <br>
                                @if(session('user')->phone === null)
                                    <small class="text-warning">
                                        <a href="{{route('user.verify-phone')}}">Verify Your Number</a>
                                    </small>
                                @endif
                            </div>
                        </form>
                        <form action="{{route('user.verify-aadhaar')}}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                @error('aadhaar')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                <br>
                                <label for="whatsapp">Aadhaar Number</label>
                                <input
                                    type="text"
                                    value="{{auth()->user()->aadhaar->aadhaar_number}}"
                                    name="aadhaar"
                                    class="form-control"
                                    placeholder="Aadhaar"
                                    min="0"
                                >

                                <br>
                                @if(auth()->user()->adhar_verified_at === null)
                                    <button type="submit" style="border:none; padding: 2px; background: none;"
                                            class="text-warning">
                                        Verify Your Aadhaar
                                    </button>
                                @endif
                            </div>
                        </form>

                    </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.querySelector('.previewImage');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

    </script>
@endsection
