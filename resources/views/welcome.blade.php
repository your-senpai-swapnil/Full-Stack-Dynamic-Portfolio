@extends('index')
@push('style')
    <title>JOYBOY'S PORTFOLIO</title>
@endpush
@section('main-content')

        <nav class="navbar">
            <div class="logo">JOYBOY'S PORTFOLIO</div>
            <ul class="nav-links">
               <li><a href="#home">Home</a></li>
               <li><a href="#about-me-section">About</a></li>
               <li><a href="#skills">Skills</a></li>
               <li><a href="#projects">Projects</a></li>
               <li><a href="#education">Education</a></li>
               <li><a href="#work">Work Experience</a></li>
              <li><a href="#contact">Contact Me</a></li>
            </ul>

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
                <div class="timeline-date">2020 - 2024</div>
                <div class="timeline-content">
                    <h4>B.Sc. in Computer Science & Engineering</h4>
                    <p><strong>Daffodil International University</strong></p>
                    <p>Relevant coursework: Data Structures, Algorithms, Web Development, Database Management.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2018 - 2020</div>
                <div class="timeline-content">
                    <h4>Higher Secondary Certificate (Science)</h4>
                    <p><strong>Govt Syed Hatem Ali College</strong></p>
                    <p>Focused on Physics, Chemistry, Mathematics, and Biology.</p>
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
        const navLinks = document.querySelectorAll(".nav-links li a");
        navLinks.forEach(link => {
         link.addEventListener("click", function(event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

      
        const buttons = document.querySelectorAll(".buttons button");
        buttons.forEach(button => {
            button.addEventListener("click", function() {
                alert(`You clicked: ${button.innerText}`);
            });
        });
    </script>
@endsection