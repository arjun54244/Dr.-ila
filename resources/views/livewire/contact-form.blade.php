<form wire:submit="save">
    <div class="row">
        <div class="col-lg-12 mb-20">
            <div class="form-inner">
                <label>Name*</label>
                <input type="text" wire:model="name" placeholder="Your Name...">
                @error('name') <span class="form-text">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-6 mb-20">
            <div class="form-inner">
                <label>Phone</label>
                <input type="text" wire:model="phone" placeholder="Phone Number...">
                @error('phone') <span class="form-text">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-6 mb-20">
            <div class="form-inner">
                <label>Email</label>
                <input type="email" wire:model="email" placeholder="Email Us....">
                @error('email') <span class="form-text">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-12 mb-20 ">
            <div class="form-inner">
                <label>Services</label>
                <select wire:model="services" class="bg-white">
                    <option value="" selected disabled>Select an option...</option>
                    
                    @foreach (\App\Models\Service::all() as $service)
                        <option value="{{ $service->title }}">{{ $service->title }}</option>
                        @endforeach
                </select>
                @error('services') <span class="form-text">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-12 mb-30">
            <div class="form-inner">
                <label>Write Your Massage*</label>
                <textarea wire:model="message" placeholder="What’s on your mind"></textarea>
                @error('message') <span class="form-text">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-inner">
                <button class="primary-btn1 btn-hover" type="submit">
                    Submit Now
                </button>
            </div>
        </div>
    </div>
</form>