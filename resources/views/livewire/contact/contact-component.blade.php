<div>
    <div class="ContactBanner">
        <img src="{{ asset('assets/images/contact/contact-banner.png') }}" alt="" class="img-luid">
    </div>

    <div id="ContactHead" class="pt-3 pt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <h2 class="text-primary fw-semibold">Contact Us</h2>
                        <div class="line rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ContactUs" class="my-2 my-md-3 bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-md-5 align-self-center">
                    <div class="bg-info p-3 shadow">
                        <h4>Chekkera Properties</h4>
                        <div class="">
                            <ul class="list-unstyled">
                                <li class="fs-5"><i class="fa-solid fa-location-dot text-primary"></i> VG-013, First Floor, Pruksa Silvana,
                                    Budigere Cross, Old Madras Road Bengalore, Karnataka 560049
                                    Landmark:Behind Prestige Tranquility</li>
                                <li class="fs-5 pt-2"><i class="fa-solid fa-phone-volume text-primary"></i> <a href="tel:09986507655"
                                        class="text-decoration-none"> +91 9986507655</a></li>
                                <li class="fs-5 py-2"><i class="fa-brands fa-whatsapp text-primary"></i> <a href="tel:08048505759" class="text-decoration-none"> Landline:+91 80485 05759</a> </li>
                                <li class="fs-5"><i class="fa-solid fa-envelope text-primary"></i><a href="mailto:peasad@chekkeraproperties.com" class="text-decoration-none"> prasad@chekkeraproperties.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-3 text-center">
                        <a href="#" class="text-primary"><i class="fa-brands fa-square-facebook fs-1 px-2"></i></a>
                        <a href="#" class="text-primary"><i class="fa-brands fa-linkedin fs-1 px-2"></i></a>
                        <a href="#" class="text-primary"><i class="fa-brands fa-square-twitter fs-1 px-2"></i></a>
                        <a href="#" class="text-primary"><i class="fa-brands fa-square-instagram fs-1 px-2"></i></a>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 mt-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="name"><img
                                    src="{{asset('assets/images/contact/name.png')}}" alt=""></span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username"
                                aria-describedby="basic-addon1" wire:model='name'>
                        </div>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img
                                    src="{{asset('assets/images/contact/mail.png')}}" alt=""></span>
                            <input type="email" class="form-control" placeholder="Email" aria-label="Username"
                                aria-describedby="basic-addon1" wire:model='email'>
                        </div>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="phone"><img
                                    src="{{asset('assets/images/contact/phone.png')}}" alt=""></span>
                            <input type="tel" class="form-control" placeholder="Phone No." aria-label="Username"
                                aria-describedby="basic-addon1" wire:model='phone'>
                        </div>
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="subject"><img
                                    src="{{asset('assets/images/contact/book.png')}}" alt=""></span>
                            <input type="text" class="form-control" placeholder="Subject" aria-label="Username"
                                aria-describedby="basic-addon1" wire:model="subject">
                        </div>
                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group mb-3">
                            <span class="input-group-text custom"><img
                                    src="{{asset('assets/images/contact/message.png')}}" alt=""></span>
                            <textarea class="form-control" aria-label="With textarea" rows="5" placeholder="message"
                                wire:model='message'></textarea>
                        </div>
                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary px-4 rounded-pill">Start Chat</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>