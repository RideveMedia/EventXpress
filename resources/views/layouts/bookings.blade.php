@extends('layouts.app')

@section('title', 'Bookings | EventXpress')

@section('content')
<section class="gt-contact-us-section section-padding fix">
    <div class="container">
        <div class="gt-contact-us-wrapper">
            <div class="row g-4">
                <!-- Booking Form -->
                <div class="col-lg-8">
                    <div class="gt-comment-form-wrap">
                        <h4>Book Your Event</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form action="{{ route('bookings.submit') }}" id="booking-form" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <span>Your Name *</span>
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <span>Your Email *</span>
                                        <input type="email" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <span>Message *</span>
                                        <textarea name="message" placeholder="Type your message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center mt-4">
                                 <h5>Scan to Confirm</h5>
                                 {!! QrCode::size(200)->generate(route('bookings.confirm', ['id' => 123])); !!}
                                </div>

                                <div class="col-lg-6">
                                    <button type="submit" class="gt-theme-btn">Submit Booking</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4">
<div class="gt-contact-bg bg-cover"style="background-image: url('{{ asset('img/booking_bg.jpg') }}');">



                        <div class="gt-contact-content">
                            <h3>Need Any Help?</h3>
                            <p>Call us 24/7 for full support</p>

                            <div class="gt-contact-item">
                                <div class="gt-icon"><i class="fa-solid fa-phone"></i></div>
                                <ul class="gt-list">
                                    <li><span>Call Us:</span></li>
                                    <li><a href="tel:+0094382229540">+260 021 1356946</a></li>
                                </ul>
                            </div>

                            <div class="gt-contact-item">
                                <div class="gt-icon"><i class="fa-regular fa-envelope"></i></div>
                                <ul class="gt-list">
                                    <li><span>Mail Us:</span></li>
                                    <li><a href="mailto:info@xridergamil.com">info@ridevemedia.com/<a></li>
                                </ul>
                            </div>

                            <div class="gt-contact-item mb-0">
                                <div class="gt-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <ul class="gt-list">
                                    <li><span>Location:</span></li>
                                    <li>Lusaka,Zambia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional Map Section -->
<div class="gt-map-section section-padding fix pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="gt-map-items">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.0972652957466!2d28.39290847536218!3d-15.371217785211673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f56d007c715f%3A0xa5f2509642ca55d4!2sRideve%20Media!5e0!3m2!1sen!2sbd!4v1756910239461!5m2!1sen!2sbd"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
