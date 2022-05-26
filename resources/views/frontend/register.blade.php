@extends('layouts.base')
@section('title', 'Register')
@section('content')

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box">
                        <img src="{{ asset('storage/journals/detail/' . $seos->detailimage) }}" class="img-fluid"
                            alt="" width="60%" height="60%">
                    </div>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
                @endif
                <div class="col-lg-8">
                    <form class="" name="frmRegister" id="frmRegister" action="{{ route('do-register') }}"
                        method="POST">
                        <input type="hidden" name="journalID" value="{{ $seos->id }}" />
                        <input type="hidden" name="companyID" value="{{ $companies->id }}" />

                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label class="form-label" for="prefix">Prefix</label>
                                <select name="prefix" id="prefix"
                                    class="form-control @error('prefix') is-invalid @enderror">
                                    <option value="Dr.">Dr.</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Miss.">Miss.</option>
                                    <option value="Prof.">Prof.</option>
                                </select>
                                @error('prefix')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="text" name="firstName" id="firstName"
                                    class="form-control @error('firstName') is-invalid @enderror" placeholder="First Name">
                                @error('firstName')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="middleName">Middle Name</label>
                                <input type="text" name="middleName" id="middleName"
                                    class="form-control @error('middleName') is-invalid @enderror"
                                    placeholder="Middle Name">
                                @error('middleName')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input type="text" name="lastName" id="lastName"
                                    class="form-control @error('lastName') is-invalid @enderror" placeholder="Last Name">
                                @error('lastName')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="row">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="primaryEmailAddress">Primary Email
                                    address</label>
                                <input type="email" name="primaryEmailAddress" id="primaryEmailAddress"
                                    placeholder="Primary Email Address"
                                    class="form-control @error('email') is-invalid @enderror" />
                                @error('email')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="row">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="row">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="cpassword">Confirm Password</label>
                                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"
                                    class="form-control @error('cpassword') is-invalid @enderror">
                            </div>
                        </div>


                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Agree" checked />
                                    <label class="form-check-label" for="Agree"> I agree to the <a href="#!">Terms
                                            &amp; Conditions</a> </label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
