<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oviantotoday - Professional Garden Design & Landscaping Services</title>
    <meta name="description" content="Transform your outdoor space with Oviantotoday's expert garden design and landscaping services. Creating beautiful, sustainable gardens for over 15 years.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header-nav-x7k9 {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-m3p8 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q5w2 {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-r9t4 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu-r9t4 a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-menu-r9t4 a:hover {
            color: #90c695;
        }

        .hero-section-b8n1 {
            background: linear-gradient(rgba(45, 80, 22, 0.7), rgba(74, 124, 89, 0.7)), url('https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content-d6f3 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-l4s7 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-k2v9 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-h8j5 {
            background: #90c695;
            color: #2d5016;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-h8j5:hover {
            background: #7ab87f;
            transform: translateY(-2px);
        }

        .services-section-p3x6 {
            padding: 5rem 2rem;
            background: #f8f9fa;
        }

        .container-max-z1y4 {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-n7m2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2d5016;
        }

        .services-grid-w5q8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .service-card-e9r3 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service-card-e9r3:hover {
            transform: translateY(-5px);
        }

        .service-icon-t6u1 {
            font-size: 3rem;
            color: #4a7c59;
            margin-bottom: 1rem;
        }

        .about-section-a4c7 {
            padding: 5rem 2rem;
            background: white;
        }

        .about-content-i8o5 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-v2n6 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-g7k4 {
            border-radius: 10px;
            overflow: hidden;
        }

        .about-image-g7k4 img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .history-section-j9l3 {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .timeline-container-x5m8 {
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-c3q7 {
            display: flex;
            margin-bottom: 2rem;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .timeline-year-f6h2 {
            background: #4a7c59;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 2rem;
            flex-shrink: 0;
        }

        .reviews-section-b1d9 {
            padding: 5rem 2rem;
            background: #2d5016;
            color: white;
        }

        .reviews-grid-s4p6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .review-card-y8t5 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .review-stars-k7n4 {
            color: #ffd700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-author-m2x9 {
            margin-top: 1rem;
            font-weight: bold;
            opacity: 0.8;
        }

        .expertise-section-r5w3 {
            padding: 5rem 2rem;
            background: white;
        }

        .expertise-grid-l9q1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .expertise-item-h3v7 {
            text-align: center;
            padding: 2rem;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .expertise-item-h3v7:hover {
            border-color: #4a7c59;
            background: #f8f9fa;
        }

        .contact-section-u6i2 {
            padding: 5rem 2rem;
            background: #f8f9fa;
        }

        .contact-grid-o4e8 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info-z7j6 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .contact-item-n8k5 {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .contact-icon-p9l4 {
            background: #4a7c59;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }

        .phone-link-q3m7 {
            color: #2d5016;
            text-decoration: none;
            font-weight: bold;
        }

        .phone-link-q3m7:hover {
            color: #4a7c59;
        }

        .footer-main-t1r8 {
            background: #2d5016;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content-v5s2 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-w9x4 h3 {
            margin-bottom: 1rem;
            color: #90c695;
        }

        .footer-bottom-a6c1 {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #4a7c59;
            margin-top: 2rem;
        }

        .modal-overlay-d8f7 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-g2h9 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-i4j3 {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #666;
        }

        .sustainability-section-k8l6 {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
        }

        .sustainability-grid-m7n5 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .sustainability-card-p4q2 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border-left: 5px solid #4a7c59;
        }

        .process-section-r1s9 {
            padding: 5rem 2rem;
            background: white;
        }

        .process-steps-t6u3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .process-step-v8w7 {
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .step-number-x2y5 {
            background: #4a7c59;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        @media (max-width: 768px) {
            .nav-menu-r9t4 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-l4s7 {
                font-size: 2.5rem;
            }
            
            .about-content-i8o5,
            .contact-grid-o4e8 {
                grid-template-columns: 1fr;
            }
            
            .timeline-item-c3q7 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-f6h2 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="header-nav-x7k9">
        <nav class="nav-container-m3p8">
            <a href="#home" class="logo-brand-q5w2">Oviantotoday</a>
            <ul class="nav-menu-r9t4">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#sustainability">Sustainability</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#expertise">Expertise</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-section-b8n1">
        <div class="hero-content-d6f3">
            <h1 class="hero-title-l4s7">Transform Your Outdoor Space</h1>
            <p class="hero-subtitle-k2v9">Creating beautiful, functional gardens that bring your vision to life with expert landscaping and thoughtful design</p>
            <a href="#contact" class="cta-button-h8j5">Start Your Garden Journey</a>
        </div>
    </section>

    <section id="services" class="services-section-p3x6">
        <div class="container-max-z1y4">
            <h2 class="section-title-n7m2">Our Garden Services</h2>
            <div class="services-grid-w5q8">
                <div class="service-card-e9r3">
                    <div class="service-icon-t6u1">🌿</div>
                    <h3>Garden Planning</h3>
                    <p>Comprehensive garden design and planning services tailored to your space, climate, and preferences. We create detailed layouts that maximize beauty and functionality.</p>
                </div>
                <div class="service-card-e9r3">
                    <div class="service-icon-t6u1">🌱</div>
                    <h3>Plant Selection</h3>
                    <p>Expert guidance in choosing the right plants for your specific conditions. We consider soil type, sunlight, water requirements, and seasonal interest.</p>
                </div>
                <div class="service-card-e9r3">
                    <div class="service-icon-t6u1">🏡</div>
                    <h3>Landscape Installation</h3>
                    <p>Professional installation of hardscaping elements, irrigation systems, and plant materials. Quality workmanship with attention to every detail.</p>
                </div>
                <div class="service-card-e9r3">
                    <div class="service-icon-t6u1">💧</div>
                    <h3>Water Features</h3>
                    <p>Design and installation of fountains, ponds, and water gardens that add tranquility and visual interest to your outdoor space.</p>
                </div>
                <div class="service-card-e9r3">
                    <div class="service-icon-t6u1">🌳</div>
                    <h3>Tree Care</h3>
                    <p>Professional tree planting, pruning, and maintenance services to keep your trees healthy and your landscape looking its best.</p>
                </div>
                <div class="service-card-e9r3">
                    <div class="service-icon-t6u1">🌸</div>
                    <h3>Seasonal Maintenance</h3>
                    <p>Year-round garden care including pruning, fertilizing, pest management, and seasonal plantings to keep your garden thriving.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-a4c7">
        <div class="container-max-z1y4">
            <h2 class="section-title-n7m2">About Oviantotoday</h2>
            <div class="about-content-i8o5">
                <div class="about-text-v2n6">
                    <p>At Oviantotoday, we believe that every outdoor space has the potential to become a beautiful, functional garden that enhances your quality of life. Our team of experienced garden designers and landscaping professionals has been transforming outdoor spaces for over 15 years.</p>
                    
                    <p>We specialize in creating sustainable, low-maintenance gardens that reflect your personal style while working harmoniously with the natural environment. From small urban balconies to expansive country estates, we approach each project with creativity, expertise, and attention to detail.</p>
                    
                    <p>Our commitment to quality craftsmanship and customer satisfaction has earned us a reputation as one of the most trusted garden design companies in the region. We take pride in building lasting relationships with our clients and watching their gardens flourish year after year.</p>
                </div>
                <div class="about-image-g7k4">
                    <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg" alt="Beautiful garden landscape design">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-section-j9l3">
        <div class="container-max-z1y4">
            <h2 class="section-title-n7m2">Our Journey</h2>
            <div class="timeline-container-x5m8">
                <div class="timeline-item-c3q7">
                    <div class="timeline-year-f6h2">2008</div>
                    <div>
                        <h3>The Beginning</h3>
                        <p>Founded by master gardener Sarah Chen, Oviantotoday started as a small residential garden design service with a focus on sustainable landscaping practices.</p>
                    </div>
                </div>
                <div class="timeline-item-c3q7">
                    <div class="timeline-year-f6h2">2012</div>
                    <div>
                        <h3>Team Expansion</h3>
                        <p>Added certified landscape architects and horticulturists to our team, allowing us to take on larger commercial projects and specialized garden installations.</p>
                    </div>
                </div>
                <div class="timeline-item-c3q7">
                    <div class="timeline-year-f6h2">2016</div>
                    <div>
                        <h3>Award Recognition</h3>
                        <p>Received the Regional Landscape Excellence Award for our innovative approach to drought-resistant garden design and water conservation techniques.</p>
                    </div>
                </div>
                <div class="timeline-item-c3q7">
                    <div class="timeline-year-f6h2">2020</div>
                    <div>
                        <h3>Digital Innovation</h3>
                        <p>Launched our 3D garden visualization service, allowing clients to see their future gardens before installation begins.</p>
                    </div>
                </div>
                <div class="timeline-item-c3q7">
                    <div class="timeline-year-f6h2">2023</div>
                    <div>
                        <h3>Sustainable Future</h3>
                        <p>Achieved carbon-neutral certification and expanded our native plant propagation program, growing over 500 varieties of local species.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sustainability" class="sustainability-section-k8l6">
        <div class="container-max-z1y4">
            <h2 class="section-title-n7m2">Sustainable Gardening</h2>
            <div class="sustainability-grid-m7n5">
                <div class="sustainability-card-p4q2">
                    <h3>🌍 Eco-Friendly Practices</h3>
                    <p>We prioritize environmentally responsible gardening methods, using organic fertilizers, natural pest control, and water-efficient irrigation systems to minimize environmental impact.</p>
                </div>
                <div class="sustainability-card-p4q2">
                    <h3>🦋 Native Plant Focus</h3>
                    <p>Our designs emphasize native and adapted plants that support local wildlife, require less water, and thrive in regional climate conditions without excessive maintenance.</p>
                </div>
                <div class="sustainability-card-p4q2">
                    <h3>♻️ Waste Reduction</h3>
                    <p>We implement composting systems, rainwater harvesting, and material recycling programs to create closed-loop garden ecosystems that minimize waste.</p>
                </div>
                <div class="sustainability-card-p4q2">
                    <h3>🌱 Soil Health</h3>
                    <p>Building healthy soil through organic matter addition, beneficial microorganism cultivation, and natural soil amendment techniques for long-term garden vitality.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-r1s9">
        <div class="container-max-z1y4">
            <h2 class="section-title-n7m2">Our Design Process</h2>
            <div class="process-steps-t6u3">
                <div class="process-step-v8w7">
                    <div class="step-number-x2y5">1</div>
                    <h3>Initial Consultation</h3>
                    <p>We meet with you to discuss your vision, assess your space, and understand your lifestyle needs and preferences.</p>
                </div>
                <div class="process-step-v8w7">
                    <div class="step-number-x2y5">2</div>
                    <h3>Site Analysis</h3>
                    <p>Comprehensive evaluation of soil conditions, drainage, sunlight patterns, and existing vegetation to inform our design.</p>
                </div>
                <div class="process-step-v8w7">
                    <div class="step-number-x2y5">3</div>
                    <h3>Design Development</h3>
                    <p>Creation of detailed plans, plant selections, and 3D visualizations to bring your garden vision to life.</p>
                </div>
                <div class="process-step-v8w7">
                    <div class="step-number-x2y5">4</div>
                    <h3>Installation</h3>
                    <p>Professional implementation of the design with quality materials and expert craftsmanship.</p>
                </div>
                <div class="process-step-v8w7">
                    <div class="step-number-x2y5">5</div>
                    <h3>Ongoing Care</h3>
                    <p>Maintenance guidance and optional care services to ensure your garden continues to thrive.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="expertise-section-r5w3">
        <div class="container-max-z1y4">
            <h2 class="section-title-n7m2">Areas of Expertise</h2>
            <div class="expertise-grid-l9q1">
                <div class="expertise-item-h3v7">
                    <h3>🏠 Residential Gardens</h3>
                    <p>Custom home garden designs that enhance curb appeal and create beautiful outdoor living spaces for families.</p>
                </div>
                <div class="expertise-item-h3v7">
                    <h3>🏢 Commercial Landscapes</h3>
                    <p>Professional landscaping for businesses, offices, and public spaces that create welcoming environments.</p>
                </div>
                <div class="expertise-item-h3v7">
                    <h3>🌿 Herb Gardens</h3>
                    <p>Functional and beautiful herb garden designs for culinary enthusiasts and wellness-focused gardeners.</p>
                </div>
                <div class="expertise-item-h3v7">
                    <h3>🌺 Perennial Borders</h3>
                    <p>Stunning perennial garden designs that provide year-round interest with seasonal color changes.</p>
                </div>
                <div class="expertise-item-h3v7">
                    <h3>🌵 Drought-Tolerant Gardens</h3>
                    <p>Water-wise garden solutions featuring succulents, native plants, and efficient irrigation systems.</p>
                </div>
                <div class="expertise-item-h3v7">
                    <h3>🌙 Moon Gardens</h3>
                    <p>Evening garden designs featuring white and silver plants that glow in moonlight with fragrant night-blooming flowers.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-b1d9">
        <div class="container-max-z1y4">
            <h2 class="section-title-n7m2">What Our Clients Say</h2>
            <div class="reviews-grid-s4p6">
                <div class="review-card-y8t5">
                    <div class="review-stars-k7n4">★★★★★</div>
                    <p>"Oviantotoday transformed our backyard into a stunning oasis. Their attention to detail and plant knowledge is exceptional. Two years later, our garden still looks amazing!"</p>
                    <div class="review-author-m2x9">- Jennifer Martinez</div>
                </div>
                <div class="review-card-y8t5">
                    <div class="review-stars-k7n4">★★★★★</div>
                    <p>"Professional, creative, and reliable. They designed a beautiful front garden that has increased our home's value and brings us joy every day. Highly recommended!"</p>
                    <div class="review-author-m2x9">- Robert Thompson</div>
                </div>
                <div class="review-card-y8t5">
                    <div class="review-stars-k7n4">★★★★★</div>
                    <p>"The team's expertise in sustainable gardening is impressive. They created a low-maintenance, drought-resistant garden that's both beautiful and environmentally friendly."</p>
                    <div class="review-author-m2x9">- Lisa Chen</div>
                </div>
                <div class="review-card-y8t5">
                    <div class="review-stars-k7n4">★★★★★</div>
                    <p>"From design to installation, everything was handled professionally. Our herb garden is thriving, and we love having fresh ingredients right outside our kitchen!"</p>
                    <div class="review-author-m2x9">- Michael Rodriguez</div>
                </div>
                <div class="review-card-y8t5">
                    <div class="review-stars-k7n4">★★★★★</div>
                    <p>"Oviantotoday exceeded our expectations. They listened to our needs and created a garden that perfectly fits our lifestyle. The ongoing maintenance tips have been invaluable."</p>
                    <div class="review-author-m2x9">- Amanda Foster</div>
                </div>
                <div class="review-card-y8t5">
                    <div class="review-stars-k7n4">★★★★★</div>
                    <p>"Outstanding work on our commercial property. The landscape design has received numerous compliments from clients and has really enhanced our business image."</p>
                    <div class="review-author-m2x9">- David Park</div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section-u6i2">
        <div class="container-max-z1y4">
            <h2 class="section-title-n7m2">Get In Touch</h2>
            <div class="contact-grid-o4e8">
                <div class="contact-info-z7j6">
                    <h3>Contact Information</h3>
                    <div class="contact-item-n8k5">
                        <div class="contact-icon-p9l4">📍</div>
                        <div>
                            <strong>Address:</strong><br>
                            2847 Greenwood Avenue<br>
                            Springfield, IL 62704
                        </div>
                    </div>
                    <div class="contact-item-n8k5">
                        <div class="contact-icon-p9l4">📞</div>
                        <div>
                            <strong>Phone:</strong><br>
                            <a href="tel:+15559876543" class="phone-link-q3m7">(555) 987-6543</a>
                        </div>
                    </div>
                    <div class="contact-item-n8k5">
                        <div class="contact-icon-p9l4">✉️</div>
                        <div>
                            <strong>Email:</strong><br>
                            info@oviantotoday.com
                        </div>
                    </div>
                    <div class="contact-item-n8k5">
                        <div class="contact-icon-p9l4">🕒</div>
                        <div>
                            <strong>Hours:</strong><br>
                            Mon-Fri: 8:00 AM - 6:00 PM<br>
                            Sat: 9:00 AM - 4:00 PM<br>
Sun: By appointment
</div>
</div>
</div>
<div class="contact-info-z7j6">
<h3>Service Areas</h3>
<p>We proudly serve the following areas and surrounding communities:</p>
<ul style="margin-top: 1rem; line-height: 1.8;">
<li>Springfield and surrounding areas</li>
<li>Decatur region</li>
<li>Bloomington-Normal</li>
<li>Champaign-Urbana</li>
<li>Peoria metropolitan area</li>
<li>Lincoln and Logan County</li>
</ul>
<p style="margin-top: 1.5rem;">For projects outside these areas, please contact us to discuss travel arrangements and availability.</p>
</div>
</div>
</div>
</section>
<footer class="footer-main-t1r8">
    <div class="footer-content-v5s2">
        <div class="footer-section-w9x4">
            <h3>Oviantotoday</h3>
            <p>Creating beautiful, sustainable gardens that enhance your outdoor living experience. Professional garden design and landscaping services you can trust.</p>
        </div>
        <div class="footer-section-w9x4">
            <h3>Quick Links</h3>
            <ul style="list-style: none; line-height: 1.8;">
                <li><a href="#services" style="color: #90c695; text-decoration: none;">Garden Services</a></li>
                <li><a href="#about" style="color: #90c695; text-decoration: none;">About Us</a></li>
                <li><a href="#sustainability" style="color: #90c695; text-decoration: none;">Sustainability</a></li>
                <li><a href="#process" style="color: #90c695; text-decoration: none;">Our Process</a></li>
                <li><a href="#reviews" style="color: #90c695; text-decoration: none;">Client Reviews</a></li>
            </ul>
        </div>
        <div class="footer-section-w9x4">
            <h3>Services</h3>
            <ul style="list-style: none; line-height: 1.8;">
                <li>Garden Planning & Design</li>
                <li>Landscape Installation</li>
                <li>Plant Selection & Care</li>
                <li>Water Feature Installation</li>
                <li>Seasonal Maintenance</li>
                <li>Tree Care Services</li>
            </ul>
        </div>
        <div class="footer-section-w9x4">
            <h3>Legal</h3>
            <ul style="list-style: none; line-height: 1.8;">
                <li><a href="#" onclick="openModal('privacy')" style="color: #90c695; text-decoration: none;">Privacy Policy</a></li>
                <li><a href="#" onclick="openModal('terms')" style="color: #90c695; text-decoration: none;">Terms of Service</a></li>
            </ul>
            <div style="margin-top: 1rem;">
                <p><strong>Contact:</strong></p>
                <p><a href="tel:+15559876543" class="phone-link-q3m7">(555) 987-6543</a></p>
                <p>info@oviantotoday.com</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom-a6c1">
        <p>© 2024 Oviantotoday. All rights reserved. Professional garden design and landscaping services.</p>
    </div>
</footer>

<!-- Privacy Policy Modal -->
<div id="privacy-modal" class="modal-overlay-d8f7">
    <div class="modal-content-g2h9">
        <button class="modal-close-i4j3" onclick="closeModal('privacy')">×</button>
        <h2>Privacy Policy</h2>
        <p><strong>Last updated: January 2024</strong></p>
        
        <h3>Information We Collect</h3>
        <p>At Oviantotoday, we collect information you provide directly to us, such as when you contact us for garden design services, request consultations, or communicate with our team. This may include your name, email address, phone number, property address, and project details.</p>
        
        <h3>How We Use Your Information</h3>
        <p>We use the information we collect to:</p>
        <ul>
            <li>Provide garden design and landscaping services</li>
            <li>Communicate with you about your projects</li>
            <li>Send you updates about our services</li>
            <li>Improve our website and services</li>
            <li>Comply with legal obligations</li>
        </ul>
        
        <h3>Information Sharing</h3>
        <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our website and conducting our business.</p>
        
        <h3>Data Security</h3>
        <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
        
        <h3>Contact Us</h3>
        <p>If you have questions about this Privacy Policy, please contact us at info@oviantotoday.com or (555) 987-6543.</p>
    </div>
</div>

<!-- Terms of Service Modal -->
<div id="terms-modal" class="modal-overlay-d8f7">
    <div class="modal-content-g2h9">
        <button class="modal-close-i4j3" onclick="closeModal('terms')">×</button>
        <h2>Terms of Service</h2>
        <p><strong>Last updated: January 2024</strong></p>
        
        <h3>Acceptance of Terms</h3>
        <p>By accessing and using Oviantotoday's services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
        
        <h3>Service Description</h3>
        <p>Oviantotoday provides professional garden design, landscaping, and related outdoor space services. Our services include consultation, design development, plant selection, installation, and maintenance guidance.</p>
        
        <h3>Client Responsibilities</h3>
        <p>Clients are responsible for:</p>
        <ul>
            <li>Providing accurate information about their property and requirements</li>
            <li>Ensuring access to the work site during agreed-upon times</li>
            <li>Obtaining necessary permits where required</li>
            <li>Maintaining installed gardens according to provided guidelines</li>
        </ul>
        
        <h3>Service Limitations</h3>
        <p>Our services are subject to weather conditions, seasonal limitations, and material availability. We will communicate any delays or modifications to project timelines as soon as possible.</p>
        
        <h3>Warranty</h3>
        <p>We provide a one-year warranty on plant materials and installation workmanship, subject to proper maintenance and care by the client. Natural factors such as extreme weather, pests, or diseases are not covered under warranty.</p>
        
        <h3>Limitation of Liability</h3>
        <p>Oviantotoday's liability is limited to the cost of services provided. We are not liable for indirect, incidental, or consequential damages arising from our services.</p>
        
        <h3>Contact Information</h3>
        <p>For questions regarding these terms, contact us at info@oviantotoday.com or (555) 987-6543.</p>
    </div>
</div>

<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Modal functions
    function openModal(modalType) {
        const modal = document.getElementById(modalType + '-modal');
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal(modalType) {
        const modal = document.getElementById(modalType + '-modal');
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal-overlay-d8f7')) {
            e.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.header-nav-x7k9');
        if (window.scrollY > 100) {
            header.style.background = 'linear-gradient(135deg, rgba(45, 80, 22, 0.95), rgba(74, 124, 89, 0.95))';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.background = 'linear-gradient(135deg, #2d5016, #4a7c59)';
            header.style.backdropFilter = 'none';
        }
    });

    // Add animation to service cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe service cards and other elements
    document.querySelectorAll('.service-card-e9r3, .review-card-y8t5, .sustainability-card-p4q2').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });

    // Add mobile menu toggle functionality
    function toggleMobileMenu() {
        const navMenu = document.querySelector('.nav-menu-r9t4');
        navMenu.classList.toggle('mobile-active');
    }

    // Add mobile menu styles
    const mobileStyles = `
        @media (max-width: 768px) {
            .nav-menu-r9t4.mobile-active {
                display: flex;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(45, 80, 22, 0.98);
                flex-direction: column;
                padding: 2rem;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            }
        }
    `;

    // Add styles to head
    const styleSheet = document.createElement('style');
    styleSheet.textContent = mobileStyles;
    document.head.appendChild(styleSheet);

    // Add loading animation
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.5s ease';
        setTimeout(() => {
            document.body.style.opacity = '1';
        }, 100);
    });

    // Add form validation if contact form exists
    function validateContactForm(form) {
        const email = form.querySelector('input[type="email"]');
        const phone = form.querySelector('input[type="tel"]');
        
        if (email && !email.value.includes('@')) {
            alert('Please enter a valid email address');
            return false;
        }
        
        if (phone && phone.value.length < 10) {
            alert('Please enter a valid phone number');
            return false;
        }
        
        return true;
    }

    // Add click tracking for analytics
    document.addEventListener('click', function(e) {
        if (e.target.matches('.cta-button-h8j5')) {
            // Track CTA button clicks
            console.log('CTA button clicked');
        }
        
        if (e.target.matches('.phone-link-q3m7')) {
            // Track phone number clicks
            console.log('Phone number clicked');
        }
    });

    // Add scroll progress indicator
    function updateScrollProgress() {
        const scrollTop = window.pageYOffset;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        
        let progressBar = document.querySelector('.scroll-progress-bar');
        if (!progressBar) {
            progressBar = document.createElement('div');
            progressBar.className = 'scroll-progress-bar';
            progressBar.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 0%;
                height: 3px;
                background: #90c695;
                z-index: 9999;
                transition: width 0.1s ease;
            `;
            document.body.appendChild(progressBar);
        }
        
        progressBar.style.width = scrollPercent + '%';
    }

    window.addEventListener('scroll', updateScrollProgress);
</script>
</body>
</html>
