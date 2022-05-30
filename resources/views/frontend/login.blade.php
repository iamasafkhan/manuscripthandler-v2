@extends('layouts.base')
@section('title', 'Login')
@section('content')

    <section class="inner-page">
        <div class="container">
            {{-- <div class="row">
                <div class="col-md-12">
                    @if (Session::has('message'))
                        <div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
                    @endif
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="box">
                        <img src="{{ asset('storage/journals/detail/' . $journal->detailimage) }}" class="img-fluid"
                            alt="" width="60%" height="60%">
                    </div>
                </div>
                
                <div class="col-lg-8">


                    <form action="{{ route('do-login') }}" method="post">
                        @csrf
                        <input type="hidden" name="journalID" value="{{ $journal->id }}">
                        <input type="hidden" name="companyID" value="{{ $company->id }}">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="primaryEmailAddress" id="form2Example1"
                                class="form-control @error('primaryEmailAddress') is-invalid @enderror" />
                            <label class="form-label" for="form2Example1">Email address</label>
                            @error('primaryEmailAddress')
                                <span class="invalid-feedback"> {{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" name="passWord"
                                class="form-control @error('passWord') is-invalid @enderror" />
                            <label class="form-label" for="form2Example2">Password</label>
                            @error('passWord')
                                <span class="invalid-feedback"> {{ $message }}</span>
                            @enderror
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a
                                    href="{{ route('show_register_form', [$company->companySEOURL, $journal->seo]) }}">Register</a>
                            </p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>

        $(function() {

     @if (Session::has('message')) 
         toastr.warning('{{ Session::get('message') }}', 'Erorr');
         @endif
            


         });

        //  $(document).ready(function() {
        //      toastr.options.timeOut = 10000;
        //     @if (Session::has('message'))
        //          toastr.success('{{ Session::get('message') }}');

        //      @endif
        //  });
    
</script>

@endsection
