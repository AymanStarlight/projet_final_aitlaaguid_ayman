<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>aranoz</title>
    <link rel="icon" href="storage/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="storage/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="storage/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="storage/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="storage/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="storage/css/flaticon.css">
    <link rel="stylesheet" href="storage/css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="storage/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="storage/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="storage/css/style.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a class="navbar-brand" href="/">
                <img src="{{ asset("storage/img/logo.png") }}">
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('register') }}">
                @csrf


                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full focus:border-pink-400" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full focus:border-pink-400" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                        
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full focus:border-pink-400" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full focus:border-pink-400" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex flex-col items-center mt-4">
                    <button type="submit" class="genric-btn primary circle w-full">
                        {{ __('Register') }}
                    </button>
                    <a class=" mt-3 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                </div>
            </form>
        </div>

    </div>





    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/73305753f0.js" crossorigin="anonymous"></script>
    <!-- jquery plugins here-->
    <script src="storage/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="storage/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="storage/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="storage/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="storage/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="storage/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="storage/js/owl.carousel.min.js"></script>
    <script src="storage/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="storage/js/slick.min.js"></script>
    <script src="storage/js/jquery.counterup.min.js"></script>
    <script src="storage/js/waypoints.min.js"></script>
    <script src="storage/js/contact.js"></script>
    <script src="storage/js/jquery.ajaxchimp.min.js"></script>
    <script src="storage/js/jquery.form.js"></script>
    <script src="storage/js/jquery.validate.min.js"></script>
    <script src="storage/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="storage/js/custom.js"></script>
</body>

</html>
