@extends('layouts.app')

@section('title', 'Kheuy Sophea — Backend Developer Portfolio')

@section('content')

{{-- ═══════════════════════════════════════════════════════════════
     HERO SECTION
     ═══════════════════════════════════════════════════════════════ --}}
<section class="hero" id="hero">
    <div class="hero-particles" id="heroParticles"></div>
    <div class="hero-gradient"></div>

    <div class="hero-content">
        <div class="hero-badge animate-fade-up">
            <i class="fas fa-code"></i>
            <span>Available for Opportunities</span>
        </div>

        <h1 class="hero-title animate-fade-up" style="animation-delay: 0.1s">
            Hi, I'm <span class="text-gradient">Kheuy Sophea</span>
        </h1>

        <div class="hero-subtitle animate-fade-up" style="animation-delay: 0.2s">
            <span class="typing-text" id="typingText"></span>
            <span class="typing-cursor">|</span>
        </div>

        <p class="hero-description animate-fade-up" style="animation-delay: 0.3s">
            A passionate Backend Developer & MIS Student from Cambodia, building robust
            and scalable server-side solutions with modern frameworks.
        </p>

        <div class="hero-cta animate-fade-up" style="animation-delay: 0.4s">
            <a href="#contact" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Get in Touch
            </a>
            <a href="#projects" class="btn btn-outline">
                <i class="fas fa-briefcase"></i> View Projects
            </a>
        </div>

        <div class="hero-stats animate-fade-up" style="animation-delay: 0.5s">
            <div class="stat-item">
                <span class="stat-number" data-count="10">0</span><span class="stat-plus">+</span>
                <span class="stat-label">Technologies</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number" data-count="3">0</span><span class="stat-plus">+</span>
                <span class="stat-label">Frameworks</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number" data-count="2">0</span><span class="stat-plus">+</span>
                <span class="stat-label">Years Learning</span>
            </div>
        </div>
    </div>

    <div class="scroll-indicator animate-fade-up" style="animation-delay: 0.7s">
        <a href="#about">
            <div class="mouse">
                <div class="mouse-wheel"></div>
            </div>
            <span>Scroll Down</span>
        </a>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     ABOUT SECTION
     ═══════════════════════════════════════════════════════════════ --}}
<section class="section about" id="about">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag"><i class="fas fa-user"></i> About Me</span>
            <h2 class="section-title">Get to Know <span class="text-gradient">Me</span></h2>
            <p class="section-subtitle">A dedicated developer with a passion for backend technologies</p>
        </div>

        <div class="about-grid">
            <div class="about-text reveal">
                <p>
                    I am a motivated and detail-oriented individual with a genuine passion for backend development.
                    Currently a Year 4 student of Management Information Systems at SETEC Institute in Phnom Penh,
                    I have built a solid technical foundation across web development, database management, and
                    systems administration.
                </p>
                <p>
                    Through my academic training and practical work experience, I have developed proficiency in a
                    range of programming languages and frameworks, including PHP, JavaScript, Python, Java, and C#,
                    alongside modern frameworks such as Laravel, Angular.js, and Spring Boot.
                </p>
                <p>
                    I am committed to continuous learning and am confident in my ability to contribute meaningfully
                    to any development team while continuing to grow as a professional.
                </p>
            </div>

            <div class="about-info reveal">
                <div class="info-card">
                    <div class="info-card-header">
                        <i class="fas fa-id-card"></i>
                        <h3>Personal Information</h3>
                    </div>
                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label"><i class="fas fa-calendar"></i> Date of Birth</span>
                            <span class="info-value">03 May 2005</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label"><i class="fas fa-flag"></i> Nationality</span>
                            <span class="info-value">Khmer</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label"><i class="fas fa-map-marker-alt"></i> Location</span>
                            <span class="info-value">Phnom Penh, Cambodia</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label"><i class="fas fa-envelope"></i> Email</span>
                            <span class="info-value">sopheakheuy51@gmail.com</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label"><i class="fas fa-phone"></i> Phone</span>
                            <span class="info-value">085 455 439</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label"><i class="fas fa-language"></i> Languages</span>
                            <span class="info-value">Khmer (Native), English</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     SKILLS SECTION
     ═══════════════════════════════════════════════════════════════ --}}
