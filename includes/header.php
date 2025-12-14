<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevPortofolio | Game Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        game: {
                            dark: '#0f172a',
                            accent: '#6366f1', // Indigo
                            secondary: '#ec4899' // Pink
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['Fira Code', 'monospace'],
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-game-dark text-gray-200 font-sans antialiased">

<nav class="fixed w-full z-50 glass-card top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <span class="font-mono text-xl font-bold text-game-accent">&lt;Dev/&gt;</span>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#home" class="hover:text-game-accent px-3 py-2 rounded-md text-sm font-medium transition">Beranda</a>
                    <a href="#about" class="hover:text-game-accent px-3 py-2 rounded-md text-sm font-medium transition">Tentang</a>
                    <a href="#experience" class="hover:text-game-accent px-3 py-2 rounded-md text-sm font-medium transition">Experience</a>
                    <a href="#portfolio" class="hover:text-game-accent px-3 py-2 rounded-md text-sm font-medium transition">Portofolio</a>
                    <a href="#contact" class="hover:text-game-accent px-3 py-2 rounded-md text-sm font-medium transition">Kontak</a>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button id="mobile-menu-btn" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-900">
            <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium hover:text-game-accent">Beranda</a>
            <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium hover:text-game-accent">Tentang</a>
            <a href="#experience" class="block px-3 py-2 rounded-md text-base font-medium hover:text-game-accent">Experience</a>
            <a href="#portfolio" class="block px-3 py-2 rounded-md text-base font-medium hover:text-game-accent">Portofolio</a>
            <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium hover:text-game-accent">Kontak</a>
        </div>
    </div>
</nav>