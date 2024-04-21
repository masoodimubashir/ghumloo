@extends('user.master')
@section('user-dashboard')
    <!--CENTER SECTION-->
    <div class="db-2">
        <div class="db-2-com db-2-main">
            <h4>Update Password</h4>
            <div class="db-2-main-com db-2-main-com-table p-5">
                <form action="{{route('password-update')}}" method="POST">
                    @csrf
                    @method('PUT')

                    @if(session('error'))

                        <strong class="text-danger">{{session('error')}}</strong>

                    @endif

                    @if(session('success'))

                        <strong class="text-success">{{session('success')}}</strong>

                    @endif

                    <div>
                        <label for="old_password">Old Password</label>
                        <input type="password"
                               value="{{old('old_password')}}"
                               name="old_password"
                               class="form-control"
                               placeholder="Old Password">
                        @error('old_password')
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <label for="password">New Password</label>
                        <input
                            type="password"
                            value="{{old('password')}}"
                            name="password"
                            class="form-control"
                            placeholder="Password"
                        >
                        @error('password')
                        <strong class="text-danger">
                            {{ $message }}
                        </strong>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <label for="password_confirmation">Confirm Password</label>
                        <input
                            type="password"
                            value="{{old('password_confirmation')}}"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Confirm Password"
                        >
                    </div>

                    <input type="submit" value="Change Password" class="btn btn-lg btn-primary">

                </form>
            </div>
        </div>
    </div>
@endsection
