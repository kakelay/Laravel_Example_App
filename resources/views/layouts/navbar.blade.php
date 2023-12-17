<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Navbar with Dark/Light Mode</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Marketplace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <button class="btn btn-light" id="darkModeToggle">
                    <i class="fas" id="darkModeIcon"></i>
                </button>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;
        const darkModeIcon = document.getElementById('darkModeIcon');

        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            updateIcons();
        });

        function updateIcons() {
            if (body.classList.contains('dark-mode')) {
                darkModeIcon.className = 'fas fa-sun'; // Dark mode is active, show the sun icon
            } else {
                darkModeIcon.className = 'fas fa-moon'; // Light mode is active, show the moon icon
            }
        }

        // Initial check for the dark mode and set icons accordingly
        $(document).ready(function() {
            updateIcons();
        });

        // Scroll to top button functionality
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = 'block';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
        }

        document.getElementById('scrollToTopBtn').addEventListener('click', () => {
            scrollToTop(1000); // Adjust the scroll duration (in milliseconds) as needed
        });

        function scrollToTop(duration) {
            const start = window.pageYOffset;
            const startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

            function scroll() {
                const now = 'now' in window.performance ? performance.now() : new Date().getTime();
                const time = Math.min(1, (now - startTime) / duration);
                window.scroll(0, Math.ceil((1 - Math.cos(time * Math.PI)) / 2 * (1 - time) * start));

                if (window.pageYOffset === 0) {
                    return;
                }

                requestAnimationFrame(scroll);
            }

            scroll();
        }
    </script>

    <style>
        /* Custom styles for dark mode */
        .dark-mode {
            background-color: #333;
            color: #fff;
        }

        /* Style for the "scroll to top" button */
        #scrollToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            top: 20;
            bottom: 20;
            z-index: 99;
            font-size: 24px;
            /* Adjust the font size as needed */
            border: none;
            outline: red;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            padding: 12px;
            border-radius: 100%;
            /* Make the button circular */
        }
    </style>

    
    <!-- Scroll to top button -->
    <button id="scrollToTopBtn" title="Go to top">&#8679;</button>


    <div class="container">
        @yield('content');
    </div>

</body>

</html>