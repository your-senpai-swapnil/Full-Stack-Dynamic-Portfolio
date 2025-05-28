<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Swapnil - Profile</title>
    <style>
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        nav {
            background-color: #1e88e5;
            color: white;
            padding: 1rem 2rem;
            font-size: 1.5rem;
            font-weight: 700;
            box-shadow: 0 2px 4px rgb(0 0 0 / 0.1);
        }
        main {
            flex-grow: 1;
            padding: 2rem;
            max-width: 900px;
            margin: 2rem auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgb(0 0 0 / 0.1);
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }
        .photo-container {
            flex: 1 1 250px;
            max-width: 250px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgb(0 0 0 / 0.1);
        }
        .photo-container img {
            width: 100%;
            display: block;
            object-fit: cover;
            height: 100%;
        }
        .about-container {
            flex: 2 1 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .about-container h2 {
            font-size: 2rem;
            color: #1e88e5;
            margin-bottom: 1rem;
        }
        .about-container p {
            font-size: 1rem;
            color: #555;
        }
        footer {
            background: #1e88e5;
            color: white;
            text-align: center;
            padding: 1rem 2rem;
            font-size: 1rem;
            box-shadow: 0 -2px 4px rgb(0 0 0 / 0.1);
        }
        footer a {
            color: #bbdefb;
            text-decoration: none;
            font-weight: 600;
        }
        footer a:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            main {
                flex-direction: column;
                max-width: 95%;
            }
            .photo-container, .about-container {
                max-width: 100%;
            }
        }
        a{
            text-decoration: none;
        }
        .no-decor
    </style>
</head>
<body>
    <nav>Swapnil Dey  
    <a href="#">About</a>
    <a href="#">Projects</a>



</nav>
    
    
    <main>
        <div class="photo-container" aria-label="Profile photo">
            <img src="{{ asset('assets\css\Capture.PNG') }}" alt="Photo of Swapnil" />
        </div>
        <div class="about-container">
            <h2>About Me</h2>
            <p>
                Hello! I am Swapnil, Welcome to my journey!
            </p>
        </div>
    </main>
    <footer>
        Contact: <a href="mailto:swapnil@example.com">swapnil15-3477@diu.edu.bd</a>
    </footer>
</body>
</html>