<section class="section skills" id="skills">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag"><i class="fas fa-cogs"></i> My Skills</span>
            <h2 class="section-title">Technical <span class="text-gradient">Expertise</span></h2>
            <p class="section-subtitle">A comprehensive toolkit spanning backend, frontend, databases, and DevOps</p>
        </div>

        <div class="skills-grid">
            {{-- Programming Languages --}}
            <div class="skill-category reveal">
                <div class="skill-category-header">
                    <div class="skill-icon-wrap">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Programming Languages</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag" data-level="85"><i class="fab fa-php"></i> PHP</span>
                    <span class="skill-tag" data-level="80"><i class="fab fa-java"></i> Java</span>
                    <span class="skill-tag" data-level="80"><i class="fab fa-js-square"></i> JavaScript</span>
                    <span class="skill-tag" data-level="75"><i class="fab fa-python"></i> Python</span>
                    <span class="skill-tag" data-level="70"><i class="fas fa-code"></i> C++</span>
                    <span class="skill-tag" data-level="70"><i class="fas fa-code"></i> C#</span>
                    <span class="skill-tag" data-level="90"><i class="fab fa-html5"></i> HTML</span>
                    <span class="skill-tag" data-level="85"><i class="fab fa-css3-alt"></i> CSS</span>
                </div>
            </div>

            {{-- Frameworks --}}
            <div class="skill-category reveal">
                <div class="skill-category-header">
                    <div class="skill-icon-wrap">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Frameworks</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag" data-level="85"><i class="fab fa-laravel"></i> Laravel</span>
                    <span class="skill-tag" data-level="70"><i class="fab fa-angular"></i> Angular.js</span>
                    <span class="skill-tag" data-level="75"><i class="fas fa-leaf"></i> Spring Boot</span>
                </div>
            </div>

            {{-- Databases --}}
            <div class="skill-category reveal">
                <div class="skill-category-header">
                    <div class="skill-icon-wrap">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Databases</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag" data-level="80"><i class="fas fa-database"></i> Oracle</span>
                    <span class="skill-tag" data-level="85"><i class="fas fa-database"></i> MySQL</span>
                    <span class="skill-tag" data-level="80"><i class="fas fa-database"></i> PostgreSQL</span>
                    <span class="skill-tag" data-level="75"><i class="fas fa-database"></i> MS SQL Server</span>
                    <span class="skill-tag" data-level="65"><i class="fas fa-database"></i> MS Access</span>
                </div>
            </div>

            {{-- Systems & Networking --}}
            <div class="skill-category reveal">
                <div class="skill-category-header">
                    <div class="skill-icon-wrap">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Systems & Networking</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag" data-level="75"><i class="fab fa-windows"></i> Windows Server</span>
                    <span class="skill-tag" data-level="70"><i class="fab fa-linux"></i> Linux (Ubuntu)</span>
                </div>
            </div>

            {{-- Tools --}}
            <div class="skill-category reveal">
                <div class="skill-category-header">
                    <div class="skill-icon-wrap">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Developer Tools</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag" data-level="90"><i class="fas fa-code"></i> VS Code</span>
                    <span class="skill-tag" data-level="80"><i class="fab fa-git-alt"></i> Git</span>
                    <span class="skill-tag" data-level="75"><i class="fas fa-paper-plane"></i> Postman</span>
                    <span class="skill-tag" data-level="70"><i class="fab fa-docker"></i> Docker</span>
                    <span class="skill-tag" data-level="70"><i class="fas fa-desktop"></i> VMware</span>
                    <span class="skill-tag" data-level="80"><i class="fas fa-server"></i> Laragon</span>
                    <span class="skill-tag" data-level="75"><i class="fas fa-code"></i> IntelliJ IDEA</span>
                    <span class="skill-tag" data-level="70"><i class="fas fa-database"></i> SQL Developer</span>
                </div>
            </div>

            {{-- AI Tools --}}
            <div class="skill-category reveal">
                <div class="skill-category-header">
                    <div class="skill-icon-wrap">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>AI Tools</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag" data-level="80"><i class="fas fa-brain"></i> Claude AI</span>
                    <span class="skill-tag" data-level="85"><i class="fas fa-comment-dots"></i> ChatGPT</span>
                    <span class="skill-tag" data-level="75"><i class="fas fa-magic"></i> Google Gemini</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     EDUCATION SECTION
     ═══════════════════════════════════════════════════════════════ --}}
