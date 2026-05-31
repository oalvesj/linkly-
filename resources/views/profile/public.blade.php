<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }} | Linkly</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .container {
            width: 100%;
            max-width: 480px;
        }

        .profile {
            text-align: center;
            margin-bottom: 2rem;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
            color: white;
        }

        .profile h1 {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .profile p {
            color: rgba(255,255,255,0.8);
            font-size: 0.9rem;
            margin-top: 0.25rem;
        }

        .link-card {
            background: white;
            border-radius: 12px;
            padding: 1rem 1.5rem;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            color: #1f2937;
            font-weight: 600;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .link-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .link-card i {
            font-size: 1.25rem;
            color: #7c3aed;
            width: 24px;
            text-align: center;
        }

        .footer {
            text-align: center;
            margin-top: 2rem;
            color: rgba(255,255,255,0.6);
            font-size: 0.8rem;
        }

        .footer a {
            color: white;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <div class="avatar">
                <i class="fas fa-user"></i>
            </div>
            <h1>{{ $user->name }}</h1>
            <p>&#64;{{ $user->name }}</p>
        </div>

        @forelse($links as $link)
            <a href="{{ $link->url }}" target="_blank" class="link-card">
                @if($link->icon)
                    <i class="{{ $link->icon }}"></i>
                @endif
                {{ $link->title }}
            </a>
        @empty
            <p style="text-align:center; color:rgba(255,255,255,0.7);">Ainda não há links aqui.</p>
        @endforelse

        <div class="footer">
            Feito com <a href="/">Linkly</a>
        </div>
    </div>
</body>
</html>
