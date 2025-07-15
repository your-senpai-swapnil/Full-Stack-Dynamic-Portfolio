<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @stack ('style')
<style>
        :root {
            --primary-color: #1e1e2f;
            --accent-color: #f39c12;
            --text-color: #f4f4f4;
            --bg-light: #2d2d44;
            --section-padding: 60px 20px;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--primary-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--bg-light);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--accent-color);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            color: var(--text-color);
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        .hero {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: var(--section-padding);
            background-color: var(--bg-light);
        }

        .about {
            flex: 1 1 50%;
            padding: 20px;
        }

        .profile-pic {
            flex: 1 1 40%;
            text-align: center;
        }

        .profile-pic img {
            max-width: 250px;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        .buttons button {
            padding: 10px 20px;
            background: var(--accent-color);
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .buttons button:hover {
            background: #e67e22;
        }

        .content-section {
            padding: var(--section-padding);
        }

        h2 {
            font-size: 2rem;
            border-bottom: 2px solid var(--accent-color);
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .skill-item,
        .timeline-item,
        .project-card {
            background: #3b3b5c;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
        }

        .skill-item {
            display: flex;
            justify-content: space-between;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .project-card {
         background: #3b3b5c;
         padding: 15px;
         margin: 10px 0;
         border-radius: 10px;
         transition: transform 0.3s ease, box-shadow 0.3s ease;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
          cursor: pointer;
       }

       .project-card:hover {
           transform: translateY(-10px) scale(1.02);
           box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
         }

        .project-links a {
            color: var(--accent-color);
            text-decoration: underline;
        }

        .timeline-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .timeline-date {
            font-weight: bold;
            color: var(--accent-color);
        }

        footer {
            background-color: #1a1a2e;
            color: #ccc;
            padding: 2rem;
        }

        footer a {
            color: var(--accent-color);
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                flex-direction: column;
                gap: 1rem;
                margin-top: 1rem;
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .profile-pic {
                margin-top: 20px;
            }
        }

    </style>
</head>
<body>
   @yield('main-content')
   <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>