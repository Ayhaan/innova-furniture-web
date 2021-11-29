<div class="moving container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-content">
            <h1 class="display-1">Transport</h1>
            <h2 class="display-3">Service</h2>
            <p>nationale verhuizing</p>
            <ul>
                <li>lift</li>
                <li>Montage-en demontage</li>
                <li>Verpakking</li>
                <li>Cleaning</li>
            </ul>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 div-img">
            <img  src="{{ asset('/img/moving/carton.jpg') }}" alt="ouvrier">
            <img  src="{{ asset('/img/moving/truck.jpg') }}" alt="truck">
        </div>
    </div>
    <hr class="my-5 py-5">
    <div class="row my-5 py-5" >
        <div class="col-12">
            <h2 class="contact-title text-center">Contact Us</h2>
        </div>
        <div class="col-lg-8 mx-auto">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">
                                     <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                </div>
            </form>
        </div>
    
    </div>
</div>