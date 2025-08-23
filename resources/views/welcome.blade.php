@extends('index')
@push('style')
    <title>JOYBOY'S PORTFOLIO</title>
    <style>
        /* Updated Navigation Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--bg-light);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .nav-container {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;
        }

        .nav-center {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            position: relative;
        }

        .nav-links a {
            color: var(--text-color);
            text-decoration: none;
            transition: color 0.3s;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .nav-links a:hover {
            color: var(--accent-color);
            background: rgba(243, 156, 18, 0.1);
        }

        /* Dashboard Dropdown Styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--bg-light);
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1001;
            border-radius: 5px;
            top: 100%;
            left: 0;
            border: 1px solid #444;
        }

        .dropdown-content a {
            color: var(--text-color);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background 0.3s;
        }

        .dropdown-content a:hover {
            background-color: var(--primary-color);
            color: var(--accent-color);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown > a::after {
            content: " ▼";
            font-size: 0.8rem;
            margin-left: 0.5rem;
        }

        /* Auth Section Styles */
        .auth-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .auth-btn {
            background: var(--accent-color);
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
            font-size: 0.9rem;
        }

        .auth-btn:hover {
            background: #e67e22;
        }

        .user-info {
            color: var(--text-color);
            font-size: 0.9rem;
        }

        /* Mobile Navigation */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--text-color);
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-wrap: wrap;
                padding: 1rem;
            }

            .nav-center {
                order: 3;
                width: 100%;
                margin-top: 1rem;
                display: none;
            }

            .nav-center.active {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
                gap: 0.5rem;
            }

            .mobile-menu-btn {
                display: block;
            }

            .dropdown-content {
                position: static;
                display: block;
                box-shadow: none;
                border: none;
                background: var(--primary-color);
                margin-left: 1rem;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .auth-section {
                gap: 0.5rem;
            }

            .auth-btn {
                padding: 6px 12px;
                font-size: 0.8rem;
            }

            .user-info {
                font-size: 0.8rem;
            }
        }

        .login-modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
        }

        .modal-content {
            background-color: var(--bg-light);
            margin: 10% auto;
            padding: 2rem;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            position: relative;
        }

        .close {
            color: var(--text-color);
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 20px;
        }

        .close:hover {
            color: var(--accent-color);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-color);
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #555;
            border-radius: 5px;
            background: var(--primary-color);
            color: var(--text-color);
            box-sizing: border-box;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--accent-color);
        }

        .form-btn {
            width: 100%;
            padding: 0.75rem;
            background: var(--accent-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 1rem;
        }

        .form-btn:hover {
            background: #e67e22;
        }

        .form-switch {
            text-align: center;
            margin-top: 1rem;
            color: var(--text-color);
        }

        .form-switch a {
            color: var(--accent-color);
            cursor: pointer;
            text-decoration: underline;
        }

        .error-message {
            color: #e74c3c;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .success-message {
            color: #27ae60;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }
    </style>
@endpush

@section('main-content')
    <!-- Login Modal -->
    <div id="loginModal" class="login-modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('loginModal')">&times;</span>
            <h2 style="color: var(--accent-color); margin-bottom: 1.5rem; text-align: center;">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="login_email">Email:</label>
                    <input type="email" id="login_email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="login_password">Password:</label>
                    <input type="password" id="login_password" name="password" required>
                </div>

                @if($errors->any())
                    <div class="error-message">
                        {{ $errors->first() }}
                    </div>
                @endif

                <button type="submit" class="form-btn">Login</button>
            </form>

            <div class="form-switch">
                Don't have an account? <a onclick="switchToRegister()">Register here</a>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="login-modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('registerModal')">&times;</span>
            <h2 style="color: var(--accent-color); margin-bottom: 1.5rem; text-align: center;">Register</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="register_name">Name:</label>
                    <input type="text" id="register_name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="register_email">Email:</label>
                    <input type="email" id="register_email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="register_password">Password:</label>
                    <input type="password" id="register_password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="register_password_confirmation">Confirm Password:</label>
                    <input type="password" id="register_password_confirmation" name="password_confirmation" required>
                </div>

                @if($errors->any())
                    <div class="error-message">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <button type="submit" class="form-btn">Register</button>
            </form>

            <div class="form-switch">
                Already have an account? <a onclick="switchToLogin()">Login here</a>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">JOYBOY'S PORTFOLIO</div>

            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">☰</button>

            <div class="nav-center" id="navCenter">
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about-me-section">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#work">Work Experience</a></li>
                    @auth
                        <li class="dropdown">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                            <div class="dropdown-content">
                                <a href="{{ route('dashboard') }}">Overview</a>
                                <a href="#" onclick="showComingSoon('Projects Management')">Manage Projects</a>
                                <a href="#" onclick="showComingSoon('Reports & Analytics')">Reports</a>
                                <a href="#" onclick="showComingSoon('Education Management')">Manage Education</a>
                                <a href="#" onclick="showComingSoon('Skills Management')">Manage Skills</a>
                                <a href="#" onclick="showComingSoon('Profile Settings')">Profile Settings</a>
                            </div>
                        </li>
                    @endauth
                    <li><a href="#contact">Contact Me</a></li>
                </ul>
            </div>

            <div class="auth-section">
                @auth
                    <span class="user-info">Welcome, {{ Auth::user()->name }}!</span>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="auth-btn">Logout</button>
                    </form>
                @else
                    <button class="auth-btn" onclick="openLoginModal()">Login</button>
                    <button class="auth-btn" onclick="openRegisterModal()">Register</button>
                @endauth
            </div>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="about" id="about-me-section">
            <h2>Swapnil Dey</h2>
            <p>I am a passionate and dedicated developer with expertise in web technologies, striving to build impactful and user-friendly applications.I am a creative thinker with a strong curiosity about technology, human emotion, and expression. You're someone who explores both artistic and technical sides</p>
            <div class="buttons">
                <a href="https://docs.google.com/document/d/1c0m67P28iH9UnAbBIiiICXDtJYnnORpv3RuLmLO-WyY/edit?tab=t.0">
                      <button>View CV</button>
                  </a>
                </div>
        </div>
        <div class="profile-pic">
            <img src="assets/profile.jpg" alt="Profile Picture of Swapnil Dey" />
        </div>
    </section>

    <section id="skills" class="content-section section-padding">
        <h2>My Skills</h2>
        <div class="skill-item">
            <span>HTML/CSS</span>
            <span>Advanced</span>
        </div>
        <div class="skill-item">
            <span>JavaScript</span>
            <span>Beginer</span>
        </div>
        <div class="skill-item">
            <span>PHP/Laravel</span>
            <span>Expert</span>
        </div>
        <div class="skill-item">
            <span>Database (SQL)</span>
            <span>Advanced</span>
        </div>
        <div class="skill-item">
            <span>Responsive Design</span>
            <span>Beginner</span>
        </div>
    </section>

    <section id="projects" class="content-section section-padding">
        <h2>My Projects</h2>
        <div class="project-grid">
            <div class="project-card">
                <h4>E-commerce Platform</h4>
                <p>Developing a full-stack e-commerce solution with user authentication, product management, and payment gateway integration. (PHP, Laravel, MySQL, JavaScript)</p>
                <div class="project-links">
                    <a href="https://github.com/MahirTanzim/e-learning-platform/tree/main" target="_blank">View Project</a>
                </div>
            </div>
            <div class="project-card">
                <h4>Portfolio Website</h4>
                <p>Designing and built a personal portfolio site to showcase my projects and skills, focusing on clean UI/UX. (HTML, CSS, JavaScript)</p>
                <div class="project-links">
                    <a href="https://github.com/your-senpai-swapnil/Full-Stack-Dynamic-Portfolio" target="_blank">View Project</a>
                </div>
            </div>
            <div class="project-card">
                <h4>Task Management App</h4>
                <p>A simple web application for managing daily tasks with CRUD operations and user-specific data. (Node.js, Express, MongoDB)</p>
                <div class="project-links">
                    <a href="#" target="_blank">GitHub Repo</a>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="content-section section-padding">
    <h2>Education</h2>
    <div class="timeline-container">
        <div class="timeline-item">
            <div class="timeline-date">2022 - 2025</div>
            <div class="timeline-content">
                <h4>B.Sc. in Computer Science & Engineering</h4>
                <p><strong>Daffodil International University</strong></p>
                <img src="{{ asset('assets/images/education/diu.png') }}" alt="DIU Logo" class="edu-image">
                <p>Relevant coursework: Data Structures, Algorithms, Web Development, Database Management.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-date">2018 - 2020</div>
            <div class="timeline-content">
                <h4>Higher Secondary Certificate (Science)</h4>
                <p><strong>Govt Syed Hatem Ali College</strong></p>
                <img src="{{ asset('assets/images/education/hatem-college.jpg') }}" alt="Hatem Ali College" class="edu-image">
                <p>Focused on Physics, Chemistry, Mathematics, and Biology.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-date">2010 - 2017</div>
            <div class="timeline-content">
                <h4>Secondary School Certificate (Science)</h4>
                <p><strong>Barisal Zilla School,Barisal</strong></p>
                <img src="{{ asset('assets/images/education/bzs.jpg') }}" alt="Barisal Zilla School" class="edu-image">
                <p>High School</p>
            </div>
        </div>
    </div>
</section>

    <section id="work" class="content-section section-padding">
        <h2>Work Experience</h2>
        <div class="timeline-container">
            <div class="timeline-item">
                <div class="timeline-date">Jan 2023 - Present</div>
                <div class="timeline-content">
                    <h4>Junior Web Developer</h4>
                    <p><strong>ABC Solutions Ltd.</strong></p>
                    <ul>
                        <li>Developed and maintained responsive web applications using Laravel and Vue.js.</li>
                        <li>Collaborated with cross-functional teams to define, design, and ship new features.</li>
                        <li>Participated in code reviews and ensured code quality and best practices.</li>
                    </ul>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">May 2022 - Dec 2022</div>
                <div class="timeline-content">
                    <h4>Frontend Intern</h4>
                    <p><strong>XYZ Digital Agency</strong></p>
                    <ul>
                        <li>Assisted in building user interfaces for client websites using HTML, CSS, and JavaScript.</li>
                        <li>Implemented UI designs from Figma/Sketch into functional web pages.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="content-section section-padding" style="text-align: center; background-color: var(--light-bg-primary); box-shadow: none;">
        <h2>Contact Me</h2>
        <p>Feel free to reach out for collaborations or just to say hello!</p>
        <p>Email: <a href="mailto:swapnil15-3477@diu.edu.bd">swapnil15-3477@diu.edu.bd</a></p>
        <p>LinkedIn: <a href="#" target="_blank">Swapnil Dey</a></p>
        <p>GitHub: <a href="https://github.com/your-senpai-swapnil" target="_blank">JoyBoys GITHUB</a></p>
        <p style="margin-top: 2rem;">&copy; 2025 Swapnil Dey. All rights reserved.</p>
    </footer>

    <script>
        // Navigation smooth scrolling
        const navLinks = document.querySelectorAll(".nav-links li a");
        navLinks.forEach(link => {
            link.addEventListener("click", function(event) {
                // Only prevent default for anchor links (starting with #)
                if (this.getAttribute('href').startsWith('#')) {
                    event.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });
        });

        // Button interactions
        const buttons = document.querySelectorAll(".buttons button");
        buttons.forEach(button => {
            button.addEventListener("click", function() {
                console.log(`Clicked: ${button.innerText}`);
            });
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            const navCenter = document.getElementById('navCenter');
            navCenter.classList.toggle('active');
        }

        // Coming soon notification for dashboard features
        function showComingSoon(feature) {
            showNotification(`${feature} feature is coming soon!`, 'warning');
        }

        // Modal functions
        function openLoginModal() {
            document.getElementById('loginModal').style.display = 'block';
        }

        function openRegisterModal() {
            document.getElementById('registerModal').style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function switchToRegister() {
            closeModal('loginModal');
            openRegisterModal();
        }

        function switchToLogin() {
            closeModal('registerModal');
            openLoginModal();
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');
            if (event.target == loginModal) {
                loginModal.style.display = 'none';
            }
            if (event.target == registerModal) {
                registerModal.style.display = 'none';
            }
        }

        // Auto-open modals if there are validation errors
        @if($errors->any())
            @if(old('name'))
                // If name field was submitted, it was a registration attempt
                openRegisterModal();
            @else
                // Otherwise, it was a login attempt
                openLoginModal();
            @endif
        @endif
    </script>
@endsection
