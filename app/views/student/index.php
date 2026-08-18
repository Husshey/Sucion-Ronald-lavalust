<!DOCTYPE html>
<html>
<head>
    <title><?= $page_title ?? 'Student Home' ?></title>
    <style>
        :root {
            --bg: #0f1117;
            --panel: #171a23;
            --border: #262b38;
            --text: #e6e8ec;
            --muted: #8b8fa3;
            --accent: #4d7cfe;
        }
        [data-theme="light"] {
            --bg: #f4f6fb;
            --panel: #ffffff;
            --border: #e2e6ef;
            --text: #1c1f2a;
            --muted: #6b7080;
            --accent: #3b66e0;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            transition: background .2s, color .2s;
        }
        .topnav {
            display: flex; align-items: center; justify-content: space-between;
            padding: 16px 40px; background: var(--panel); border-bottom: 1px solid var(--border);
        }
        .brand { font-weight: bold; font-size: 18px; }
        .topnav nav a {
            color: var(--muted); text-decoration: none; margin: 0 16px; font-weight: 600; font-size: 14px;
        }
        .topnav nav a:hover { color: var(--accent); }
        .theme-toggle {
            background: var(--border); border: none; color: var(--text);
            padding: 8px 16px; border-radius: 20px; cursor: pointer; font-size: 13px;
        }
        .hero {
            max-width: 700px; margin: 80px auto; text-align: center; padding: 0 20px;
        }
        .hero h1 { font-size: 32px; margin-bottom: 10px; }
        .hero p { color: var(--muted); font-size: 15px; }
        .card {
            background: var(--panel); border: 1px solid var(--border); border-radius: 14px;
            padding: 24px; margin-top: 30px; text-align: left;
        }
    </style>
</head>
<body>
    <div class="topnav">
        <div class="brand">Test Page</div>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Profile</a>
        </nav>
       <button class="theme-toggle" id="themeBtn" onclick="toggleTheme()">🌙</button>
    </div>

    <div class="hero">
        <h1>Welcome!!!</h1>
        <p>This is the home page of the student - Ronald Allan R. Sucion.</p>

        <div class="card">
            <h3>Quick Info</h3>
            <p style="color:var(--muted); margin-top:8px;"> The Homepage is still under development, best you can do is check out the Profile page... <br>
                Please click <strong>Profile</strong> in the navigation bar to view full student details.
            </p>
        </div>
    </div>

    <script>
        function toggleTheme() {
        const html = document.documentElement;
        const next = html.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
    html.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
                       updateIcon(next);
    }
    function updateIcon(theme) {
    document.getElementById('themeBtn').textContent = theme === 'light' ? '☀️' : '🌙';
    }
        (function() {
            const saved = localStorage.getItem('theme') || 'dark';
        document.documentElement.setAttribute('data-theme', saved);
    })();
        window.addEventListener('DOMContentLoaded', () => {
        updateIcon(localStorage.getItem('theme') || 'dark');
    });
    </script>
</body>
</html>