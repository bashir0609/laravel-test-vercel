@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-20 lg:py-28 bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900" id="home">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <div>
                <div class="text-blue-600 font-semibold text-sm mb-4 uppercase tracking-wide">B2B Lead Generation • Local Leads • E-commerce SEO</div>
                <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 dark:text-white leading-tight mb-6">Get clean, verified B2B leads your sales team can actually use.</h1>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">We build targeted prospect lists for cold email, LinkedIn outreach, calling, appointment setting, and sales campaigns — without random companies, duplicates, or bounced emails.</p>
                <div class="flex flex-wrap gap-4 mb-8">
                    <a class="bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 transition inline-block" href="#free-sample">Get 20 Free Sample Leads</a>
                    <a class="border-2 border-gray-300 text-gray-700 dark:text-gray-300 px-8 py-4 rounded-lg font-semibold hover:border-blue-600 hover:text-blue-600 transition inline-block" href="#process">See the Process</a>
                </div>
                <div class="flex flex-wrap gap-4 text-sm text-gray-500 dark:text-gray-400">
                    <span class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Verified emails</span>
                    <span class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>CRM-ready delivery</span>
                    <span class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>US / UK / AU targeting</span>
                </div>
            </div>
            
            <!-- Lead Form -->
            <div class="bg-white dark:bg-zinc-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-zinc-700" id="free-sample">
                <div class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full inline-block mb-4">Low-risk first step</div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Request a free sample</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Tell us your target market and we'll review whether we can build a high-quality sample list for your campaign.</p>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form class="space-y-4" action="{{ route('sample-leads.submit') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <label class="block">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Name *</span>
                            <input required name="name" value="{{ old('name') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 border p-3"/>
                        </label>
                        <label class="block">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Work email *</span>
                            <input type="email" required name="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 border p-3"/>
                        </label>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="block">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Company</span>
                            <input name="company" value="{{ old('company') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 border p-3"/>
                        </label>
                        <label class="block">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Website</span>
                            <input placeholder="https://" name="website" value="{{ old('website') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 border p-3"/>
                        </label>
                    </div>
                    <label class="block">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">What do you need? *</span>
                        <select name="service" required class="mt-1 block w-full rounded-md border-gray-300 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 border p-3">
                            <option value="B2B lead generation" {{ old('service') == 'B2B lead generation' ? 'selected' : '' }}>B2B lead generation</option>
                            <option value="Google Maps local leads" {{ old('service') == 'Google Maps local leads' ? 'selected' : '' }}>Google Maps local leads</option>
                            <option value="LinkedIn decision-maker research" {{ old('service') == 'LinkedIn decision-maker research' ? 'selected' : '' }}>LinkedIn decision-maker research</option>
                            <option value="Email verification / enrichment" {{ old('service') == 'Email verification / enrichment' ? 'selected' : '' }}>Email verification / enrichment</option>
                            <option value="CRM data cleaning" {{ old('service') == 'CRM data cleaning' ? 'selected' : '' }}>CRM data cleaning</option>
                            <option value="E-commerce SEO content" {{ old('service') == 'E-commerce SEO content' ? 'selected' : '' }}>E-commerce SEO content</option>
                            <option value="Product page SEO" {{ old('service') == 'Product page SEO' ? 'selected' : '' }}>Product page SEO</option>
                            <option value="Other" {{ old('service') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Target market or keyword focus *</span>
                        <textarea name="targetMarket" rows="4" required placeholder="Example: dental clinics in Canada, SaaS founders in the US, roofers in Texas..." class="mt-1 block w-full rounded-md border-gray-300 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 border p-3">{{ old('targetMarket') }}</textarea>
                    </label>
                    <label class="block">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Notes</span>
                        <textarea name="notes" rows="3" placeholder="Tell me about volume, CRM format, deadline, or current problem." class="mt-1 block w-full rounded-md border-gray-300 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 border p-3">{{ old('notes') }}</textarea>
                    </label>
                    <button class="w-full bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 transition" type="submit">Get 20 Free Sample Leads</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Quick Answers Section -->
<section class="py-16 bg-gray-50 dark:bg-zinc-900" id="answers">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="text-blue-600 font-semibold text-sm mb-4 uppercase tracking-wide text-blue-600 font-semibold text-sm mb-4">Quick answers</div>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">Direct answers about Islah Web Service.</h2>
            <p class="text-gray-600 dark:text-gray-400">These short answers help buyers, search engines, and AI answer engines understand exactly what the business does.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <article class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700 hover:shadow-lg transition">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">What does Islah Web Service do?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Islah Web Service builds clean, verified B2B prospect lists for cold email, LinkedIn outreach, calling, appointment setting, and sales campaigns. The service also supports ecommerce brands with SEO keyword research, product copy, blog content, and publishing workflows.</p>
            </article>
            <article class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700 hover:shadow-lg transition">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Who is this service for?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">The service is for B2B companies, agencies, appointment setters, sales teams, SaaS founders, local service providers, and ecommerce operators that need better data, cleaner outreach lists, or search-optimized content.</p>
            </article>
            <article class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700 hover:shadow-lg transition">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">What makes the lead lists different?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Each list is targeted, AI-filtered, manually reviewed where needed, email-verified, deduplicated, enriched with useful details, and formatted for real outreach tools such as Google Sheets, CSV, HubSpot, Pipedrive, Instantly, Smartlead, and GoHighLevel.</p>
            </article>
            <article class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700 hover:shadow-lg transition">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">How does the ecommerce SEO service work?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">The content SEO workflow starts with Google and Ahrefs keyword research, then turns search intent into briefs, ChatGPT-assisted drafts, Surfer SEO humanization, product/blog formatting, image sourcing guidance, and publishing support.</p>
            </article>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16" id="services">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="text-blue-600 font-semibold text-sm mb-4 uppercase tracking-wide text-blue-600 font-semibold text-sm mb-4">Services</div>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">Two services built for growth teams.</h2>
            <p class="text-gray-600 dark:text-gray-400">Lead generation gives your sales team better prospects. SEO content gives your website and store more search visibility.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-lg border-2 border-blue-100 dark:border-blue-900">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">B2B Lead Generation</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Clean, targeted prospect lists for cold email, LinkedIn outreach, calling, appointment setting, and sales campaigns.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700 dark:text-gray-300">Google Maps and local business research</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700 dark:text-gray-300">LinkedIn and decision-maker research</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700 dark:text-gray-300">Email verification and enrichment</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700 dark:text-gray-300">Duplicate removal and CRM-ready formatting</span></li>
                </ul>
                <a class="text-blue-600 dark:text-blue-400 font-semibold hover:text-blue-800 dark:hover:text-blue-300 inline-flex items-center" href="#free-sample">Get sample leads →</a>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-sm border border-gray-200 dark:border-zinc-700">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">E-commerce Content SEO</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Keyword research, SEO briefs, humanized content, product copy, and publishing support for e-commerce stores and blogs.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700 dark:text-gray-300">Google + Ahrefs keyword research</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700 dark:text-gray-300">ChatGPT-assisted SEO drafts</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700 dark:text-gray-300">Surfer SEO AI Humanizer workflow</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700 dark:text-gray-300">Shopify, WooCommerce, Amazon, and blog formatting</span></li>
                </ul>
                <a class="text-blue-600 dark:text-blue-400 font-semibold hover:text-blue-800 dark:hover:text-blue-300 inline-flex items-center" href="#seo-content">View SEO workflow →</a>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-16 bg-gray-50 dark:bg-zinc-900" id="process">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="text-blue-600 font-semibold text-sm mb-4 uppercase tracking-wide text-blue-600 font-semibold text-sm mb-4">Lead generation process</div>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">From raw local data to verified outreach-ready leads.</h2>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                <div class="text-4xl font-bold text-blue-100 dark:text-blue-900 mb-4">01</div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Extract local/company data</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">We collect prospects from Google Maps and other relevant sources using structured workflows and Google Places data where useful.</p>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                <div class="text-4xl font-bold text-blue-100 dark:text-blue-900 mb-4">02</div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Classify and filter with AI</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">We use AI-assisted filtering to detect industry, business type, services, fit, and relevance before cleaning the list.</p>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                <div class="text-4xl font-bold text-blue-100 dark:text-blue-900 mb-4">03</div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Find contacts and enrich</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">We research team members, decision-makers, websites, LinkedIn profiles, company details, and useful outreach context.</p>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                <div class="text-4xl font-bold text-blue-100 dark:text-blue-900 mb-4">04</div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Verify, clean, and deliver</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Emails are verified, duplicates removed, formatting cleaned, and the final list is delivered in your preferred CRM-ready format.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-16" id="pricing">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="text-blue-600 font-semibold text-sm mb-4 uppercase tracking-wide text-blue-600 font-semibold text-sm mb-4">Pricing</div>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">Start with a sample, then quote by volume and complexity.</h2>
            <p class="text-gray-600 dark:text-gray-400">Lead pricing depends on niche difficulty, contact depth, enrichment, verification, and delivery format.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-lg border-2 border-blue-100 dark:border-blue-900 relative">
                <div class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full inline-block mb-4">Best first step</div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Sample</h3>
                <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-4">Free</div>
                <p class="text-gray-600 dark:text-gray-400 mb-6">20 sample leads from your target market</p>
                <a class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition inline-block text-center" href="#free-sample">Start here</a>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-sm border border-gray-200 dark:border-zinc-700">
                <div class="bg-gray-100 dark:bg-zinc-700 text-gray-700 dark:text-gray-300 text-xs font-semibold px-3 py-1 rounded-full inline-block mb-4">For testing campaigns</div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Starter List</h3>
                <div class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Custom</div>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Small verified list for one niche or location</p>
                <a class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition inline-block text-center" href="#free-sample">Start here</a>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-sm border border-gray-200 dark:border-zinc-700">
                <div class="bg-gray-100 dark:bg-zinc-700 text-gray-700 dark:text-gray-300 text-xs font-semibold px-3 py-1 rounded-full inline-block mb-4">For active outreach</div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Growth List</h3>
                <div class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Custom</div>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Larger enriched list with decision-makers and CRM formatting</p>
                <a class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition inline-block text-center" href="#free-sample">Start here</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gray-50 dark:bg-zinc-900" id="faq">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <div class="text-blue-600 font-semibold text-sm mb-4 uppercase tracking-wide text-blue-600 font-semibold text-sm mb-4">FAQ</div>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">Questions buyers ask before ordering.</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Can you target a very specific niche?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Yes. Share the location, business type, service, company size, target role, and any exclusions. We can build around local businesses, SaaS, healthcare, home services, professional services, and custom niches.</p>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Do you only scrape Google Maps?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">No. Google Maps is useful for local lead discovery, but the final list can also include website research, LinkedIn research, decision-maker lookup, enrichment, verification, and manual quality review.</p>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">What formats can you deliver?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Google Sheets, Excel, CSV, HubSpot, Pipedrive, GoHighLevel, Instantly, Smartlead, or your own CRM format.</p>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                <h3 class="font-bold text-gray-900 dark:text-white mb-3">Do you also write SEO content?</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Yes. We handle keyword research, content briefs, product copy, blog drafts, Surfer-based humanization, formatting, and publishing support for e-commerce and blogs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-20" id="contact">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-12 text-center text-white shadow-xl">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Stop wasting time on bad data.</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">Get clean, verified leads prepared for real outbound campaigns — or request help with e-commerce SEO content.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition inline-block" href="#free-sample">Get 20 Free Sample Leads</a>
                <a class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/10 transition inline-block" href="mailto:info@islahwebservice.com">Email Me</a>
            </div>
        </div>
    </div>
</section>
@endsection
