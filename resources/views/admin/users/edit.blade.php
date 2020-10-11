@extends('layouts.admin-app')

@section('css')
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="Stylesheet">
@endsection

@section('content')
    <div class="br-mainpanel"> 
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Edit Admin User</h4>
    </div>
    
    <div class="br-pagebody">
        <div class="br-section-wrapper">

        <div class="row mg-t-10">
            <div class="col-xl-10">

                @include('notification')

            <div class="form-layout form-layout-4">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add User</h6>

                <form action="{{ route('admin.users.update', $user) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                    <label class="col-sm-4 form-control-label">Full Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input id="name" type="text" placeholder="Fullname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    </div><!-- row -->

                    <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" readonly required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Mobile Number: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input id="phone" type="text" placeholder="Phone number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->profile->phone }}" required autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Username <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input id="name" type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->profile->username }}" required readonly autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <small><strong>{{ $message }}</strong></small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    @role('super-admin')
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Password <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <small><strong>{{ $message }}</strong></small>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Confirm Password <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                    @endrole

                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label"> <span>Active</span>    </label>                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="checkbox" name="active" @if ($user->profile->active) checked @endif @if ($user->hasRole('super-admin')) disabled @endif>
                        </div>
                    </div>

                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Choose Role <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="role" class="form-control select2" data-placeholder="Choose Role" required>
                            <option label="Choose Role"></option>
                                @foreach ($admin_roles ?? [] as $role)
                                    <option value="{{ $role ?? '' }}" @if($role == ($user->getRoleNames()->first())) selected @endif>{{ $role }}</option>    
                                @endforeach
                            {{-- <option value="USA">Plan A</option>
                            <option value="UK">Plan B</option> --}}

                        </select>
                    </div>
                    </div><!-- col-4 -->
                    <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info">Submit Form</button>
                    <input type="reset" class="btn btn-secondary" value="Cancel">
                    </div><!-- form-layout-footer -->
                </form>
            </div><!-- form-layout -->
            </div><!-- col-6 -->

        </div>
        </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
@endsection