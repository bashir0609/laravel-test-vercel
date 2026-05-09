<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Islah Web Service - Verified B2B Lead Lists</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-gray-900">
    
    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-100 fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-[#FF2D20]">Islah Web Service</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="text-gray-600 hover:text-[#FF2D20] transition">Services</a>
                    <a href="#process" class="text-gray-600 hover:text-[#FF2D20] transition">Process</a>
                    <a href="#pricing" class="text-gray-600 hover:text-[#FF2D20] transition">Pricing</a>
                    <a href="#faq" class="text-gray-600 hover:text-[#FF2D20] transition">FAQ</a>
                    <a href="#contact" class="bg-[#FF2D20] text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Free Sample</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block">Verified B2B Lead Lists</span>
                <span class="block text-[#FF2D20]">That Actually Convert</span>
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-500">
                Get clean, verified B2B leads your sales team can actually use. 
                We build targeted prospect lists for cold email, LinkedIn outreach, and sales campaigns — without random companies, duplicates, or bounced emails.
            </p>
            <div class="mt-10 flex justify-center gap-4">
                <a href="#contact" class="w-full sm:w-auto flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-[#FF2D20] hover:bg-red-700 md:py-4 md:text-lg md:px-10 transition shadow-lg">
                    Get 20 Free Sample Leads
                </a>
                <a href="#process" class="w-full sm:w-auto flex items-center justify-center px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10 transition">
                    See the Process
                </a>
            </div>
            
            <!-- Trust Badges -->
            <div class="mt-12 flex justify-center gap-6 text-sm text-gray-500 font-medium">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Verified emails
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    CRM-ready delivery
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    US / UK / AU targeting
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900">Services</h2>
                <p class="mt-4 text-xl text-gray-500">Two services built for growth teams.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">B2B Lead Generation</h3>
                    <p class="text-gray-600 mb-6">Clean, targeted prospect lists for cold email, LinkedIn outreach, calling, and sales campaigns.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start"><span class="text-[#FF2D20] mr-2">✓</span> Google Maps and local business research</li>
                        <li class="flex items-start"><span class="text-[#FF2D20] mr-2">✓</span> LinkedIn and decision-maker research</li>
                        <li class="flex items-start"><span class="text-[#FF2D20] mr-2">✓</span> Email verification and enrichment</li>
                        <li class="flex items-start"><span class="text-[#FF2D20] mr-2">✓</span> Duplicate removal and CRM-ready formatting</li>
                    </ul>
                    <a href="#contact" class="text-[#FF2D20] font-semibold hover:text-red-700">Get sample leads →</a>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">E-commerce Content SEO</h3>
                    <p class="text-gray-600 mb-6">Keyword research, SEO briefs, humanized content, and publishing support for e-commerce stores.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start"><span class="text-[#FF2D20] mr-2">✓</span> Google + Ahrefs keyword research</li>
                        <li class="flex items-start"><span class="text-[#FF2D20] mr-2">✓</span> ChatGPT-assisted SEO drafts</li>
                        <li class="flex items-start"><span class="text-[#FF2D20] mr-2">✓</span> Surfer SEO AI Humanizer workflow</li>
                        <li class="flex items-start"><span class="text-[#FF2D20] mr-2">✓</span> Shopify, WooCommerce, and blog formatting</li>
                    </ul>
                    <a href="#contact" class="text-[#FF2D20] font-semibold hover:text-red-700">View SEO workflow →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div id="contact" class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900">Request a free sample</h2>
                <p class="mt-4 text-lg text-gray-500">Tell us your target market and we'll review whether we can build a high-quality sample list for your campaign.</p>
            </div>
            
            <form action="{{ route('leads.store') }}" method="POST" class="space-y-6 bg-gray-50 p-8 rounded-xl">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                        <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#FF2D20] focus:ring-[#FF2D20] sm:text-sm p-3 border">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Work email *</label>
                        <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#FF2D20] focus:ring-[#FF2D20] sm:text-sm p-3 border">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                        <input type="text" name="company" id="company" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#FF2D20] focus:ring-[#FF2D20] sm:text-sm p-3 border">
                    </div>
                    <div>
                        <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                        <input type="url" name="website" id="website" placeholder="https://" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#FF2D20] focus:ring-[#FF2D20] sm:text-sm p-3 border">
                    </div>
                </div>

                <div>
                    <label for="service_type" class="block text-sm font-medium text-gray-700">What do you need? *</label>
                    <select name="service_type" id="service_type" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#FF2D20] focus:ring-[#FF2D20] sm:text-sm p-3 border bg-white">
                        <option value="B2B Lead Generation">B2B lead generation</option>
                        <option value="SEO Content">E-commerce SEO Content</option>
                        <option value="Both">Both</option>
                    </select>
                </div>

                <div>
                    <label for="target_market" class="block text-sm font-medium text-gray-700">Target market or keyword focus *</label>
                    <input type="text" name="target_market" id="target_market" required placeholder="Example: dental clinics in Canada, SaaS founders in the US..." class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#FF2D20] focus:ring-[#FF2D20] sm:text-sm p-3 border">
                </div>

                <div>
                    <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                    <textarea name="notes" id="notes" rows="3" placeholder="Tell me about volume, CRM format, deadline, or current problem." class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#FF2D20] focus:ring-[#FF2D20] sm:text-sm p-3 border"></textarea>
                </div>

                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#FF2D20] hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20] transition">
                    Get 20 Free Sample Leads
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold text-[#FF2D20] mb-4">Islah Web Service</h3>
                <p class="text-gray-400 text-sm">Clean, verified B2B lead generation and ecommerce SEO content support for sales teams and agencies.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <li><a href="#services" class="hover:text-white">Services</a></li>
                    <li><a href="#process" class="hover:text-white">Process</a></li>
                    <li><a href="#pricing" class="hover:text-white">Pricing</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Get In Touch</h4>
                <p class="text-gray-400 text-sm mb-2">info@islahwebservice.com</p>
                <p class="text-gray-400 text-sm">Sylhet 3100, Bangladesh</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-gray-800 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Islah Web Service. All rights reserved.
        </div>
    </footer>
</body>
</html>
