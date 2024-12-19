<<<<<<< Updated upstream
@extends('layout.main')

@section('content')
            <!-- start banner Area -->
            <section class="banner-area relative" id="home">	
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Contact Us				
                            </h1>	
                            <p class="text-white"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
                        </div>											
                    </div>
                </div>
            </section>
            <!-- End banner Area -->	
    
            <!-- Start contact-page Area -->
            <section class="contact-page-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
                        <div class="col-lg-4 d-flex flex-column">
                            <a class="contact-btns" href="#">Submit Your CV</a>
                            <a class="contact-btns" href="#">Post New Job</a>
                            <a class="contact-btns" href="#">Create New Account</a>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                                <div class="row">	
                                    <div class="col-lg-12 form-group">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                                    
                                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
    
                                        <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                        <button class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
                                        <div class="mt-20 alert-msg" style="text-align: left;"></div>
                                    </div>
                                </div>
                            </form>	
                        </div>
                    </div>
                </div>	
            </section>
            <!-- End contact-page Area -->
@endsection
=======
@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>

    {{-- Tampilkan Pesan Sukses --}}
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- Informasi Kontak --}}
    <div class="mb-4">
        <h2>Company Address:</h2>
        <p>1234 Street Name,</p>
        <p>City, State, ZIP Code</p>

        <h2>Email:</h2>
        <p>info@company.com</p>

        <h2>Phone:</h2>
        <p>+1 (123) 456-7890</p>
    </div>

    {{-- Formulir Kontak --}}
    <h2>Send Us a Message:</h2>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
>>>>>>> Stashed changes
