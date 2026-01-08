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
      <section class="terms-conditions">
    <div class="container">
            <div class="hero-content">
                <h1>Terms & Conditions</h1>
                
            </div>

            <div class="terms-content">
                <div class="terms-section">
                    <h2>1. Acceptance of Terms</h2>
                    <p>By accessing and using {{ config('app.name') }} ("the Platform"), you agree to be bound by these Terms and Conditions ("Terms"). If you disagree with any part of these Terms, you may not access the Platform.</p>
                    <p>These Terms apply to all users of the Platform, including but not limited to workers, businesses, and visitors.</p>
                </div>

                <div class="terms-section">
                    <h2>2. Account Registration</h2>
                    <h3>2.1 Eligibility</h3>
                    <p>To use {{ config('app.name') }}, you must:</p>
                    <ul>
                        <li>Be at least 18 years old</li>
                        <li>Be a resident of Nigeria</li>
                        <li>Have a valid Nigerian bank account for withdrawals</li>
                        <li>Provide accurate and complete registration information</li>
                    </ul>
                    
                    <h3>2.2 Account Security</h3>
                    <p>You are responsible for:</p>
                    <ul>
                        <li>Maintaining the confidentiality of your account credentials</li>
                        <li>All activities that occur under your account</li>
                        <li>Immediately notifying us of any unauthorized use of your account</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2>3. Worker Terms</h2>
                    <h3>3.1 Task Completion</h3>
                    <p>As a worker on {{ config('app.name') }}, you agree to:</p>
                    <ul>
                        <li>Complete tasks honestly and according to instructions</li>
                        <li>Not use automated systems, bots, or scripts to complete tasks</li>
                        <li>Maintain a minimum quality standard for completed tasks</li>
                        <li>Not create multiple accounts to bypass task limits</li>
                    </ul>
                    
                    <h3>3.2 Payments</h3>
                    <p>Payment terms for workers:</p>
                    <ul>
                        <li>Tasks are paid upon successful completion and verification</li>
                        <li>Minimum withdrawal amount: <span class="naira">₦1,000</span></li>
                        <li>Withdrawals are processed within 24-48 hours</li>
                        <li>We reserve the right to withhold payment for fraudulent activity</li>
                        <li>All payments are made in Nigerian Naira (₦)</li>
                    </ul>
                    
                    <h3>3.3 Prohibited Activities</h3>
                    <p>Workers must not:</p>
                    <ul>
                        <li>Submit fraudulent or false information</li>
                        <li>Attempt to manipulate the platform or other users</li>
                        <li>Share task details or solutions with others</li>
                        <li>Use the platform for illegal activities</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2>4. Business Terms</h2>
                    <h3>4.1 Task Creation</h3>
                    <p>Businesses creating tasks agree to:</p>
                    <ul>
                        <li>Provide clear, complete task instructions</li>
                        <li>Set fair compensation for tasks</li>
                        <li>Review completed tasks within 72 hours</li>
                        <li>Not create tasks that violate Nigerian laws or platform policies</li>
                    </ul>
                    
                    <h3>4.2 Payments</h3>
                    <p>Business payment terms:</p>
                    <ul>
                        <li>Fund tasks before they become available to workers</li>
                        <li>Payments are released to workers upon task approval</li>
                        <li>Platform fees are non-refundable</li>
                        <li>All transactions are in Nigerian Naira (₦)</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2>5. Fees and Commissions</h2>
                    <p>{{ config('app.name') }} charges the following fees:</p>
                    <ul>
                        <li><strong>Worker Fees:</strong> No fees for workers - you keep 100% of task earnings</li>
                        <li><strong>Business Fees:</strong> 15% commission on task value</li>
                        <li><strong>Withdrawal Fees:</strong> Free for bank transfers, ₦50 for airtime transfers</li>
                    </ul>
                    
                    <div class="highlight-box">
                        <p><strong>Important:</strong> Fees are subject to change with 30 days' notice. Current fees will always be displayed on the platform.</p>
                    </div>
                </div>

                <div class="terms-section">
                    <h2>6. Privacy and Data</h2>
                    <p>We collect and use your data as described in our Privacy Policyy. By using {{ config('app.name') }}, you consent to:</p>
                    <ul>
                        <li>Collection of personal information for platform operation</li>
                        <li>Use of data to improve our services</li>
                        <li>Sharing of anonymized data with partners</li>
                        <li>Communication regarding your account and platform updates</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2>7. Intellectual Property</h2>
                    <p>All content on the {{ config('app.name') }} platform, including but not limited to:</p>
                    <ul>
                        <li>Logo, brand name, and design elements</li>
                        <li>Platform code and software</li>
                        <li>Documentation and materials</li>
                    </ul>
                    <p>Are owned by {{ config('app.name') }} Technologies Limited and protected by Nigerian and international copyright laws.</p>
                </div>

                <div class="terms-section">
                    <h2>8. Termination</h2>
                    <p>We may terminate or suspend your account immediately, without prior notice, for:</p>
                    <ul>
                        <li>Violation of these Terms</li>
                        <li>Fraudulent activity</li>
                        <li>Creating multiple accounts</li>
                        <li>Any activity that harms the platform or other users</li>
                    </ul>
                    <p>Upon termination, your right to use the Platform will immediately cease.</p>
                </div>

                <div class="terms-section">
                    <h2>9. Limitation of Liability</h2>
                    <p>{{ config('app.name') }} shall not be liable for:</p>
                    <ul>
                        <li>Any indirect, incidental, or consequential damages</li>
                        <li>Loss of data, profits, or business opportunities</li>
                        <li>Issues arising from third-party services (banks, telecoms, etc.)</li>
                        <li>User disputes regarding task completion or payment</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2>10. Dispute Resolution</h2>
                    <p>Any disputes arising from these Terms shall be resolved through:</p>
                    <ol>
                        <li>Direct negotiation between parties</li>
                        <li>Mediation through the Platform's dispute resolution system</li>
                        <li>Legal proceedings in Nigerian courts if necessary</li>
                    </ol>
                    <p>By using {{ config('app.name') }}, you agree to attempt resolution through the Platform's systems before pursuing legal action.</p>
                </div>

                <div class="terms-section">
                    <h2>11. Changes to Terms</h2>
                    <p>We reserve the right to modify these Terms at any time. Changes will be:</p>
                    <ul>
                        <li>Posted on the Platform</li>
                        <li>Communicated via email to registered users</li>
                        <li>Effective 30 days after posting</li>
                    </ul>
                    <p>Continued use of the Platform after changes constitutes acceptance of the new Terms.</p>
                </div>

             

              
            </div>
        </div>
</section>
    </section>
@endsection