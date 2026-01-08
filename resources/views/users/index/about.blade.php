@extends('layout.users.index')
@section('title')
    About Us
@endsection
@section('css')
    <style class="css">
         .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
    </style>
@endsection
@section('main')
    <section class="column g-10 w-full p-10">
        <section class="about-profitpay">
   <div>
        <div class="hero-title w-fit">About {{ config('app.name') }}</div>
        <p>Empowering Nigerians to earn extra income through simple, accessible tasks</p>
    </div>

    <section class="content-section">
            <div class="container">
                <div class="content-card">
                    <h2>Our Mission</h2>
                    <p>At {{ config('app.name') }}, our mission is to democratize access to income opportunities for every Nigerian. We believe that everyone should have the chance to earn extra money, regardless of their location, education, or professional background.</p>
                    
                    <h3>Our Vision</h3>
                    <p>To become Africa's leading platform for micro-task earning, connecting millions of Nigerians with flexible income opportunities while providing businesses with access to a reliable, on-demand workforce.</p>
                    
                    <div class="highlight-box">
                        <p><strong>Core Values:</strong> Transparency, Accessibility, Empowerment, Innovation, Community</p>
                    </div>
                </div>

                <div class="content-card">
                    <h2>Our Story</h2>
                    <p>{{ config('app.name') }} was founded in 2026 by a team of Nigerian entrepreneurs who recognized the growing need for flexible income opportunities in the digital economy. What started as a small platform with just 100 users has grown into a community of over 250,000 active earners across Nigeria.</p>
                    
                    <p>We noticed that many Nigerians had skills and time to spare but lacked accessible platforms to monetize them. Traditional online earning platforms were often not optimized for the Nigerian market, with complex interfaces and payment systems that didn't work well for local users.</p>
                    
                    <p>{{ config('app.name') }} was created to solve these problems. We built a platform that's mobile-first, easy to use, and optimized for Nigerian users, with instant payments in Naira and support for local payment methods.</p>
                </div>

                <div class="content-card">
                    <h2>How We Make Money</h2>
                    <p>{{ config('app.name') }} operates on a transparent commission model. We charge businesses a small fee for accessing our workforce, while workers keep 100% of their task earnings. Our revenue comes from:</p>
                    
                    <ul>
                        <li><strong>Business Subscriptions:</strong> Companies pay to post tasks and access our workforce</li>
                        <li><strong>Premium Features:</strong> Optional upgrades for businesses needing advanced features</li>
                        <li><strong>Verification Services:</strong> Optional identity verification for higher-paying tasks</li>
                    </ul>
                    
                    <p>We're proud that our business model aligns with our mission - the more our users earn, the more successful we become.</p>
                </div>

               

                <div class="content-card">
                    <h2>Our Commitment to Nigeria</h2>
                    <p>We're more than just a platform - we're building a community. Our commitment includes:</p>
                    
                    <ul>
                        <li><strong>Financial Inclusion:</strong> Bringing earning opportunities to underserved communities</li>
                        <li><strong>Digital Literacy:</strong> Free resources to help users maximize their earnings</li>
                        <li><strong>Local Partnerships:</strong> Working with Nigerian businesses and organizations</li>
                        <li><strong>Economic Empowerment:</strong> Creating sustainable income streams for Nigerians</li>
                    </ul>
                    
                    <div class="highlight-box">
                        <p><strong>Join our mission!</strong> Whether you're looking to earn extra income or your business needs reliable task completion, {{ config('app.name') }} is here to help.</p>
                    </div>
                    
                 
                </div>
            </div>
        </section>
   
</section>
    </section>
@endsection