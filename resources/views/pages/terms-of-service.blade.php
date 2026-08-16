@extends('layouts.app')

@section('title', 'Terms of Service — Apex Cloud Tech')
@section('meta_description', 'Review the Terms of Service for Apex Cloud Tech — the terms governing your use of our website, services, and SaaS platforms ClickIntel, HealthIntel, and OliLearn.')

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Policies & Terms</span>
            <h1 class="text-4xl lg:text-6xl font-['Orbitron'] font-black mt-4 mb-4">Terms of <span class="text-[#3b82f6]">Service</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Last updated: {{ date('F d, Y') }}</p>
        </div>

        <div class="space-y-10 bg-white/[0.03] border border-white/10 rounded-2xl p-6 lg:p-12 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">1. Acceptance of Terms</h2>
                <p class="text-gray-400 leading-relaxed">Welcome to Apex Cloud Tech ("Company", "we", "us", or "our"). By accessing or using our website at <a href="{{ route('home') }}" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">apexcloudtech.com</a>, engaging our services, or using any of our platforms — including ClickIntel, HealthIntel, and OliLearn — you agree to be bound by these Terms of Service. If you do not agree with any part of these terms, you must not access or use our services.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">2. Description of Services</h2>
                <p class="text-gray-400 leading-relaxed mb-3">Apex Cloud Tech provides technology consulting and digital product development services, including but not limited to:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Web development and custom software engineering.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Mobile application development (iOS, Android, and cross-platform).</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Cloud & DevOps, AI & machine learning, cybersecurity, data engineering, UI/UX design, and API development.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>SaaS platform development and the operation of our own products.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">3. Project Engagement & Payment</h2>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>All projects are governed by a written proposal, statement of work, or engagement agreement that details scope, deliverables, timelines, and fees.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Fees are due according to the milestones outlined in the applicable agreement. Late payments may incur interest or result in suspension of work.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>You are responsible for providing accurate, timely information and materials required for the performance of the work.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">4. Intellectual Property</h2>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Upon full payment of all fees, ownership of the final deliverables for custom projects is transferred to the client as specified in the project agreement, unless otherwise stated.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>We retain ownership of all pre-existing materials, tools, frameworks, and methodologies used in delivering our services.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>All content on our website, including text, graphics, logos, and software, is the property of Apex Cloud Tech and is protected by applicable intellectual property laws.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">5. Acceptable Use</h2>
                <p class="text-gray-400 leading-relaxed mb-3">When using our website and services, you agree not to:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Use our services for any unlawful, harmful, or fraudulent purpose.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Attempt to gain unauthorized access to our systems, data, or networks.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Interfere with or disrupt the integrity or performance of our services.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Reproduce, distribute, or resell our proprietary content without prior written consent.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">6. Confidentiality</h2>
                <p class="text-gray-400 leading-relaxed">Both parties agree to hold in confidence all non-public information disclosed during the course of engagement and not to disclose such information to third parties without prior written consent, except as required by law. This obligation survives the termination of any agreement.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">7. Warranties & Limitation of Liability</h2>
                <p class="text-gray-400 leading-relaxed mb-3">Our services are provided on an "as is" and "as available" basis. To the fullest extent permitted by law:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>We make no warranties, express or implied, regarding the uninterrupted or error-free operation of our services.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Our total aggregate liability arising out of or relating to these terms shall not exceed the total fees paid by you for the specific service giving rise to the claim during the preceding 12 months.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>We shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits, revenue, data, or goodwill.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">8. Termination</h2>
                <p class="text-gray-400 leading-relaxed">We may suspend or terminate your access to our services if you breach these Terms of Service or applicable law. Upon termination, any fees owed for work completed remain due, and the provisions of these terms that by their nature should survive will survive termination.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">9. Third-Party Links & Services</h2>
                <p class="text-gray-400 leading-relaxed">Our website and services may contain links to third-party websites, including ClickIntel, HealthIntel, and OliLearn. We are not responsible for the content, policies, or practices of any third-party sites, and we encourage you to review their respective terms and policies.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">10. Governing Law</h2>
                <p class="text-gray-400 leading-relaxed">These Terms of Service shall be governed by and construed in accordance with the laws of the Federal Republic of Nigeria, without regard to its conflict of law provisions. Any disputes arising under these terms shall be subject to the exclusive jurisdiction of the courts located in Lagos, Nigeria.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">11. Changes to These Terms</h2>
                <p class="text-gray-400 leading-relaxed">We may update these Terms of Service from time to time. Changes will be posted on this page with an updated "Last updated" date. Continued use of our services after any such changes constitutes your acceptance of the revised terms.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">12. Contact Us</h2>
                <p class="text-gray-400 leading-relaxed">If you have questions about these Terms of Service, contact us at <a href="mailto:hello@apexcloudtech.com" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">hello@apexcloudtech.com</a> or through our <a href="{{ route('contact') }}" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">contact page</a>.</p>
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