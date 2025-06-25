<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @stack ('style')
<style>
        :root {
            --light-bg-primary: #f0f2f5; 
            --light-bg-secondary: #ffffff; 
            --light-text-dark: #34495e; 
            --light-text-light: #7f8c8d;
            --light-accent-primary: #28a745; 
            --light-accent-secondary: #007bff; 
            --light-border: #e0e6ed; 
            --section-gap: 80px; 
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--light-bg-primary);
            color: var(--light-text-dark);
            line-height: 1.6;
        }

        
        .section-padding {
            padding: var(--section-gap) 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        h1, h2, h3, h4 {
            color: var(--light-accent-secondary);
            margin-bottom: 0.8em;
        }

        h2 { font-size: 2.2rem; text-align: center; margin-bottom: 1.5em;}


        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--light-bg-secondary);
            padding: 1rem 1.3rem;
            color: var(--light-text-dark);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); 
            position: sticky;
            top: 0;
            z-index: 800;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem; /* Slightly more space for elegance */
        }

        .nav-links li a {
            text-decoration: none;
            color: var(--light-text-light); /* Muted link color */
            font-weight: bold;
            transition: color 0.3s ease; /* Smooth transition for hover */
        }

        .nav-links li a:hover {
            color: var(--light-accent-primary); /* Green on hover */
        }

        .hero {
            display: flex;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            justify-content: space-around; /* Distribute items with space */
            align-items: center;
            padding: 4rem 2rem; /* More vertical padding */
            background-color: var(--light-bg-primary); /* Consistent light background */
            min-height: calc(100vh - 70px); /* Adjust based on navbar height */
            text-align: center; /* Default center align for mobile */
        }

        @media (min-width: 768px) {
            .hero {
                flex-wrap: nowrap; /* Prevent wrapping on larger screens */
                text-align: left; /* Align text left on desktop */
            }
        }

        .about {
            max-width: 600px; /* Limit width for readability */
            margin-bottom: 2rem; /* Space below on smaller screens */
        }

        .about h2 {
            font-size: 2.5rem; /* Larger heading */
            margin-bottom: 0.8rem;
            color: var(--light-accent-secondary); /* Blue for name */
        }

        .about p {
            font-size: 1.3rem; /* Slightly larger paragraph */
            margin-bottom: 1.5rem;
            line-height: 1.6;
            color: var(--light-text-dark);
        }

        .buttons {
            display: flex;
            justify-content: center; /* Center buttons on mobile */
            gap: 1.5rem; /* More space between buttons */
        }

        @media (min-width: 768px) {
            .buttons {
                justify-content: flex-start; /* Align buttons left on desktop */
            }
        }

        button {
            padding: 0.7rem 1.8rem; /* Larger buttons */
            font-size: 1.1rem; /* Larger font in buttons */
            cursor: pointer;
            border: 2px solid var(--light-accent-primary); /* Green border */
            background-color: transparent;
            color: var(--light-accent-primary); /* Green text */
            border-radius: 5px; /* Slightly rounded corners */
            transition: all 0.3s ease; /* Smooth transition for all properties */
        }

        button:hover {
            background-color: var(--light-accent-primary); /* Green background on hover */
            color: var(--light-bg-secondary); /* White text on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow on hover */
        }

        .profile-pic {
            margin-top: 2rem; /* Space above on smaller screens */
        }

        @media (min-width: 768px) {
            .profile-pic {
                margin-top: 0; /* Remove top margin on larger screens */
                margin-left: 3rem; /* Space to the left of the image */
            }
        }

        .profile-pic img {
            width: 200px; /* Larger image */
            height: 200px;
            border-radius: 50%;
            border: 4px dashed var(--light-accent-primary); /* Green dashed border */
            object-fit: cover;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* More prominent shadow */
        }

        /* New Section Styling */
        .content-section {
            background-color: var(--light-bg-secondary);
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: var(--section-gap); /* Space between sections */
            padding: 40px;
        }

        .content-section h3 {
            color: var(--light-accent-primary);
            font-size: 1.8rem;
            margin-bottom: 1em;
            text-align: center;
        }

        .content-section ul, .content-section p {
            font-size: 1.1rem;
            color: var(--light-text-dark);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1em;
        }

        .content-section ul {
            list-style: none; /* Remove default bullet points */
            padding-left: 0;
        }

        .content-section ul li {
            position: relative;
            padding-left: 25px; /* Space for custom bullet */
            margin-bottom: 0.8em;
        }

        .content-section ul li::before {
            content: '•'; /* Custom bullet point */
            color: var(--light-accent-primary);
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        /* Specific styles for skill items (e.g., skill name bold, progress bars if desired) */
        .skill-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            border-bottom: 1px dashed var(--light-border);
            padding-bottom: 10px;
        }
        .skill-item:last-child {
            border-bottom: none;
        }
        .skill-item span {
            font-weight: bold;
            color: var(--light-accent-secondary);
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .project-card {
            background-color: var(--light-bg-primary); /* Card background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .project-card h4 {
            color: var(--light-accent-primary);
            margin-bottom: 0.5em;
        }

        .project-card p {
            font-size: 1rem;
            margin-bottom: 1em;
        }

        .project-card .project-links a {
            margin-right: 15px;
            font-size: 0.9em;
        }

        .timeline-item {
            display: flex;
            align-items: flex-start; /* Align content to the top */
            margin-bottom: 30px;
            position: relative;
        }

        .timeline-date {
            min-width: 120px;
            font-weight: bold;
            color: var(--light-accent-secondary);
            flex-shrink: 0; /* Prevent shrinking */
        }

        .timeline-content {
            flex-grow: 1;
            padding-left: 20px;
            border-left: 2px solid var(--light-border);
            position: relative;
        }
        .timeline-content::before {
            content: '';
            position: absolute;
            left: -8px; /* Adjust to align with border line */
            top: 5px; /* Adjust to vertical center of first line of text */
            width: 14px;
            height: 14px;
            background-color: var(--light-accent-primary);
            border-radius: 50%;
            border: 2px solid var(--light-bg-secondary); /* To make it pop from line */
        }

        .timeline-content h4 {
            margin-top: 0;
            color: var(--light-accent-primary);
        }

        .timeline-content p {
            margin-bottom: 0.5em;
            font-size: 1rem;
        }


        /* Adjustments for smaller screens */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 1rem;
            }
            .nav-links {
                margin-top: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }
            .nav-links li {
                margin: 0.5rem;
            }
            .hero {
                padding: 2rem 1rem;
                flex-direction: column;
            }
            .about {
                margin-bottom: 1.5rem;
            }
            .about h2 {
                font-size: 2rem;
            }
            .about p {
                font-size: 1.1rem;
            }
            .buttons {
                flex-direction: column;
                gap: 1rem;
                width: 80%; /* Make buttons take more width */
                margin: 0 auto; /* Center buttons */
            }
            button {
                width: 100%;
            }
            .profile-pic {
                margin-top: 1.5rem;
            }
            .profile-pic img {
                width: 150px;
                height: 150px;
            }

            .section-padding {
                padding: 60px 1rem; /* Less padding on small screens */
            }

            .content-section {
                padding: 25px;
            }

            .project-grid {
                grid-template-columns: 1fr; /* Single column for projects */
            }

            .timeline-item {
                flex-direction: column; /* Stack date and content */
                align-items: flex-start;
            }
            .timeline-date {
                margin-bottom: 5px;
            }
            .timeline-content {
                padding-left: 0;
                border-left: none; /* Remove line on small screen */
            }
            .timeline-content::before {
                display: none; /* Hide dot on small screen */
            }
        }

        @media (max-width: 480px) {
            .about h2 {
                font-size: 1.8rem;
            }
            .about p {
                font-size: 1rem;
            }
            .nav-links li {
                font-size: 0.9rem;
            }
        }

        .semi-transparent-bg {
    background-color: rgba(255, 255, 255, 0.8); 
           backdrop-filter: blur(10px);}

    </style>
</head>
<body>
   @yield('main-content')
   <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>