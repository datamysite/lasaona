@extends('web.includes.master')
@section('content')

<section  class="header">
        
        @include('web.includes.header')

        <div class="sub-header-div text-center" style="background-image: url('{{URL::to('/public/images/home-bg.png')}}');">
            <div class="sub-header-content">
                <h1 class="text-white">Contact Us</h1>
                <br>
                <p class="text-center">This page is your direct line to the Let’s Off Leash team. Whether you have questions, feedback, story ideas, or collaboration requests, we’re here to connect. Drop us a message and let’s start a meaningful conversation.</p>
            </div>
        </div>
</section>

    <div class="container-fluid fh5co-news">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <img src="{{URL::to('/public/contact1.jpg')}}" width="100%" alt="What we talk about">
                </div>

                <div class="col-md-7 text-left">
                    <h2 class="text-left">Get in Touch</h2>
                    <p class="sub-heading">with LOL – Let’s Off Leash</p>
                    <p>
                        We’d love to hear from you! Whether you’re a listener with a story to share, a guest who wants to be featured, or a brand looking to collaborate, this is where the conversation starts.
                        <br><br>
                        At Let’s Off Leash, we believe in authentic connections. If you have questions, feedback, or partnership ideas, don’t hesitate to reach out. Your voice matters—and we’re here to listen.
                    </p>
                    <br>
                    <h2 class="text-left" style="margin-bottom:-15px">General Inquiries</h2>
                    <p>
                        Email us at: <a href="mailto:askforkasturi@letsoffleash.com">askforkasturi@letsoffleash.com</a>
                        <br>
                        We’ll get back to you within 1–2 business days.
                    </p>
                </div>

            </div>
            <br>
        </div>
    </div>
@endsection