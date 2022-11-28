<div>
    
    <div id="FreeEvaluation" class="py-3 py-md-5">
        <div class="container">
            <div class="">
                <h2 class="text-primary fw-semibold text-center">Free-Evaluation</h2>
                <div class="line rounded"></div>
                <p class="text-center fs-4">If you would you like to get a Free Market Evaluation,<br /> Please fill out
                    the following form and we will connect you shortly regardingyoe request.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="bg-light">
                        <form class="row g-3 p-4 mt-4" wire:submit.prevent="SaveData">
                            <div class="col-md-6">
                                <label for="inputName" class="form-label text-primary fw-semibold">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Enter Your Name" wire:model="name">
                                @error('name') <small class="text-success">{{ $message }}</small> @enderror
                            </div>
                       
                            <div class="col-md-6">
                                <label for="inputName" class="form-label text-primary fw-semibold">Company</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Enter Your Company" wire:model="company">
                                @error('company') <small class="text-success">{{ $message }}</small> @enderror
                            </div>
                           
                            <div class="col-md-6">
                                <label for="inputName" class="form-label text-primary fw-semibold">Email</label>
                                <input type="email" class="form-control" id="inputName" placeholder="Enter Your Email-Id" wire:model="email">
                                @error('email') <small class="text-success">{{ $message }}</small> @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="inputName" class="form-label text-primary fw-semibold">Location</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Location" wire:model="location">
                                @error('location') <small class="text-success">{{ $message }}</small> @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="inputName" class="form-label text-primary fw-semibold">Phone Number</label>
                                <input type="tel" class="form-control" id="inputName" placeholder="Enter your Phone number" wire:model="phone">
                                @error('phone') <small class="text-success">{{ $message }}</small> @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="inputName" class="form-label text-primary fw-semibold">Adderss</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Enter your Address" wire:model="address">
                                @error('address') <small class="text-success">{{ $message }}</small> @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="inputName" class="form-label text-primary fw-semibold">City</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Enter your City" wire:model="city">
                                @error('city') <small class="text-success">{{ $message }}</small> @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="inputName" class="form-label text-primary fw-semibold">Pincode</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Pincode" wire:model="pincode">
                                @error('pincode') <small class="text-success">{{ $message }}</small> @enderror
                            </div>
                           
                            <div class="col-md-12">
                                <label for="floatingTextarea2" class="text-primary fw-semibold">Message</label>
                                <textarea class="form-control" placeholder="Message" id="floatingTextarea2"
                                style="height: 100px" wire:model="message"></textarea>
                                @error('message') <small class="text-success">{{ $message }}</small> @enderror
                            </div>

                             @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            <div class="col-12 text-center">
                                <button class="btn btn-primary rounded-pill px-5 fs-5" type="submit">Submit</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
