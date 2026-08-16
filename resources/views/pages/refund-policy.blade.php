@extends('layouts.app')

@section('title', 'Refund Policy — Apex Cloud Tech')
@section('meta_description', 'Understand Apex Cloud Tech\'s refund policy for custom software development, SaaS subscriptions, and design services. Learn about eligibility, timelines, and how to request a refund.')

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Policies & Terms</span>
            <h1 class="text-4xl lg:text-6xl font-['Orbitron'] font-black mt-4 mb-4">Refund <span class="text-[#3b82f6]">Policy</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Last updated: {{ date('F d, Y') }}</p>
        </div>

        <div class="space-y-10 bg-white/[0.03] border border-white/10 rounded-2xl p-6 lg:p-12 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">1. Overview</h2>
                <p class="text-gray-400 leading-relaxed">At Apex Cloud Tech, we are committed to delivering exceptional digital solutions and ensuring complete client satisfaction. This Refund Policy explains the circumstances under which you may be eligible for a refund for products and services provided by Apex Cloud Tech, including web development, mobile app development, cloud & DevOps, AI & machine learning, cybersecurity, data engineering, UI/UX design, API development, and subscription-based SaaS platforms.</p>
                <p class="text-gray-400 leading-relaxed mt-3">Apex Cloud Tech operates and manages a portfolio of SaaS subsidiaries, including <strong class="text-white">ClickIntel</strong>, <strong class="text-white">HealthIntel</strong>, and <strong class="text-white">OliLearn</strong>. Payments for subscriptions or services on any of these platforms are received and processed by Apex Cloud Tech. Accordingly, all refund requests for these subsidiaries are handled by Apex Cloud Tech under this policy.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">2. Custom Development Projects</h2>
                <p class="text-gray-400 leading-relaxed mb-3">Because our development services are bespoke and tailored to each client's specific requirements, the following terms apply to custom projects:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Deposits are non-refundable.</strong> Project initiation deposits (typically 30–50% of the project total) secure your slot in our production schedule and are used to allocate resources, commence discovery, and begin work.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Milestone payments</strong> are refundable only if we fail to deliver the agreed-upon milestone within the agreed timeframe, excluding delays caused by the client.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Completed milestones are non-refundable.</strong> Once a milestone has been delivered and accepted (or deemed accepted under the terms of your agreement), the associated fees are non-refundable.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Client-cancelled projects</strong> are subject to charges for all work completed up to the date of cancellation, plus any unavoidable third-party costs already incurred.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">3. Subscription-Based Services (SaaS Subsidiaries)</h2>
                <p class="text-gray-400 leading-relaxed mb-3">Our SaaS platforms — <strong class="text-white">ClickIntel</strong>, <strong class="text-white">HealthIntel</strong>, and <strong class="text-white">OliLearn</strong> — are operated and managed by Apex Cloud Tech. Payments for subscriptions and in-platform purchases on these platforms are received and processed by Apex Cloud Tech, and the following refund terms apply:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Monthly subscriptions</strong> are non-refundable once a billing cycle has commenced, but you may cancel at any time to prevent future charges.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Annual subscriptions</strong> may be refunded on a pro-rata basis within the first 14 days of purchase, provided the service has not been substantially used.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">One-time in-platform purchases and add-ons</strong> are non-refundable once the associated feature or content has been activated or delivered.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">No refunds</strong> are issued for partial billing periods after cancellation.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">4. Design, Hosting & Ad-Hoc Services</h2>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Design services</strong> (UI/UX, branding, wireframing, prototypes) are refundable only before final files are delivered.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Domain registration, SSL certificates, and third-party licensing fees</strong> are non-refundable once purchased, as these are paid directly to external providers.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Hosting and maintenance retainers</strong> are non-refundable for the current service period but can be cancelled with notice.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">5. Eligibility & Timeframe</h2>
                <p class="text-gray-400 leading-relaxed mb-3">Refund requests must be submitted in writing to <a href="mailto:hello@apexcloudtech.com" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">hello@apexcloudtech.com</a> within <strong class="text-white">14 days</strong> of the charge or deliverable date, whichever is later. Requests received outside this window will not be eligible.</p>
                <p class="text-gray-400 leading-relaxed">Each request is reviewed on a case-by-case basis. Approved refunds are processed within <strong class="text-white">7–14 business days</strong> to the original payment method.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">6. Non-Refundable Circumstances</h2>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Change of mind after a service has been delivered and accepted.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Delays caused by the client's failure to provide required content, feedback, or approvals.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Work that has been substantially performed but not yet invoiced.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Third-party costs already incurred on the client's behalf.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">7. How to Request a Refund</h2>
                <p class="text-gray-400 leading-relaxed mb-3">To request a refund, email us at <a href="mailto:hello@apexcloudtech.com" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">hello@apexcloudtech.com</a> with the following details. For SaaS subsidiary charges (ClickIntel, HealthIntel, or OliLearn), please also include the platform name and the account email used at the time of purchase:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Your full name and company name (if applicable).</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>The project name, platform name, or invoice number.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>The reason for the refund request with supporting details.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>The payment date, amount, and method.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">8. Disputes</h2>
                <p class="text-gray-400 leading-relaxed">If you are not satisfied with the outcome of your refund request, you may contact us to escalate the matter for review by management. We will endeavor to resolve all disputes fairly and promptly.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">9. Contact Us</h2>
                <p class="text-gray-400 leading-relaxed">For any questions regarding this Refund Policy, please contact us at <a href="mailto:hello@apexcloudtech.com" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">hello@apexcloudtech.com</a> or through our <a href="{{ route('contact') }}" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">contact page</a>.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.animate-on-scroll.animate-visible {
    opacity: 1 !important;
    transform: translateY(0) !important;
}
</style>
@endpush