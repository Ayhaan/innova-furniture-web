<div class="row" >
    <div class="col-12">
        <h2 class="contact-title">Get in Touch</h2>
        
    </div>
    <div class="w-50 ">
        @include('layouts.flash')

    </div>
    <div class="col-lg-8">
        <form class="form-contact contact_form" action="{{ route('contact.store') }}" method="post"  >
            @csrf
            <input style="display: none" type="text" name="type" value="furniture" readonly>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" required name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" 
                        value="{{ Auth::check() ? Auth::user()->name . ' ' . Auth::user()->firstname : '' }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" required name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email"
                        value="{{ Auth::check() ? Auth::user()->email : '' }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" required name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" required name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
            </div>
        </form>
    </div>
    <div class="col-lg-3 offset-lg-1">
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
                <h3>Merchtem, Belgique.</h3>
                <p> Krekelendries 11, 1785</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
                <h3>+1 253 565 2365</h3>
                <p>Mon to Fri 9am to 6pm</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
                <h3>innova@info.be</h3>
                <p>Send us your query anytime!</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-timer"></i></span>
            <div class="media-body">
                {{-- <h3>innova@info.be</h3> --}}
                <p><strong>Maandag</strong> gesloten</p>
                <p>Dinsdag van 10.00 tot 19.00</p>
                <p>Woensdag van 08.00 tot 17.00</p>
                <p>Donderdag van 10.00 tot 19.00</p>
                <p>Vrijdag van 10.00 tot 19.00</p>
                <p>Zaterdag van 10.00 tot 19.00</p>
                <p>Zondag van 12.00 tot 18.00</p>
               
            </div>
        </div>
    </div>
</div>