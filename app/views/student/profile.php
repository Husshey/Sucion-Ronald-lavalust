<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
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
        .wrap {
            max-width: 720px; margin: 60px auto; padding: 0 20px;
        }
        .profile-header {
            display: flex; align-items: center; gap: 20px; margin-bottom: 30px;
        }
        .avatar-img {
            width: 80px; height: 80px; border-radius: 50%; object-fit: cover;
            border: 2px solid var(--border); flex-shrink: 0;
        }
        .profile-header h1 { font-size: 24px; margin-bottom: 4px; }
        .profile-header p { color: var(--muted); font-size: 14px; }
        .card {
            background: var(--panel); border: 1px solid var(--border); border-radius: 14px;
            padding: 26px; margin-bottom: 20px;
        }
        .card h3 {
            font-size: 14px; text-transform: uppercase; letter-spacing: .5px;
            color: var(--muted); margin-bottom: 16px;
        }
        .info-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 16px 24px;
        }
        .info-item label {
            display: block; font-size: 12px; color: var(--muted); margin-bottom: 4px;
        }
        .info-item span { font-size: 15px; font-weight: 500; }
        .info-item.full { grid-column: 1 / -1; }
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

    <div class="wrap">
        <div class="profile-header">
           <img src="<?= $image ?>" alt="<?= $name ?>" class="avatar-img">
            <div>
                <h1><?= $name ?></h1>
                <p><?= $course ?> · <?= $year ?> · Section <?= $section ?></p>
            </div>
        </div>

        <div class="card">
            <h3>Student Information</h3>
            <div class="info-grid">
                <div class="info-item">
                    <label>Student ID</label>
                    <span><?= $student_id ?></span>
                </div>
                <div class="info-item">
                    <label>Email</label>
                    <span><?= $email ?></span>
                </div>
                <div class="info-item">
                    <label>Course</label>
                    <span><?= $course ?></span>
                </div>
                <div class="info-item">
                    <label>Year Level</label>
                    <span><?= $year ?></span>
                </div>
                <div class="info-item full">
                    <label>Address</label>
                    <span><?= $address ?></span>
                </div>
                <div class="info-item full">
                    <label>Hobbies</label>
                    <span><?= $hobbies ?></span>
                </div>
            </div>
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