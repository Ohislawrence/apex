<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles and permissions
        $this->call(RolePermissionSeeder::class);

        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@apexcloudtech.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );
        $admin->assignRole('admin');

        // Create sample blog posts
        $posts = [
            [
                'title' => 'The Future of Cloud Computing in 2026',
                'content' => '<p>Cloud computing continues to evolve at a rapid pace. In 2026, we are seeing unprecedented advancements in serverless architectures, edge computing, and AI-driven cloud optimization. At Apex Cloud Tech, we are at the forefront of these innovations, helping businesses leverage the full power of the cloud.</p><p>Serverless computing has matured significantly, allowing developers to focus purely on code without worrying about infrastructure. Edge computing brings processing power closer to users, reducing latency and improving performance for real-time applications.</p><p>The integration of AI with cloud platforms has opened new possibilities for automated scaling, predictive maintenance, and intelligent resource allocation. These technologies are not just trends—they are reshaping how businesses operate in the digital age.</p>',
                'excerpt' => 'Exploring the latest trends in cloud computing: serverless, edge computing, and AI-driven optimization.',
                'category' => 'Cloud',
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'AI-Powered Analytics: Transforming Business Intelligence',
                'content' => '<p>Business intelligence has entered a new era with AI-powered analytics. Modern tools can now process vast amounts of data in real-time, uncovering insights that would be impossible for humans to find manually. Apex Cloud Tech builds custom analytics solutions that give businesses a competitive edge.</p><p>Machine learning models can predict customer behavior, optimize pricing strategies, and identify operational inefficiencies before they become problems. The key is integrating these capabilities seamlessly into existing business workflows.</p><p>From ClickIntel\'s advanced analytics to HealthIntel\'s predictive health insights, our platforms demonstrate the transformative power of AI-driven data analysis.</p>',
                'excerpt' => 'How AI is revolutionizing business intelligence, from predictive analytics to real-time insights.',
                'category' => 'AI/ML',
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Building Scalable Web Applications with Laravel',
                'content' => '<p>Laravel remains one of the most powerful PHP frameworks for building modern web applications. Its elegant syntax, robust ecosystem, and built-in tools make it the framework of choice for Apex Cloud Tech when developing enterprise solutions.</p><p>Key features like Eloquent ORM, queue management, real-time events with WebSockets, and comprehensive testing tools enable rapid development without sacrificing quality. Laravel\'s service container and dependency injection system provide a clean architecture that scales effortlessly.</p><p>We leverage Laravel to build everything from content management systems to complex SaaS platforms, ensuring our clients receive reliable, maintainable, and performant applications.</p>',
                'excerpt' => 'Why Laravel is our framework of choice for building powerful, scalable web applications.',
                'category' => 'Development',
                'is_published' => true,
                'published_at' => now()->subDays(8),
            ],
            [
                'title' => 'Cybersecurity Best Practices for Modern Businesses',
                'content' => '<p>In an era of increasing cyber threats, businesses must prioritize security at every level of their operations. From data encryption and secure authentication to regular security audits and employee training, comprehensive cybersecurity is no longer optional.</p><p>At Apex Cloud Tech, we implement security best practices across all our projects: multi-factor authentication, role-based access control, encrypted data transmission, and regular vulnerability assessments. Our approach follows the principle of defense in depth.</p><p>Emerging technologies like zero-trust architecture and AI-driven threat detection are becoming essential components of a robust security strategy. Stay protected and stay ahead of evolving threats.</p>',
                'excerpt' => 'Essential cybersecurity strategies every business should implement to protect their digital assets.',
                'category' => 'Technology',
                'is_published' => true,
                'published_at' => now()->subDays(12),
            ],
            [
                'title' => 'The Rise of Progressive Web Apps (PWAs)',
                'content' => '<p>Progressive Web Apps represent the perfect fusion of web and native mobile applications. They offer the reach of the web with the capabilities of native apps—offline functionality, push notifications, and home screen installation.</p><p>PWAs are cost-effective, as a single codebase serves both web and mobile users. They load instantly, even on slow networks, thanks to service workers and efficient caching strategies. Major companies have seen significant improvements in engagement and conversion rates after adopting PWAs.</p><p>Our development team at Apex Cloud Tech has extensive experience building PWAs that deliver exceptional user experiences across all devices and platforms.</p>',
                'excerpt' => 'Why Progressive Web Apps are the future of mobile development and how they benefit businesses.',
                'category' => 'Development',
                'is_published' => true,
                'published_at' => now()->subDays(15),
            ],
            [
                'title' => 'Maximizing E-Learning with AI Personalization',
                'content' => '<p>The e-learning industry is experiencing a revolution driven by artificial intelligence. Traditional one-size-fits-all approaches are being replaced by adaptive learning systems that personalize content based on each student\'s needs, pace, and learning style.</p><p>OliLearn, our flagship e-learning platform, leverages AI to create personalized learning paths. The system analyzes student performance in real-time, adjusting difficulty levels, suggesting supplementary materials, and providing targeted feedback.</p><p>This approach has shown remarkable results: higher completion rates, better retention, and more engaged learners. The future of education is personalized, and AI is making it possible.</p>',
                'excerpt' => 'How AI personalization is transforming e-learning and why OliLearn leads the way.',
                'category' => 'AI/ML',
                'is_published' => true,
                'published_at' => now()->subDays(20),
            ],
        ];

        foreach ($posts as $post) {
            Post::firstOrCreate(
                ['slug' => Str::slug($post['title']) . '-' . Str::random(4)],
                array_merge($post, [
                    'user_id' => $admin->id,
                ])
            );
        }

        // Create portfolio items
        $portfolioItems = [
            [
                'title' => 'ClickIntel',
                'url' => 'https://clickintel.com',
                'description' => 'Advanced analytics platform for business intelligence and data-driven growth.',
                'icon' => 'fa-chart-line',
                'color' => '#3b82f6',
                'sort_order' => 0,
                'is_active' => true,
            ],
            [
                'title' => 'HealthIntel',
                'url' => 'https://healthintel.com',
                'description' => 'AI-powered health intelligence platform transforming patient care and outcomes.',
                'icon' => 'fa-heart-pulse',
                'color' => '#06b6d4',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'OliLearn',
                'url' => 'https://olilearn.com',
                'description' => 'Next-generation e-learning platform with personalized AI learning paths.',
                'icon' => 'fa-graduation-cap',
                'color' => '#facc15',
                'sort_order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($portfolioItems as $item) {
            PortfolioItem::firstOrCreate(
                ['title' => $item['title']],
                $item
            );
        }
    }
}
