@extends('layouts.app')

@section('title', 'Privacy Policy — Apex Cloud Tech')
@section('meta_description', 'Read the Privacy Policy for Apex Cloud Tech to understand what personal data we collect, how we use it, and the rights you have over your information.')

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Policies & Terms</span>
            <h1 class="text-4xl lg:text-6xl font-['Orbitron'] font-black mt-4 mb-4">Privacy <span class="text-[#3b82f6]">Policy</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Last updated: {{ date('F d, Y') }}</p>
        </div>

        <div class="space-y-10 bg-white/[0.03] border border-white/10 rounded-2xl p-6 lg:p-12 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">1. Introduction</h2>
                <p class="text-gray-400 leading-relaxed">Apex Cloud Tech ("we", "us", or "our") respects your privacy and is committed to protecting your personal data. This Privacy Policy explains what information we collect when you visit our website, engage our services, or use our platforms (including ClickIntel, HealthIntel, and OliLearn), how we use it, and the choices you have regarding your information.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">2. Information We Collect</h2>
                <p class="text-gray-400 leading-relaxed mb-3">We may collect the following categories of information:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Personal identifiers:</strong> name, email address, phone number, and company name when you contact us, register an account, or subscribe to our newsletter.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Project information:</strong> details you provide about your business and project requirements when requesting our services.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Usage data:</strong> IP address, browser type, device information, pages visited, and interaction data collected automatically via cookies and analytics tools.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Payment data:</strong> billing information processed securely through third-party payment processors. We do not store full card details.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">3. How We Use Your Information</h2>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>To provide, operate, and improve our website and services.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>To respond to inquiries and communicate with you about projects, proposals, and support.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>To process transactions and send transactional notifications.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>To send newsletters, updates, and marketing communications (where you have opted in).</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>To analyze usage, monitor security, and prevent fraud or abuse.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>To comply with legal obligations and enforce our Terms of Service.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">4. Cookies & Tracking Technologies</h2>
                <p class="text-gray-400 leading-relaxed">We use cookies and similar tracking technologies to enhance your browsing experience, analyze site traffic, and understand how visitors interact with our website. You can control cookies through your browser settings; however, disabling certain cookies may affect the functionality of the site.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">5. Sharing of Information</h2>
                <p class="text-gray-400 leading-relaxed mb-3">We do not sell your personal information. We may share your information only in the following circumstances:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Service providers:</strong> trusted third parties (e.g., hosting, analytics, and payment processors) who assist us in operating our business, bound by confidentiality obligations.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Legal compliance:</strong> when required by law, regulation, or a valid legal request.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span><strong class="text-white">Business transfers:</strong> in connection with a merger, acquisition, or sale of assets, where your information may be transferred as part of the transaction.</span></li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">6. Data Retention</h2>
                <p class="text-gray-400 leading-relaxed">We retain personal information only for as long as necessary to fulfill the purposes described in this policy, unless a longer retention period is required or permitted by law. When information is no longer needed, it is securely deleted or anonymized.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">7. Data Security</h2>
                <p class="text-gray-400 leading-relaxed">We implement appropriate technical and organizational measures to safeguard your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">8. Your Rights</h2>
                <p class="text-gray-400 leading-relaxed mb-3">Depending on your jurisdiction, you may have the right to:</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Access the personal information we hold about you.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Request correction of inaccurate or incomplete information.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Request deletion of your personal information, subject to legal retention requirements.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Object to or restrict certain processing activities.</span></li>
                    <li class="flex items-start gap-3"><i class="fas fa-circle text-[6px] mt-2 text-[#facc15]"></i><span>Withdraw consent at any time where processing is based on consent.</span></li>
                </ul>
                <p class="text-gray-400 leading-relaxed mt-3">To exercise any of these rights, contact us at <a href="mailto:hello@apexcloudtech.com" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">hello@apexcloudtech.com</a>.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">9. Children's Privacy</h2>
                <p class="text-gray-400 leading-relaxed">Our website and services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If you believe a child has provided us with personal information, please contact us and we will take steps to delete it.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">10. Third-Party Services</h2>
                <p class="text-gray-400 leading-relaxed">Our services may integrate with or link to third-party websites and platforms, including our SaaS products ClickIntel, HealthIntel, and OliLearn. This Privacy Policy does not apply to the practices of third parties, and we encourage you to review their privacy policies.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">11. International Data Transfers</h2>
                <p class="text-gray-400 leading-relaxed">Your information may be transferred to and processed in countries other than your own. By using our services, you consent to such transfers, which we conduct using appropriate safeguards in accordance with applicable data protection laws.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">12. Changes to This Policy</h2>
                <p class="text-gray-400 leading-relaxed">We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated "Last updated" date. We encourage you to review this policy periodically.</p>
            </div>

            <div>
                <h2 class="text-2xl font-['Orbitron'] font-bold mb-4 text-white">13. Contact Us</h2>
                <p class="text-gray-400 leading-relaxed">If you have any questions or concerns about this Privacy Policy or our data practices, contact us at <a href="mailto:hello@apexcloudtech.com" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">hello@apexcloudtech.com</a> or through our <a href="{{ route('contact') }}" class="text-[#3b82f6] hover:text-[#facc15] transition-colors">contact page</a>.</p>
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