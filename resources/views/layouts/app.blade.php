<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Get Clean, Verified B2B Leads That Convert - Islah Web Service')</title>
    <meta name="description" content="@yield('meta_description', 'Get clean, verified B2B prospect lists for cold email, LinkedIn outreach, calling, and appointment setting.')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .smooth-scroll { scroll-behavior: smooth; }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-gray-900 smooth-scroll">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-sm z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center space-x-3" aria-label="Islah Web Service home">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-gray-900">Islah Web Service</h2>
                        <span class="text-xs text-gray-600">Verified B2B Lead Lists</span>
                    </div>
                </a>
                
                <!-- Desktop Menu -->
                <ul class="hidden md:flex items-center space-x-8">
                    <li><a href="#services" class="text-gray-700 hover:text-blue-600 font-medium transition">Services</a></li>
                    <li><a href="#process" class="text-gray-700 hover:text-blue-600 font-medium transition">Process</a></li>
                    <li><a href="#proof" class="text-gray-700 hover:text-blue-600 font-medium transition">Proof</a></li>
                    <li><a href="#pricing" class="text-gray-700 hover:text-blue-600 font-medium transition">Pricing</a></li>
                    <li><a href="#faq" class="text-gray-700 hover:text-blue-600 font-medium transition">FAQ</a></li>
                    <li><a href="#free-sample" class="bg-blue-600 text-white px-5 py-2.5 rounded-lg font-semibold hover:bg-blue-700 transition">Free Sample</a></li>
                </ul>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2" aria-label="Toggle menu" aria-expanded="false">
                    <span class="block w-6 h-0.5 bg-gray-700 mb-1.5"></span>
                    <span class="block w-6 h-0.5 bg-gray-700 mb-1.5"></span>
                    <span class="block w-6 h-0.5 bg-gray-700"></span>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <ul class="flex flex-col p-4 space-y-3">
                <li><a href="#services" class="text-gray-700 hover:text-blue-600 font-medium">Services</a></li>
                <li><a href="#process" class="text-gray-700 hover:text-blue-600 font-medium">Process</a></li>
                <li><a href="#pricing" class="text-gray-700 hover:text-blue-600 font-medium">Pricing</a></li>
                <li><a href="#faq" class="text-gray-700 hover:text-blue-600 font-medium">FAQ</a></li>
                <li><a href="#free-sample" class="text-blue-600 font-semibold">Free Sample</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-3">Islah Web Service</h3>
                    <p class="text-gray-400 text-sm">Clean, verified B2B lead generation and ecommerce SEO content support for sales teams, agencies, and growth-focused businesses.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition">Services</a></li>
                        <li><a href="#process" class="text-gray-400 hover:text-white transition">Process</a></li>
                        <li><a href="#pricing" class="text-gray-400 hover:text-white transition">Pricing</a></li>
                        <li><a href="#faq" class="text-gray-400 hover:text-white transition">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Get In Touch</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="mailto:info@islahwebservice.com" class="hover:text-white transition">info@islahwebservice.com</a></li>
                        <li>Sylhet 3100, Bangladesh</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Follow Us</h4>
                    <p class="text-gray-400 text-sm mb-3">Connect for lead generation insights.</p>
                    <div class="flex space-x-3">
                        <a href="https://www.linkedin.com/company/islahwebservicebd" target="_blank" rel="noopener noreferrer" class="bg-gray-800 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition">LinkedIn</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Islah Web Service. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="/privacy-policy" class="hover:text-white transition">Privacy Policy</a>
                    <span>•</span>
                    <a href="/terms-of-service" class="hover:text-white transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
    @stack('scripts')
</body>
</html>
