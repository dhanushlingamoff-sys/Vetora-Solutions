@extends('layouts.app')



@section('content')
    <section class="section pb-5">
        <div class="conatiner">
            <div class="thank-content">
                <h1>Thank You!</h1>
                <p>
                    We appreciate your interest in Vetora Solutions <br>
                    Your message has been received and our team will get back to you soon.
                </p>
                <span>If you have any urgent queries, feel free to email us at <a href="mailto:info@vetora.au">info@vetora.au</a>.</span>

                <a href="{{ url('/') }} " class="btn btn-gradiant btn-md mt-4">
                    Return to Home
                </a>
            </div>
        </div>
    </section>
@endsection
