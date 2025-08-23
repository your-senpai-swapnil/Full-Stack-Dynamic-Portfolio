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

        /* Notification Styles */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            z-index: 9999;
            max-width: 400px;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.3s ease;
        }

        .notification.show {
            opacity: 1;
            transform: translateX(0);
        }

        .notification.success {
            background-color: #27ae60;
            border-left: 4px solid #2ecc71;
        }

        .notification.error {
            background-color: #e74c3c;
            border-left: 4px solid #c0392b;
        }

        .notification.warning {
            background-color: #f39c12;
            border-left: 4px solid #e67e22;
        }

        .notification .close-btn {
            float: right;
            background: none;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            margin-left: 10px;
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

            .notification {
                top: 10px;
                right: 10px;
                left: 10px;
                max-width: none;
            }
        }

    </style>
</head>
<body>
    <!-- Notification Area -->
    @if(session('success'))
        <div class="notification success show" id="notification">
            {{ session('success') }}
            <button class="close-btn" onclick="closeNotification()">&times;</button>
        </div>
    @endif

    @if(session('error'))
        <div class="notification error show" id="notification">
            {{ session('error') }}
            <button class="close-btn" onclick="closeNotification()">&times;</button>
        </div>
    @endif

    @if(session('warning'))
        <div class="notification warning show" id="notification">
            {{ session('warning') }}
            <button class="close-btn" onclick="closeNotification()">&times;</button>
        </div>
    @endif

   @yield('main-content')

   <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
        // Notification functions
        function closeNotification() {
            const notification = document.getElementById('notification');
            if (notification) {
                notification.classList.remove('show');
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }
        }

        // Auto-close notifications after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const notification = document.getElementById('notification');
            if (notification) {
                setTimeout(function() {
                    closeNotification();
                }, 5000);
            }
        });

        // Show notification function for JavaScript use
        function showNotification(message, type = 'success') {
            // Remove existing notification
            const existingNotification = document.getElementById('notification');
            if (existingNotification) {
                existingNotification.remove();
            }

            // Create new notification
            const notification = document.createElement('div');
            notification.id = 'notification';
            notification.className = `notification ${type}`;
            notification.innerHTML = `
                ${message}
                <button class="close-btn" onclick="closeNotification()">&times;</button>
            `;

            document.body.appendChild(notification);

            // Show notification
            setTimeout(() => {
                notification.classList.add('show');
            }, 100);

            // Auto-close after 5 seconds
            setTimeout(() => {
                closeNotification();
            }, 5000);
        }
   </script>
</body>
</html>