<section class="section education" id="education">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag"><i class="fas fa-graduation-cap"></i> Education</span>
            <h2 class="section-title">Academic <span class="text-gradient">Journey</span></h2>
            <p class="section-subtitle">My educational background and certifications</p>
        </div>

        <div class="timeline">
            <div class="timeline-item reveal">
                <div class="timeline-marker">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3>Bachelor of Management of Information System</h3>
                        <span class="timeline-badge">2023 – Present</span>
                    </div>
                    <h4 class="timeline-institution">
                        <i class="fas fa-university"></i> SETEC Institute, Phnom Penh
                    </h4>
                    <p class="timeline-detail">Currently in Year 4, Semester 1</p>
                    <div class="timeline-tags">
                        <span>Database Management</span>
                        <span>System Analysis</span>
                        <span>Programming</span>
                        <span>Networking</span>
                        <span>Designing</span>
                    </div>
                    <p class="timeline-note">
                        <i class="fas fa-certificate"></i> Foundation Year Certificate issued May 27, 2024
                    </p>
                </div>
            </div>

            <div class="timeline-item reveal">
                <div class="timeline-marker">
                    <i class="fas fa-school"></i>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3>National Baccalaureate II</h3>
                        <span class="timeline-badge">2019 – 2022</span>
                    </div>
                    <h4 class="timeline-institution">
                        <i class="fas fa-university"></i> Prey Phov High School
                    </h4>
                    <p class="timeline-detail">Certified in 2023</p>
                </div>
            </div>

            <div class="timeline-item reveal">
                <div class="timeline-marker">
                    <i class="fas fa-certificate"></i>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3>Registered Java Enterprise Spring Framework</h3>
                        <span class="timeline-badge">Short Course</span>
                    </div>
                    <h4 class="timeline-institution">
                        <i class="fas fa-university"></i> Norina Institute
                    </h4>
                    <p class="timeline-detail">Professional certification in Java Enterprise development with Spring Framework</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     EXPERIENCE SECTION
     ═══════════════════════════════════════════════════════════════ --}}
<section class="section experience" id="experience">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag"><i class="fas fa-briefcase"></i> Experience</span>
            <h2 class="section-title">Work <span class="text-gradient">Experience</span></h2>
            <p class="section-subtitle">Professional roles that shaped my career</p>
        </div>

        <div class="experience-grid">
            <div class="experience-card reveal">
                <div class="experience-card-accent"></div>
                <div class="experience-card-content">
                    <div class="experience-header">
                        <div class="experience-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div>
                            <h3>Recruitment Officer</h3>
                            <h4 class="experience-company">
                                <i class="fas fa-building"></i> Western Management Consulting
                            </h4>
                        </div>
                    </div>
                    <span class="experience-date">
                        <i class="fas fa-calendar-alt"></i> August 2024 – Present
                    </span>
                    <ul class="experience-tasks">
                        <li>Managing recruitment processes and candidate evaluations</li>
                        <li>Coordinating with teams to fulfill staffing requirements</li>
                        <li>Utilizing organizational and communication skills in a professional environment</li>
                    </ul>
                </div>
            </div>

            <div class="experience-card reveal">
                <div class="experience-card-accent"></div>
                <div class="experience-card-content">
                    <div class="experience-header">
                        <div class="experience-icon">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <div>
                            <h3>Barista</h3>
                            <h4 class="experience-company">
                                <i class="fas fa-building"></i> Pidao Coffee
                            </h4>
                        </div>
                    </div>
                    <span class="experience-date">
                        <i class="fas fa-calendar-alt"></i> January – October 2023
                    </span>
                    <ul class="experience-tasks">
                        <li>Delivered excellent customer service in a fast-paced environment</li>
                        <li>Developed teamwork and time management skills</li>
                        <li>Maintained quality standards and operational efficiency</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     PROJECTS SECTION
     ═══════════════════════════════════════════════════════════════ --}}
