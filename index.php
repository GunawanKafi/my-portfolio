<?php
// Load data projects
include 'data/projects.php';
// Load header
include 'includes/header.php';
?>

<section id="home" class="h-screen flex items-center justify-center relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-10 left-10 w-72 h-72 bg-game-accent rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-game-secondary rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="text-center z-10 px-4">
        <p class="font-mono text-game-accent mb-2">Hello World, I am</p>
        <h1 class="text-5xl md:text-7xl font-bold mb-4 text-white">Kafi Agung Gunawan</h1>
        <p class="text-gray-400 max-w-xl mx-auto mb-8 text-lg">
            Menciptakan dunia imersif dan mekanisme gameplay yang menantang melalui kode dan kreativitas.
        </p>
        <a href="#portfolio" class="bg-game-accent hover:bg-indigo-600 text-white font-bold py-3 px-8 rounded-full transition shadow-lg shadow-indigo-500/50">
            Lihat Karya Saya
        </a>
    </div>
</section>

<section id="about" class="py-20 bg-gray-800/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-white mb-6 border-l-4 border-game-secondary pl-4">Tentang Saya</h2>
                <div class="space-y-4 text-gray-300 leading-relaxed">
                    <p>
                        Saya adalah seorang Game Developer yang bersemangat dalam mengubah baris kode menjadi pengalaman interaktif yang menyenangkan. Perjalanan saya dimulai dari rasa penasaran tentang bagaimana cara membuat game, hingga kini saya mampu membangun sistem permainan yang kompleks.
                    </p>
                    <p>
                        Saya memiliki keahlian dalam menggunakan Game Engine seperti <span class="text-game-accent font-bold">Unity</span>. Selain coding (C#), saya juga memahami dasar-dasar desain level dan optimasi performa game.
                    </p>
                    <p>
                        Untuk saat ini saya masih dalam proses pembelajaran dimulai dari mendesain game nya sampai pembuatan script nya. Sekarang saya masih dibantu oleh AI guna membantu saya dalam pembuatan script nya.
                    </p>
                    <p>
                        Tujuan saya adalah menciptakan game yang tidak hanya dimainkan, tetapi juga diingat dengan studio yang saya buat yaitu <a href="https://www.instagram.com/gamersgabut.id"><span class="text-game-accent font-bold">Gamers Gabut Studio</span></a>.
                    </p>
                </div>
            </div>
            <div class="order-1 md:order-2 flex justify-center">
                <div class="relative w-64 h-64">
                    <div class="absolute inset-0 border-2 border-game-accent rounded-xl transform translate-x-4 translate-y-4"></div>
                    <img src="" alt="Profile" class="relative w-full h-full object-cover rounded-xl shadow-2xl grayscale hover:grayscale-0 transition duration-500">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="experience" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute left-1/4 top-0 w-px h-full bg-gradient-to-b from-transparent via-game-accent to-transparent"></div>
        <div class="absolute right-1/4 top-0 w-px h-full bg-gradient-to-b from-transparent via-game-secondary to-transparent"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white mb-4">
                <span class="text-game-secondary">Level</span> Progression
            </h2>
            <p class="text-gray-400">Jejak langkah dan pengalaman (Quest Log).</p>
        </div>

        <?php
        // DATA TIMELINE (Edit bagian ini untuk menambah pengalaman)
        $timeline = [
            [
                "year" => "2025 - Sekarang",
                "title" => "Freelance Game Developer",
                "subtitle" => "Full Time",
                "desc" => "Mengembangkan '5 Menit Kehidupan' dan menerima komisi pembuatan mekanik game Unity.",
                "color" => "border-game-accent" // Warna border (opsional)
            ],
            [
                "year" => "2024",
                "title" => "Juara 2 - Hackathon Kampus",
                "subtitle" => "Achievement Unlocked",
                "desc" => "Membuat game edukasi 'Math Dungeon' dalam waktu 48 jam menggunakan Godot Engine.",
                "color" => "border-game-secondary"
            ],
            [
                "year" => "2023",
                "title" => "Mulai Belajar Unity & C#",
                "subtitle" => "Tutorial Hell",
                "desc" => "Fase awal mempelajari OOP, Physics Engine, dan membuat kloning game Flappy Bird pertama.",
                "color" => "border-purple-500"
            ],
            [
                "year" => "2022",
                "title" => "Kenalan dengan Programming",
                "subtitle" => "Hello World",
                "desc" => "Mempelajari logika dasar pemrograman melalui Python dan C++ di perkuliahan.",
                "color" => "border-blue-500"
            ]
        ];
        ?>

        <div class="relative">
            <div class="absolute left-8 md:left-1/2 h-full w-0.5 bg-gray-700 transform md:-translate-x-1/2"></div>

            <div class="space-y-12">
                <?php foreach($timeline as $index => $item): 
                    // Logika untuk menentukan posisi Kiri (Ganjil) atau Kanan (Genap)
                    $isLeft = $index % 2 == 0;
                    $containerClass = $isLeft ? 'md:flex-row-reverse' : 'md:flex-row';
                    $textClass = $isLeft ? 'md:text-right' : 'md:text-left';
                    $borderClass = $isLeft ? 'md:rounded-l-xl md:rounded-tr-xl' : 'md:rounded-r-xl md:rounded-tl-xl';
                ?>
                
                <div class="flex flex-col md:flex-row <?php echo $containerClass; ?> items-center justify-between w-full relative">
                    
                    <div class="hidden md:block w-5/12"></div>

                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full bg-gray-900 border-4 <?php echo $item['color']; ?> z-10 flex items-center justify-center shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                    </div>

                    <div class="w-full md:w-5/12 pl-20 md:pl-0">
                        <div class="bg-gray-800/80 p-6 rounded-xl border-l-4 <?php echo $item['color']; ?> shadow-lg hover:shadow-2xl transition duration-300 hover:-translate-y-1 backdrop-blur-sm">
                            <span class="inline-block px-2 py-1 mb-2 text-xs font-mono font-bold text-gray-900 bg-gray-400 rounded">
                                <?php echo $item['year']; ?>
                            </span>
                            <h3 class="text-xl font-bold text-white mb-1"><?php echo $item['title']; ?></h3>
                            <div class="text-sm font-mono text-game-accent mb-3"><?php echo $item['subtitle']; ?></div>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                <?php echo $item['desc']; ?>
                            </p>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white mb-4"><span class="text-game-secondary">#</span> Projek Saya</h2>
            <p class="text-gray-400">Beberapa game yang telah saya kembangkan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($projects as $project): ?>
            <div class="glass-card rounded-xl overflow-hidden hover-scale group">
                <div class="relative overflow-hidden">
                    <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute top-0 right-0 bg-game-accent text-white text-xs font-bold px-3 py-1 m-2 rounded">
                        <?php echo $project['category']; ?>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $project['title']; ?></h3>
                    <p class="text-gray-400 text-sm mb-4">
                        <?php echo $project['description']; ?>
                    </p>
                    <a href="#" class="text-game-secondary font-mono text-sm hover:text-pink-400 flex items-center gap-1">
                        Lihat Detail <span>&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contact" class="py-20 bg-gray-800/50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-8">Siap Berkolaborasi?</h2>
        <p class="text-gray-300 mb-8">
            Klik tombol di bawah untuk berdiskusi langsung via WhatsApp.
        </p>
        
        <div class="space-y-4 text-left glass-card p-8 rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Nama</label>
                    <input type="text" id="contact-name" placeholder="Nama Kamu" class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-game-accent transition">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Email (Opsional)</label>
                    <input type="email" id="contact-email" placeholder="email@contoh.com" class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-game-accent transition">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400 mb-1">Pesan</label>
                <textarea id="contact-message" rows="4" placeholder="Halo, saya tertarik membuat game..." class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-game-accent transition"></textarea>
            </div>
            
            <button type="button" onclick="sendToWhatsApp()" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg transition flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Kirim via WhatsApp
            </button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>