<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orvantatoday - Professional Garden Design & Landscaping Services</title>
    <meta name="description" content="Transform your outdoor space with Orvantatoday's expert garden design and landscaping services. Specializing in sustainable gardens, plant selection, and outdoor living spaces for residential and commercial properties.">
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
            background-color: #f8f9fa;
        }

        .header-nav-container-x7k9 {
            background: linear-gradient(135deg, #2d5016, #4a7c59);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m3p8 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q5w2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }

        .navigation-links-r9t4 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-item-link-b6y1 {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-item-link-b6y1:hover {
            color: #90c695;
        }

        .hero-section-z8n5 {
            background: linear-gradient(rgba(45, 80, 22, 0.7), rgba(74, 124, 89, 0.7)), url('https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content-l4d7 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-k2s9 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-v6x3 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-primary-h8j4 {
            background: #ff6b35;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-primary-h8j4:hover {
            background: #e55a2b;
        }

        .services-section-a9f2 {
            padding: 80px 0;
            background: white;
        }

        .container-wrapper-u3k7 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-p5w8 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2d5016;
        }

        .services-grid-n7q4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .service-card-t9r6 {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .service-card-t9r6:hover {
            transform: translateY(-5px);
        }

        .service-icon-m4b8 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #4a7c59;
        }

        .about-section-c6x1 {
            padding: 80px 0;
            background: linear-gradient(135deg, #f1f8e9, #e8f5e8);
        }

        .about-content-grid-y2k5 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-block-s7n9 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-container-d4w3 {
            text-align: center;
        }

        .about-image-d4w3 {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .history-section-j8p2 {
            padding: 80px 0;
            background: white;
        }

        .timeline-container-f5q7 {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-x3v9 {
            background: #f8f9fa;
            padding: 2rem;
            margin: 2rem 0;
            border-left: 4px solid #4a7c59;
            border-radius: 0 10px 10px 0;
        }

        .timeline-year-k6m4 {
            font-size: 1.2rem;
            font-weight: bold;
            color: #2d5016;
            margin-bottom: 0.5rem;
        }

        .expertise-section-w9l3 {
            padding: 80px 0;
            background: #2d5016;
            color: white;
        }

        .expertise-grid-r7t5 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .expertise-card-b2n8 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
        }

        .process-section-q4y6 {
            padding: 80px 0;
            background: white;
        }

        .process-steps-h5k1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .process-step-z9x7 {
            text-align: center;
            padding: 2rem;
        }

        .step-number-v3m2 {
            background: #ff6b35;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .testimonials-section-l8p4 {
            padding: 80px 0;
            background: linear-gradient(135deg, #e8f5e8, #f1f8e9);
        }

        .testimonials-grid-n6w9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card-s4r7 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .testimonial-text-g2k5 {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .testimonial-author-t7n3 {
            font-weight: bold;
            color: #2d5016;
        }

        .contact-section-u9q8 {
            padding: 80px 0;
            background: #2d5016;
            color: white;
        }

        .contact-grid-m5x1 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info-p8w4 {
            font-size: 1.1rem;
        }

        .contact-item-d6y2 {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-form-k3v7 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
        }

        .form-group-j9s5 {
            margin-bottom: 1.5rem;
        }

        .form-input-a7f4 {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-textarea-h2k8 {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            min-height: 120px;
            resize: vertical;
        }

        .footer-section-x4n6 {
            background: #1a2f0e;
            color: white;
            padding: 40px 0 20px;
        }

        .footer-content-w7q3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column-r5t9 {
            line-height: 1.8;
        }

        .footer-title-b8m1 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #90c695;
        }

        .footer-link-z3p7 {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-link-z3p7:hover {
            color: #90c695;
        }

        .footer-bottom-l6x4 {
            border-top: 1px solid #333;
            padding-top: 20px;
            text-align: center;
            color: #ccc;
        }

        .modal-overlay-q9w2 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-v5k8 {
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

        .modal-close-n7j4 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #666;
        }

        .phone-link-c8r5 {
            color: inherit;
            text-decoration: none;
        }

        .sustainability-section-f4m9 {
            padding: 80px 0;
            background: linear-gradient(135deg, #f1f8e9, #e8f5e8);
        }

        .sustainability-grid-h7p1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .sustainability-card-k2w6 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .plant-care-section-y8n3 {
            padding: 80px 0;
            background: white;
        }

        .care-tips-grid-s6q7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .care-tip-card-m9x4 {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            border-left: 4px solid #4a7c59;
        }

        @media (max-width: 768px) {
            .navigation-links-r9t4 {
                display: none;
            }
            
            .hero-title-k2s9 {
                font-size: 2.5rem;
            }
            
            .about-content-grid-y2k5,
            .contact-grid-m5x1 {
                grid-template-columns: 1fr;
            }
            
            .nav-wrapper-m3p8 {
                padding: 0 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%33%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%37%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%30%31%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%30%31%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%30%31%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <header class="header-nav-container-x7k9">
        <nav class="nav-wrapper-m3p8">
            <div class="logo-brand-q5w2">Orvantatoday</div>
            <ul class="navigation-links-r9t4">
                <li><a href="#services" class="nav-item-link-b6y1">Services</a></li>
                <li><a href="#about" class="nav-item-link-b6y1">About</a></li>
                <li><a href="#history" class="nav-item-link-b6y1">History</a></li>
                <li><a href="#expertise" class="nav-item-link-b6y1">Expertise</a></li>
                <li><a href="#process" class="nav-item-link-b6y1">Process</a></li>
                <li><a href="#sustainability" class="nav-item-link-b6y1">Sustainability</a></li>
                <li><a href="#plant-care" class="nav-item-link-b6y1">Plant Care</a></li>
                <li><a href="#testimonials" class="nav-item-link-b6y1">Reviews</a></li>
                <li><a href="#contact" class="nav-item-link-b6y1">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-section-z8n5">
        <div class="hero-content-l4d7">
            <h1 class="hero-title-k2s9">Transform Your Outdoor Space</h1>
            <p class="hero-subtitle-v6x3">Expert garden design and landscaping services that bring your vision to life with sustainable, beautiful solutions for every outdoor space.</p>
            <a href="#contact" class="cta-button-primary-h8j4">Get Started Today</a>
        </div>
    </section>

    <section id="services" class="services-section-a9f2">
        <div class="container-wrapper-u3k7">
            <h2 class="section-title-p5w8">Our Garden Design Services</h2>
            <div class="services-grid-n7q4">
                <div class="service-card-t9r6">
                    <div class="service-icon-m4b8">🌿</div>
                    <h3>Garden Planning & Design</h3>
                    <p>Complete garden design solutions from concept to completion. We create detailed plans that maximize your space's potential while reflecting your personal style and needs.</p>
                </div>
                <div class="service-card-t9r6">
                    <div class="service-icon-m4b8">🌱</div>
                    <h3>Plant Selection & Installation</h3>
                    <p>Expert plant selection based on your climate, soil conditions, and maintenance preferences. We ensure every plant thrives in its designated location.</p>
                </div>
                <div class="service-card-t9r6">
                    <div class="service-icon-m4b8">🏡</div>
                    <h3>Landscape Architecture</h3>
                    <p>Comprehensive landscape architecture services including hardscaping, pathways, water features, and outdoor living spaces that complement your garden design.</p>
                </div>
                <div class="service-card-t9r6">
                    <div class="service-icon-m4b8">🌳</div>
                    <h3>Tree & Shrub Care</h3>
                    <p>Professional tree and shrub selection, planting, and ongoing care services to ensure healthy growth and longevity of your landscape investments.</p>
                </div>
                <div class="service-card-t9r6">
                    <div class="service-icon-m4b8">💧</div>
                    <h3>Irrigation Systems</h3>
                    <p>Efficient irrigation system design and installation to keep your garden healthy while conserving water and reducing maintenance requirements.</p>
                </div>
                <div class="service-card-t9r6">
                    <div class="service-icon-m4b8">🌺</div>
                    <h3>Seasonal Garden Care</h3>
                    <p>Year-round garden maintenance services including seasonal plantings, pruning, fertilization, and pest management to keep your garden looking its best.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-c6x1">
        <div class="container-wrapper-u3k7">
            <h2 class="section-title-p5w8">About Orvantatoday</h2>
            <div class="about-content-grid-y2k5">
                <div class="about-text-block-s7n9">
                    <p>At Orvantatoday, we believe that every outdoor space has the potential to become a beautiful, functional garden that enhances your quality of life. Our team of experienced garden designers and landscaping professionals brings creativity, expertise, and passion to every project.</p>
                    
                    <p>We specialize in creating sustainable garden solutions that work with nature rather than against it. From small urban balconies to expansive estate grounds, we tailor our approach to meet your specific needs, budget, and vision.</p>
                    
                    <p>Our commitment to excellence extends beyond the initial design and installation. We provide ongoing support and maintenance services to ensure your garden continues to thrive and evolve beautifully over time.</p>
                </div>
                <div class="about-image-container-d4w3">
                    <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg" alt="Beautiful garden landscape design" class="about-image-d4w3">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-section-j8p2">
        <div class="container-wrapper-u3k7">
            <h2 class="section-title-p5w8">Our Journey</h2>
            <div class="timeline-container-f5q7">
                <div class="timeline-item-x3v9">
                    <div class="timeline-year-k6m4">2015</div>
                    <h3>Company Founded</h3>
                    <p>Orvantatoday was established with a vision to transform outdoor spaces through innovative garden design. Started as a small team of passionate landscapers serving local residential clients.</p>
                </div>
                <div class="timeline-item-x3v9">
                    <div class="timeline-year-k6m4">2017</div>
                    <h3>Sustainable Focus</h3>
                    <p>Expanded our services to include eco-friendly and sustainable gardening practices. Introduced native plant specialization and water-efficient irrigation systems to our service offerings.</p>
                </div>
                <div class="timeline-item-x3v9">
                    <div class="timeline-year-k6m4">2019</div>
                    <h3>Commercial Expansion</h3>
                    <p>Began serving commercial clients including office complexes, restaurants, and public spaces. Developed expertise in large-scale landscape architecture and maintenance programs.</p>
                </div>
                <div class="timeline-item-x3v9">
                    <div class="timeline-year-k6m4">2021</div>
                    <h3>Technology Integration</h3>
                    <p>Integrated advanced design software and drone surveying technology to provide more accurate planning and visualization services for our clients' projects.</p>
                </div>
                <div class="timeline-item-x3v9">
                    <div class="timeline-year-k6m4">2023</div>
                    <h3>Award Recognition</h3>
                    <p>Received multiple industry awards for outstanding garden design and environmental stewardship. Expanded team to include certified arborists and soil specialists.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="expertise-section-w9l3">
        <div class="container-wrapper-u3k7">
            <h2 class="section-title-p5w8">Areas of Expertise</h2>
            <div class="expertise-grid-r7t5">
                <div class="expertise-card-b2n8">
                    <h3>Native Plant Gardens</h3>
                    <p>Specializing in indigenous plant species that thrive naturally in local conditions while supporting local wildlife and reducing maintenance needs.</p>
                </div>
                <div class="expertise-card-b2n8">
                    <h3>Edible Landscapes</h3>
                    <p>Creating beautiful and productive gardens that combine ornamental plants with herbs, vegetables, and fruit trees for both beauty and harvest.</p>
                </div>
                <div class="expertise-card-b2n8">
                    <h3>Water Features</h3>
                    <p>Designing and installing ponds, fountains, streams, and rain gardens that add tranquility and ecological value to your outdoor space.</p>
                </div>
                <div class="expertise-card-b2n8">
                    <h3>Pollinator Gardens</h3>
                    <p>Creating habitats that support bees, butterflies, and other beneficial insects while providing year-round color and interest in your garden.</p>
                </div>
                <div class="expertise-card-b2n8">
                    <h3>Shade Gardens</h3>
                    <p>Transforming challenging shaded areas into lush, vibrant spaces using plants that thrive in low-light conditions.</p>
                </div>
                <div class="expertise-card-b2n8">
                    <h3>Rock Gardens</h3>
                    <p>Designing alpine and rock gardens that showcase drought-tolerant plants and create stunning focal points with natural stone elements.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-q4y6">
        <div class="container-wrapper-u3k7">
            <h2 class="section-title-p5w8">Our Design Process</h2>
            <div class="process-steps-h5k1">
                <div class="process-step-z9x7">
                    <div class="step-number-v3m2">1</div>
                    <h3>Initial Consultation</h3>
                    <p>We meet with you to discuss your vision, needs, budget, and timeline. Site assessment and soil analysis are conducted during this phase.</p>
                </div>
                <div class="process-step-z9x7">
                    <div class="step-number-v3m2">2</div>
                    <h3>Design Development</h3>
                    <p>Our team creates detailed design plans including plant selections, hardscape elements, and seasonal interest considerations.</p>
                </div>
                <div class="process-step-z9x7">
                    <div class="step-number-v3m2">3</div>
                    <h3>Client Review</h3>
                    <p>We present the design concepts and make revisions based on your feedback to ensure the final plan meets all your expectations.</p>
                </div>
                <div class="process-step-z9x7">
                    <div class="step-number-v3m2">4</div>
                    <h3>Installation</h3>
                    <p>Professional installation of all garden elements including plants, hardscaping, irrigation systems, and any special features.</p>
                </div>
                <div class="process-step-z9x7">
                    <div class="step-number-v3m2">5</div>
                    <h3>Establishment Care</h3>
                    <p>Follow-up care and monitoring during the critical establishment period to ensure all plants and systems are thriving.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sustainability" class="sustainability-section-f4m9">
        <div class="container-wrapper-u3k7">
            <h2 class="section-title-p5w8">Sustainable Gardening Practices</h2>
            <div class="sustainability-grid-h7p1">
                <div class="sustainability-card-k2w6">
                    <h3>🌍 Eco-Friendly Materials</h3>
                    <p>We prioritize recycled, locally-sourced, and sustainable materials in all our projects. From reclaimed wood to permeable paving stones, every choice supports environmental health.</p>
                </div>
                <div class="sustainability-card-k2w6">
                    <h3>💧 Water Conservation</h3>
                    <p>Smart irrigation systems, drought-tolerant plants, and rainwater harvesting techniques help reduce water consumption while maintaining beautiful gardens.</p>
                </div>
                <div class="sustainability-card-k2w6">
                    <h3>🐝 Wildlife Support</h3>
                    <p>Our designs incorporate native plants and habitat features that support local wildlife, creating gardens that contribute to biodiversity and ecosystem health.</p>
                </div>
                <div class="sustainability-card-k2w6">
                    <h3>🌱 Organic Practices</h3>
                    <p>We use organic fertilizers, natural pest control methods, and soil-building techniques that promote long-term garden health without harmful chemicals.</p>
                </div>
                <div class="sustainability-card-k2w6">
                    <h3>♻️ Waste Reduction</h3>
                    <p>Composting programs, plant material recycling, and minimal packaging approaches help reduce waste and create closed-loop garden systems.</p>
                </div>
                <div class="sustainability-card-k2w6">
                    <h3>🌿 Carbon Sequestration</h3>
                    <p>Strategic tree and shrub placement, along with healthy soil practices, help your garden actively remove carbon dioxide from the atmosphere.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="plant-care" class="plant-care-section-y8n3">
        <div class="container-wrapper-u3k7">
            <h2 class="section-title-p5w8">Essential Plant Care Tips</h2>
            <div class="care-tips-grid-s6q7">
                <div class="care-tip-card-m9x4">
                    <h3>Watering Wisdom</h3>
                    <p>Deep, infrequent watering encourages strong root development. Water early morning to reduce evaporation and prevent fungal diseases. Check soil moisture before watering.</p>
                </div>
                <div class="care-tip-card-m9x4">
                    <h3>Soil Health</h3>
                    <p>Healthy soil is the foundation of any successful garden. Regular composting, mulching, and avoiding soil compaction will keep your plants thriving year after year.</p>
                </div>
                <div class="care-tip-card-m9x4">
                    <h3>Pruning Practices</h3>
                    <p>Proper pruning timing and techniques vary by plant type. Remove dead, diseased, or crossing branches first, then shape for aesthetics and air circulation.</p>
                </div>
                <div class="care-tip-card-m9x4">
                    <h3>Seasonal Feeding</h3>
                    <p>Different plants have varying nutritional needs throughout the growing season. Slow-release organic fertilizers provide steady nutrition without burning roots.</p>
                </div>
                <div class="care-tip-card-m9x4">
                    <h3>Pest Prevention</h3>
                    <p>Encourage beneficial insects, maintain plant health, and use integrated pest management approaches to prevent problems before they start.</p>
                </div>
                <div class="care-tip-card-m9x4">
                    <h3>Mulching Benefits</h3>
                    <p>Organic mulch conserves moisture, suppresses weeds, regulates soil temperature, and gradually improves soil structure as it decomposes.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials-section-l8p4">
        <div class="container-wrapper-u3k7">
            <h2 class="section-title-p5w8">What Our Clients Say</h2>
            <div class="testimonials-grid-n6w9">
                <div class="testimonial-card-s4r7">
                    <p class="testimonial-text-g2k5">"Orvantatoday transformed our backyard into a stunning oasis. Their attention to detail and plant knowledge is exceptional. We now have a garden that looks beautiful year-round and requires minimal maintenance."</p>
                    <div class="testimonial-author-t7n3">- Sarah Mitchell, Homeowner</div>
                </div>
                <div class="testimonial-card-s4r7">
                    <p class="testimonial-text-g2k5">"The team at Orvantatoday created a perfect outdoor space for our restaurant. The herb garden not only looks amazing but provides fresh ingredients for our kitchen. Our customers love dining surrounded by such beautiful landscaping."</p>
<div class="testimonial-author-t7n3">- Marcus Rodriguez, Restaurant Owner</div>
</div>
<div class="testimonial-card-s4r7">
<p class="testimonial-text-g2k5">"Working with Orvantatoday was a pleasure from start to finish. They listened to our ideas and created a design that exceeded our expectations. The native plant garden attracts so many birds and butterflies!"</p>
<div class="testimonial-author-t7n3">- Jennifer Chen, Garden Enthusiast</div>
</div>
<div class="testimonial-card-s4r7">
<p class="testimonial-text-g2k5">"Our office complex looks incredible thanks to Orvantatoday's landscape design. The low-maintenance plantings and efficient irrigation system have saved us money while creating a welcoming environment for employees and visitors."</p>
<div class="testimonial-author-t7n3">- David Thompson, Property Manager</div>
</div>
<div class="testimonial-card-s4r7">
<p class="testimonial-text-g2k5">"I thought my shady backyard was hopeless until Orvantatoday showed me what was possible. Now I have a lush, green retreat that I enjoy every morning with my coffee. Their expertise with shade plants is remarkable."</p>
<div class="testimonial-author-t7n3">- Lisa Anderson, Homeowner</div>
</div>
<div class="testimonial-card-s4r7">
<p class="testimonial-text-g2k5">"The water feature and pollinator garden that Orvantatoday designed for us has become the centerpiece of our property. We love watching the bees and butterflies, and the sound of water is so relaxing."</p>
<div class="testimonial-author-t7n3">- Robert and Mary Johnson, Retirees</div>
</div>
</div>
</div>
</section>
<section id="contact" class="contact-section-u9q8">
    <div class="container-wrapper-u3k7">
        <h2 class="section-title-p5w8">Get In Touch</h2>
        <div class="contact-grid-m5x1">
            <div class="contact-info-p8w4">
                <h3>Contact Information</h3>
                <div class="contact-item-d6y2">
                    <span>📍</span>
                    <div>
                        <strong>Address:</strong><br>
                        2847 Greenwood Avenue<br>
                        Springfield, IL 62704
                    </div>
                </div>
                <div class="contact-item-d6y2">
                    <span>📞</span>
                    <div>
                        <strong>Phone:</strong><br>
                        <a href="tel:+15559876543" class="phone-link-c8r5">(555) 987-6543</a>
                    </div>
                </div>
                <div class="contact-item-d6y2">
                    <span>✉️</span>
                    <div>
                        <strong>Email:</strong><br>
                        info@orvantatoday.com
                    </div>
                </div>
                <div class="contact-item-d6y2">
                    <span>🕒</span>
                    <div>
                        <strong>Business Hours:</strong><br>
                        Monday - Friday: 8:00 AM - 6:00 PM<br>
                        Saturday: 9:00 AM - 4:00 PM<br>
                        Sunday: Closed
                    </div>
                </div>
            </div>
            <div class="contact-form-k3v7">
                <h3>Request a Consultation</h3>
                <form>
                    <div class="form-group-j9s5">
                        <input type="text" class="form-input-a7f4" placeholder="Your Name" required>
                    </div>
                    <div class="form-group-j9s5">
                        <input type="email" class="form-input-a7f4" placeholder="Your Email" required>
                    </div>
                    <div class="form-group-j9s5">
                        <input type="tel" class="form-input-a7f4" placeholder="Your Phone">
                    </div>
                    <div class="form-group-j9s5">
                        <textarea class="form-textarea-h2k8" placeholder="Tell us about your project..." required></textarea>
                    </div>
                    <button type="submit" class="cta-button-primary-h8j4">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer-section-x4n6">
    <div class="container-wrapper-u3k7">
        <div class="footer-content-w7q3">
            <div class="footer-column-r5t9">
                <h4 class="footer-title-b8m1">Orvantatoday</h4>
                <p>Professional garden design and landscaping services creating beautiful, sustainable outdoor spaces for residential and commercial clients.</p>
                <p><strong>License #:</strong> LND-2024-8847</p>
            </div>
            <div class="footer-column-r5t9">
                <h4 class="footer-title-b8m1">Services</h4>
                <ul style="list-style: none;">
                    <li><a href="#services" class="footer-link-z3p7">Garden Design</a></li>
                    <li><a href="#services" class="footer-link-z3p7">Plant Installation</a></li>
                    <li><a href="#services" class="footer-link-z3p7">Landscape Architecture</a></li>
                    <li><a href="#services" class="footer-link-z3p7">Irrigation Systems</a></li>
                    <li><a href="#services" class="footer-link-z3p7">Garden Maintenance</a></li>
                </ul>
            </div>
            <div class="footer-column-r5t9">
                <h4 class="footer-title-b8m1">Quick Links</h4>
                <ul style="list-style: none;">
                    <li><a href="#about" class="footer-link-z3p7">About Us</a></li>
                    <li><a href="#history" class="footer-link-z3p7">Our History</a></li>
                    <li><a href="#sustainability" class="footer-link-z3p7">Sustainability</a></li>
                    <li><a href="#plant-care" class="footer-link-z3p7">Plant Care Tips</a></li>
                    <li><a href="javascript:void(0)" onclick="openModal('privacy')" class="footer-link-z3p7">Privacy Policy</a></li>
                    <li><a href="javascript:void(0)" onclick="openModal('terms')" class="footer-link-z3p7">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-column-r5t9">
                <h4 class="footer-title-b8m1">Contact Info</h4>
                <p>2847 Greenwood Avenue<br>Springfield, IL 62704</p>
                <p>Phone: <a href="tel:+15559876543" class="footer-link-z3p7">(555) 987-6543</a></p>
                <p>Email: info@orvantatoday.com</p>
                <p>Emergency: <a href="tel:+15559876544" class="footer-link-z3p7">(555) 987-6544</a></p>
            </div>
        </div>
        <div class="footer-bottom-l6x4">
            <p>© 2024 Orvantatoday. All rights reserved. | Professional Garden Design & Landscaping Services</p>
        </div>
    </div>
</footer>

<!-- Privacy Policy Modal -->
<div id="privacy-modal" class="modal-overlay-q9w2">
    <div class="modal-content-v5k8">
        <span class="modal-close-n7j4" onclick="closeModal('privacy')">×</span>
        <h2>Privacy Policy</h2>
        <p><strong>Last Updated:</strong> January 1, 2024</p>
        
        <h3>Information We Collect</h3>
        <p>Orvantatoday collects information you provide directly to us, such as when you request a consultation, subscribe to our newsletter, or contact us for services. This may include your name, email address, phone number, property address, and project details.</p>
        
        <h3>How We Use Your Information</h3>
        <p>We use the information we collect to:</p>
        <ul>
            <li>Provide garden design and landscaping services</li>
            <li>Communicate with you about your projects</li>
            <li>Send you updates about our services (with your consent)</li>
            <li>Improve our website and services</li>
            <li>Comply with legal obligations</li>
        </ul>
        
        <h3>Information Sharing</h3>
        <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our website and conducting our business.</p>
        
        <h3>Data Security</h3>
        <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
        
        <h3>Your Rights</h3>
        <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time.</p>
        
        <h3>Contact Us</h3>
        <p>If you have questions about this Privacy Policy, please contact us at info@orvantatoday.com or (555) 987-6543.</p>
    </div>
</div>

<!-- Terms of Service Modal -->
<div id="terms-modal" class="modal-overlay-q9w2">
    <div class="modal-content-v5k8">
        <span class="modal-close-n7j4" onclick="closeModal('terms')">×</span>
        <h2>Terms of Service</h2>
        <p><strong>Last Updated:</strong> January 1, 2024</p>
        
        <h3>Agreement to Terms</h3>
        <p>By accessing and using Orvantatoday's services, you agree to be bound by these Terms of Service and all applicable laws and regulations.</p>
        
        <h3>Services Description</h3>
        <p>Orvantatoday provides professional garden design, landscaping, and related outdoor space services. All services are subject to availability and our professional assessment of project feasibility.</p>
        
        <h3>Client Responsibilities</h3>
        <p>Clients are responsible for:</p>
        <ul>
            <li>Providing accurate property information and access</li>
            <li>Obtaining necessary permits where required</li>
            <li>Maintaining installed gardens according to provided guidelines</li>
            <li>Timely payment according to agreed terms</li>
        </ul>
        
        <h3>Service Limitations</h3>
        <p>Our services are subject to weather conditions, seasonal availability of plants, and local regulations. We reserve the right to modify project timelines as necessary for quality and safety.</p>
        
        <h3>Warranty and Liability</h3>
        <p>We provide a limited warranty on plant materials and workmanship as specified in individual service agreements. Our liability is limited to the value of services provided.</p>
        
        <h3>Payment Terms</h3>
        <p>Payment terms are specified in individual service contracts. Late payments may be subject to additional fees as outlined in your service agreement.</p>
        
        <h3>Modification of Terms</h3>
        <p>We reserve the right to modify these terms at any time. Continued use of our services constitutes acceptance of any changes.</p>
        
        <h3>Contact Information</h3>
        <p>For questions about these Terms of Service, contact us at info@orvantatoday.com or (555) 987-6543.</p>
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
    function openModal(type) {
        document.getElementById(type + '-modal').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeModal(type) {
        document.getElementById(type + '-modal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target.classList.contains('modal-overlay-q9w2')) {
            event.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Form submission handler
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your message! We will contact you within 24 hours to schedule your consultation.');
        this.reset();
    });

    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.header-nav-container-x7k9');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(45, 80, 22, 0.95)';
        } else {
            header.style.background = 'linear-gradient(135deg, #2d5016, #4a7c59)';
        }
    });

    // Animate elements on scroll
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

    // Observe elements for animation
    document.querySelectorAll('.service-card-t9r6, .testimonial-card-s4r7, .timeline-item-x3v9').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
</script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body> 
</html> 




