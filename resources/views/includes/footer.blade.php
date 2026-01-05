<footer class="ezy-footer">
    <style>
        /* Footer Protection - High Specificity */
        footer.ezy-footer {
            background: #003F7D;
            color: white !important;
            padding: 3rem 0 !important;
            margin: 0 !important;
            width: 100% !important;
            display: block !important;
        }
        
        footer.ezy-footer * {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        
        footer.ezy-footer .footer-container {
            max-width: 1280px !important;
            margin: 0 auto !important;
            padding: 0 1.5rem !important;
        }
        
        @media (min-width: 1024px) {
            footer.ezy-footer .footer-container {
                padding: 0 5rem !important;
            }
        }
        
        footer.ezy-footer .footer-grid {
            display: grid !important;
            grid-template-columns: 1fr !important;
            gap: 3rem !important;
            margin-bottom: 2.5rem !important;
        }
        
        @media (min-width: 768px) {
            footer.ezy-footer .footer-grid {
                grid-template-columns: repeat(3, 1fr) !important;
            }
        }
        
        footer.ezy-footer .logo-section {
            display: flex !important;
            align-items: center !important;
            margin-bottom: 1.5rem !important;
        }
        
        footer.ezy-footer .logo-icon {
            background-color: white !important;
            padding: 0.75rem !important;
            border-radius: 0.5rem !important;
            margin-right: 0.75rem !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
        
        footer.ezy-footer .logo-icon svg {
            width: 2rem !important;
            height: 2rem !important;
            color: #1e3a8a !important;
            fill: currentColor !important;
        }
        
        footer.ezy-footer .logo-text h2 {
            font-size: 1.5rem !important;
            font-weight: 700 !important;
            margin: 0 !important;
            line-height: 1 !important;
        }
        
        footer.ezy-footer .logo-text .brand-ezy {
            color: white !important;
        }
        
        footer.ezy-footer .logo-text .brand-skills {
            color: #f97316 !important;
        }
        
        footer.ezy-footer .logo-text p {
            font-size: 0.75rem !important;
            color: #d1d5db !important;
            margin: 0 !important;
        }
        
        footer.ezy-footer .description {
            color: #d1d5db !important;
            font-size: 0.875rem !important;
            line-height: 1.625 !important;
            margin-bottom: 1.5rem !important;
        }
        
        footer.ezy-footer .newsletter-title {
            color: white !important;
            font-weight: 700 !important;
            margin-bottom: 0.75rem !important;
            font-size: 1rem !important;
        }
        
        footer.ezy-footer .newsletter-form {
            display: flex !important;
            margin-bottom: 1.5rem !important;
        }
        
        footer.ezy-footer .newsletter-input {
            padding: 0.5rem 1rem !important;
            border-top-left-radius: 0.5rem !important;
            border-bottom-left-radius: 0.5rem !important;
            background-color: rgba(255, 255, 255, 0.1) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            color: white !important;
            flex: 1 !important;
            font-size: 0.875rem !important;
            outline: none !important;
        }
        
        footer.ezy-footer .newsletter-input::placeholder {
            color: #9ca3af !important;
        }
        
        footer.ezy-footer .newsletter-input:focus {
            outline: 2px solid #f97316 !important;
            outline-offset: 0 !important;
        }
        
        footer.ezy-footer .newsletter-btn {
            background-color: #f97316 !important;
            padding: 0.5rem 1rem !important;
            border-top-right-radius: 0.5rem !important;
            border-bottom-right-radius: 0.5rem !important;
            font-weight: 700 !important;
            transition: background-color 0.2s !important;
            border: none !important;
            color: white !important;
            cursor: pointer !important;
        }
        
        footer.ezy-footer .newsletter-btn:hover {
            background-color: #ea580c !important;
        }
        
        footer.ezy-footer .terms-links {
            display: flex !important;
            gap: 1.5rem !important;
            font-size: 0.75rem !important;
            color: #9ca3af !important;
            margin-bottom: 1rem !important;
        }
        
        footer.ezy-footer .terms-links a {
            color: #9ca3af !important;
            text-decoration: none !important;
            transition: color 0.2s !important;
        }
        
        footer.ezy-footer .terms-links a:hover {
            color: white !important;
        }
        
        footer.ezy-footer .social-icons {
            display: flex !important;
            gap: 0.75rem !important;
        }
        
        footer.ezy-footer .social-icon {
            background-color: rgba(255, 255, 255, 0.1) !important;
            width: 2.25rem !important;
            height: 2.25rem !important;
            border-radius: 0.25rem !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            transition: background-color 0.2s !important;
            text-decoration: none !important;
            color: white !important;
        }
        
        footer.ezy-footer .social-icon:hover {
            background-color: #f97316 !important;
        }
        
        footer.ezy-footer .social-icon svg {
            width: 1rem !important;
            height: 1rem !important;
            fill: currentColor !important;
        }
        
        footer.ezy-footer .section-title {
            color: #f97316 !important;
            font-weight: 700 !important;
            margin-bottom: 1rem !important;
            font-size: 1rem !important;
        }
        
        footer.ezy-footer .links-list {
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        
        footer.ezy-footer .links-list li {
            margin-bottom: 0.5rem !important;
        }
        
        footer.ezy-footer .links-list a {
            color: #d1d5db !important;
            font-size: 0.875rem !important;
            text-decoration: none !important;
            transition: color 0.2s !important;
            display: inline-block !important;
        }
        
        footer.ezy-footer .links-list a:hover {
            color: white !important;
        }
        
        footer.ezy-footer .contact-list {
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        
        footer.ezy-footer .contact-item {
            display: flex !important;
            align-items: flex-start !important;
            margin-bottom: 1rem !important;
        }
        
        footer.ezy-footer .contact-icon {
            width: 1.25rem !important;
            height: 1.25rem !important;
            color: #f97316 !important;
            margin-right: 0.75rem !important;
            margin-top: 0.125rem !important;
            flex-shrink: 0 !important;
            stroke: currentColor !important;
            fill: none !important;
        }
        
        footer.ezy-footer .contact-text {
            color: #d1d5db !important;
            font-size: 0.875rem !important;
            line-height: 1.625 !important;
        }
        
        footer.ezy-footer .contact-text p {
            margin: 0 !important;
            padding: 0 !important;
        }
        
        footer.ezy-footer .contact-link {
            color: #d1d5db !important;
            text-decoration: none !important;
            transition: color 0.2s !important;
            font-size: 0.875rem !important;
        }
        
        footer.ezy-footer .contact-link:hover {
            color: white !important;
        }
    </style>
    
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Left Section: Logo + About -->
            <div>
               <div class="logo-section">
    <img src="{{ asset('images/logof.png') }}" alt="EzySkills Logo" style="height: 4rem !important; width: auto !important; object-fit: contain !important;">
</div>
                <p class="description">
                    Let us build your career together. Be the first person to transform yourself with our unique & world class corporate level trainings.
                </p>

                <!-- Newsletter -->
                <div>
                    <h3 class="newsletter-title">Subscribe Our Newsletter</h3>
                    <form class="newsletter-form">
                        <input 
                            type="email" 
                            placeholder="Your Email address" 
                            class="newsletter-input"
                        >
                        <button 
                            type="submit" 
                            class="newsletter-btn"
                        >
                            →
                        </button>
                    </form>
                </div>

                <!-- Terms & Privacy -->
                <div class="terms-links">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                </div>

                <!-- Social Icons -->
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Middle Section: Quick Links -->
            <div>
                <h3 class="section-title">Quick Links</h3>
                <ul class="links-list">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#about">Our Story</a></li>
                    <li><a href="{{ route('courses.index') }}">Best Courses</a></li>
                    <li><a href="{{ route('faq.index') }}">Your FAQ's</a></li>
                    <li><a href="{{ route('contact.index') }}">Cancellation & Refunds</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact US</a></li>
                </ul>
            </div>

            <!-- Right Section: Contact Us -->
            <div>
                <h3 class="section-title">Contact Us</h3>
                <ul class="contact-list">
                    <li class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div class="contact-text">
                            <p>
                                Navakethan Complex,<br>
                                6th Floor, 605, 50B A&P app,<br>
                                CLock Tower, SD Road,<br>
                                Secunderabad, Telangana 500003
                            </p>
                        </div>
                    </li>
                    <li class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:info@ezyskills.in" class="contact-link">info@ezyskills.in</a>
                    </li>
                    <li class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <div class="contact-text">
                            <p>+91 8248448903</p>
                            <p>+91 9474849459</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    (function() {
        const newsletterForm = document.querySelector('footer.ezy-footer .newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('.newsletter-input').value;
                if (email) {
                    alert('Thank you for subscribing! We will send updates to: ' + email);
                    this.querySelector('.newsletter-input').value = '';
                }
            });
        }
    })();
</script>