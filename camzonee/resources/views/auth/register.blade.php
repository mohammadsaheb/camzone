
<x-guest-layout>
    <!-- Camera Aperture Header -->
    <div class="auth-aperture">
        <div class="aperture-blades">
            @for ($i = 1; $i <= 8; $i++)
                <div class="blade blade-{{ $i }}"></div>
            @endfor
        </div>
        <div class="auth-lens-content">
            <h1>START YOUR <span class="text-highlight">JOURNEY</span></h1>
        </div>
    </div>

    <div class="viewfinder-card">
        <div class="viewfinder-border">
            <div class="viewfinder-corner top-left"></div>
            <div class="viewfinder-corner top-right"></div>
            <div class="viewfinder-corner bottom-left"></div>
            <div class="viewfinder-corner bottom-right"></div>
            
            <div class="exposure-header">
                <span class="exposure-data">ISO 200</span>
                <span class="exposure-data">f/4.0</span>
                <span class="exposure-data">1/60s</span>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="focus-label">
                        <span>{{ __('Name') }}</span>
                        <div class="focus-ring"></div>
                    </x-input-label>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="focus-label">
                        <span>{{ __('Email') }}</span>
                        <div class="focus-ring"></div>
                    </x-input-label>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="focus-label">
                        <span>{{ __('Password') }}</span>
                        <div class="focus-ring"></div>
                    </x-input-label>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="focus-label">
                        <span>{{ __('Confirm Password') }}</span>
                        <div class="focus-ring"></div>
                    </x-input-label>
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

               
                

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-amber-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4 bg-amber-500 hover:bg-amber-600">
                        <i class="fa fa-user-plus mr-2"></i> {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="auth-footer">
        <div class="film-perforations">
            <div class="perforation"></div>
            <div class="perforation"></div>
            <div class="perforation"></div>
            <div class="perforation"></div>
            <div class="perforation"></div>
        </div>
    </div>
</x-guest-layout>

<style>
    /* Custom photography-themed styles */
    .auth-aperture {
        background-color: #000;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
        border-radius: 8px;
    }
    
    .aperture-blades {
        position: absolute;
        width: 100%;
        height: 100%;
    }
    
    .blade {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200%;
        height: 200%;
        background:  #6c757d;
        transform-origin: 0 0;
        opacity: 0.9;
        transition: all 1s ease;
    }
    
    .blade-1 { transform: rotate(0deg) translate(-50%, -50%); }
    .blade-2 { transform: rotate(45deg) translate(-50%, -50%); }
    .blade-3 { transform: rotate(90deg) translate(-50%, -50%); }
    .blade-4 { transform: rotate(135deg) translate(-50%, -50%); }
    .blade-5 { transform: rotate(180deg) translate(-50%, -50%); }
    .blade-6 { transform: rotate(225deg) translate(-50%, -50%); }
    .blade-7 { transform: rotate(270deg) translate(-50%, -50%); }
    .blade-8 { transform: rotate(315deg) translate(-50%, -50%); }
    
    .auth-aperture:hover .blade {
        width: 80%;
        height: 80%;
    }
    
    .auth-lens-content {
        text-align: center;
        color: white;
        z-index: 10;
    }
    
    .auth-lens-content h1 {
        font-size: 2.5rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
    }
    
    .text-highlight {
        color:white;
    }
    
    .viewfinder-card {
        position: relative;
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .viewfinder-border {
        position: relative;
        padding: 25px;
        border: 1px solid #ddd;
        margin: 15px;
        border-radius: 5px;
    }
    
    .viewfinder-corner {
        position: absolute;
        width: 20px;
        height: 20px;
        border-color: #6c757d;
        border-style: solid;
        border-width: 0;
    }
    
    .top-left {
        top: 0;
        left: 0;
        border-top-width: 2px;
        border-left-width: 2px;
    }
    
    .top-right {
        top: 0;
        right: 0;
        border-top-width: 2px;
        border-right-width: 2px;
    }
    
    .bottom-left {
        bottom: 0;
        left: 0;
        border-bottom-width: 2px;
        border-left-width: 2px;
    }
    
    .bottom-right {
        bottom: 0;
        right: 0;
        border-bottom-width: 2px;
        border-right-width: 2px;
    }
    
    .exposure-header {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
        font-family: 'Courier New', monospace;
    }
    
    .exposure-data {
        background: rgba(0,0,0,0.1);
        color: #333;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 12px;
        margin: 0 5px;
    }
    
    .focus-label {
        display: flex;
        align-items: center;
        font-weight: 600;
    }
    
    .focus-label span {
        margin-right: 10px;
    }
    
    .focus-ring {
        width: 10px;
        height: 10px;
        border: 1px solid #6c757d;
        border-radius: 50%;
    }
    
    /* Custom radio buttons */
    .custom-radio {
        position: relative;
        padding-left: 30px;
        cursor: pointer;
        user-select: none;
    }
    
    .radio-input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }
    
    .radio-label {
        display: flex;
        align-items: center;
        font-size: 0.875rem;
        color: #374151;
    }
    
    .radio-design {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #fff;
        border: 2px solid #d1d5db;
        border-radius: 50%;
        transition: all 0.2s ease-in-out;
    }
    
    .radio-design:after {
        content: "";
        position: absolute;
        display: none;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #6c757d;
    }
    
    .radio-input:checked ~ .radio-label .radio-design {
        border-color: #6c757d;
    }
    
    .radio-input:checked ~ .radio-label .radio-design:after {
        display: block;
    }
    
    .radio-text {
        margin-left: 8px;
    }
    
    /* Override Breeze's default button colors */
    .bg-amber-500 {
        background-color: #6c757d !important;
    }
    
    .hover\:bg-amber-600:hover {
        background-color:  #6c757d !important;
    }
    
    .text-amber-500 {
        color:  #6c757d !important;
    }
    
    .focus\:ring-amber-500:focus {
        --ring-color: #6c757d !important;
    }
    
    /* Footer styling */
    .auth-footer {
        text-align: center;
        margin-top: 20px;
    }
    
    .film-perforations {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }
    
    .perforation {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: transparent;
        border: 1px solid #666;
        margin: 0 5px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Aperture animation on hover
        const aperture = document.querySelector('.auth-aperture');
        if (aperture) {
            aperture.addEventListener('mousemove', function(e) {
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;
                
                const blades = document.querySelectorAll('.blade');
                blades.forEach((blade, index) => {
                    const scale = 0.8 + (x * 0.2);
                    const rotation = (index * 45) + (y * 10);
                    blade.style.transform = `rotate(${rotation}deg) translate(-50%, -50%)`;
                    blade.style.width = `${scale * 100}%`;
                    blade.style.height = `${scale * 100}%`;
                });
            });
        }
        
        // Focus effect on form fields
        const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                const label = this.previousElementSibling;
                if (label && label.classList.contains('focus-label')) {
                    const focusRing = label.querySelector('.focus-ring');
                    if (focusRing) {
                        focusRing.style.backgroundColor = '#f8ae3e';
                    }
                }
            });
            
            input.addEventListener('blur', function() {
                const label = this.previousElementSibling;
                if (label && label.classList.contains('focus-label')) {
                    const focusRing = label.querySelector('.focus-ring');
                    if (focusRing) {
                        focusRing.style.backgroundColor = 'transparent';
                    }
                }
            });
        });
        
        // Handle custom radio buttons
        const radioInputs = document.querySelectorAll('.radio-input');
        radioInputs.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.checked) {
                    // Update styles for this radio button
                    const label = this.nextElementSibling;
                    if (label) {
                        const design = label.querySelector('.radio-design');
                        if (design) {
                            design.style.borderColor = '#f8ae3e';
                        }
                    }
                }
            });
        });
    });
</script>
```