<section class="section projects" id="projects">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag"><i class="fas fa-project-diagram"></i> Projects</span>
            <h2 class="section-title">Academic <span class="text-gradient">Projects</span></h2>
            <p class="section-subtitle">Hands-on projects built during my studies</p>
        </div>

        <div class="projects-grid">
            <div class="project-card reveal">
                <div class="project-card-glow"></div>
                <div class="project-card-content">
                    <div class="project-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>Systems Analysis Projects</h3>
                    <p>Developed comprehensive system analysis documentation and diagrams following industry-standard methodologies.</p>
                    <div class="project-tech">
                        <span>UML</span>
                        <span>System Design</span>
                        <span>Documentation</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="project-card-glow"></div>
                <div class="project-card-content">
                    <div class="project-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Web Application Development</h3>
                    <p>Built full-stack web applications using Laravel and modern frontend technologies with database integration.</p>
                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="project-card-glow"></div>
                <div class="project-card-content">
                    <div class="project-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Database Management Systems</h3>
                    <p>Designed and implemented relational database schemas with complex queries, stored procedures, and optimization.</p>
                    <div class="project-tech">
                        <span>Oracle</span>
                        <span>MySQL</span>
                        <span>SQL</span>
                        <span>PostgreSQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="project-card-glow"></div>
                <div class="project-card-content">
                    <div class="project-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Network Administration</h3>
                    <p>Configured and managed network infrastructure including server setup, routing, and security protocols.</p>
                    <div class="project-tech">
                        <span>Windows Server</span>
                        <span>Linux</span>
                        <span>VMware</span>
                        <span>Networking</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="project-card-glow"></div>
                <div class="project-card-content">
                    <div class="project-icon">
                        <i class="fab fa-java"></i>
                    </div>
                    <h3>Java Enterprise Application</h3>
                    <p>Developed enterprise-grade Java applications using Spring Boot framework with RESTful API design.</p>
                    <div class="project-tech">
                        <span>Java</span>
                        <span>Spring Boot</span>
                        <span>REST API</span>
                        <span>Maven</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="project-card-glow"></div>
                <div class="project-card-content">
                    <div class="project-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3>Desktop Application (C# / C++)</h3>
                    <p>Created desktop applications for practical coursework, implementing OOP principles and GUI design.</p>
                    <div class="project-tech">
                        <span>C#</span>
                        <span>C++</span>
                        <span>OOP</span>
                        <span>.NET</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     CONTACT SECTION
     ═══════════════════════════════════════════════════════════════ --}}
<section class="section contact" id="contact">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag"><i class="fas fa-envelope"></i> Contact</span>
            <h2 class="section-title">Get in <span class="text-gradient">Touch</span></h2>
            <p class="section-subtitle">Have a project in mind or want to connect? Let's talk!</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info reveal">
                <div class="contact-info-card">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p>sopheakheuy51@gmail.com</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <p>085 455 439</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Location</h4>
                            <p>Sangkat Ou Baek K'am, Khan Sen Sok,<br>Phnom Penh, Cambodia</p>
                        </div>
                    </div>
                </div>

                <div class="contact-availability">
                    <div class="availability-dot"></div>
                    <span>Available for internship & freelance opportunities</span>
                </div>
            </div>

            <div class="contact-form-wrap reveal">
                <form class="contact-form" id="contactForm">
                    @csrf
                    <div class="form-group">
                        <div class="input-icon"><i class="fas fa-user"></i></div>
                        <input type="text" name="name" id="contactName" placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <div class="input-icon"><i class="fas fa-envelope"></i></div>
                        <input type="email" name="email" id="contactEmail" placeholder="Your Email" required>
                    </div>

                    <div class="form-group">
                        <div class="input-icon"><i class="fas fa-tag"></i></div>
                        <input type="text" name="subject" id="contactSubject" placeholder="Subject" required>
                    </div>

                    <div class="form-group">
                        <div class="input-icon textarea-icon"><i class="fas fa-comment-dots"></i></div>
                        <textarea name="message" id="contactMessage" placeholder="Your Message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-submit" id="contactSubmit">
                        <span class="btn-text"><i class="fas fa-paper-plane"></i> Send Message</span>
                        <span class="btn-loading"><i class="fas fa-spinner fa-spin"></i> Sending...</span>
                    </button>

                    <div class="form-status" id="formStatus"></div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
