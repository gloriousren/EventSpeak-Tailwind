<?php
session_start();

// cek login
$isLoggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EventSpeak - Detail Event</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    >
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "#f8f9fb",
                        "surface-container": "#eceef0",
                        "tertiary-fixed-dim": "#ffb3b0",
                        "on-tertiary-fixed": "#410007",
                        "secondary-container": "#c0e6f4",
                        "outline-variant": "#bfc8cc",
                        "secondary-fixed": "#c3e8f7",
                        "on-primary-fixed": "#001f28",
                        "tertiary-container": "#a51526",
                        "surface-container-low": "#f2f4f6",
                        "surface-dim": "#d8dadc",
                        "on-surface": "#191c1e",
                        "error-container": "#ffdad6",
                        "primary": "#004253",
                        "tertiary-fixed": "#ffdad8",
                        "on-secondary-fixed-variant": "#274c57",
                        "on-background": "#191c1e",
                        "on-secondary-fixed": "#001f28",
                        "error": "#ba1a1a",
                        "secondary-fixed-dim": "#a7ccda",
                        "on-tertiary-fixed-variant": "#92001b",
                        "on-tertiary-container": "#ffb4b2",
                        "inverse-primary": "#8dd0e9",
                        "surface-container-highest": "#e1e3e4",
                        "surface-tint": "#19667d",
                        "on-secondary": "#ffffff",
                        "primary-fixed": "#b7eaff",
                        "inverse-on-surface": "#eff1f3",
                        "primary-container": "#005b71",
                        "secondary": "#406370",
                        "surface-container-high": "#e6e8ea",
                        "on-primary-container": "#8ed1ea",
                        "primary-fixed-dim": "#8dd0e9",
                        "on-tertiary": "#ffffff",
                        "inverse-surface": "#2e3132",
                        "surface-bright": "#f8f9fb",
                        "on-primary-fixed-variant": "#004e61",
                        "on-secondary-container": "#446874",
                        "on-primary": "#ffffff",
                        "outline": "#70787d",
                        "surface-variant": "#e1e3e4",
                        "tertiary": "#7e0016",
                        "on-error": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#40484c",
                        "surface": "#f8f9fb",
                        "surface-container-lowest": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .editorial-grid {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 48px;
        }
        @media (max-width: 1024px) {
            .editorial-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-secondary-container selection:text-on-secondary-container">
    <!-- TopNavBar -->
    <nav
      class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-[0px_20px_40px_rgba(25,28,30,0.06)] h-20"
    >
      <div
        class="flex justify-between items-center px-8 h-full max-w-full mx-auto"
      >
        <div class="flex items-center gap-12">
          <span
            class="text-2xl font-black text-teal-900 dark:text-teal-100 font-headline tracking-tight"
            >EventSpeak</span
          >
          <div class="hidden md:flex gap-8 items-center">
            <a
             class="text-teal-700 dark:text-teal-300 border-b-2 border-teal-700 dark:border-teal-300 pb-1 font-headline font-semibold tracking-tight"
              href="index.php"
              >Browse</a
            >
            <a
              class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="eksplorasi.php"
              >Featured</a
            >
            <a
              class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="#"
              >Schedule</a
            >
            <a
              class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="#"
              >Become a Speaker</a
            >
            <a
              class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="#"
              >Team</a
            >
          </div>
        </div>
        <div class="flex items-center gap-4">
            <?php if ($isLoggedIn): ?>
                <span class="text-sm font-semibold text-primary">Hi, User</span>
                <?php else: ?>
                    <a href="login.php">
                    <button
                class="px-5 py-2 text-primary font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors rounded-xl"
                type="button"
            >
                Login
            </button>
        </a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>

<!-- Hero Header -->
 <header class="relative w-full h-[614px] overflow-hidden">
    <img class="w-full h-full object-cover" data-alt="Modern high-tech conference hall with dramatic blue stage lighting and large digital screen displaying abstract data visualizations" 
    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOLio2GzqKhh0LW7HBknt-kWzYbUbzAGtDLpJ6M8eXzlGZ8SXuBENApfTnsMtAVnQXRXfd7s1mShZwbynUsr30ya1FGw1dXsH55DdY61p43wKwlZSjUHYv1_5JxKpepLxHrYSyPsZmg8CUCc8OjBrbPVXsDxwTZiloogwRthdHKnrzIhPNGqi-KXNbIu364gbxIehxuZ3C5JzUbp3658jkg7eFC0a9y4A-a5VzL56w7TFR0R8Cz-8Tbf_ynHzU3oiw9uAt_znFT73F"/>
    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-full p-12 lg:px-24">
        <div class="max-w-7xl mx-auto">
            <span class="inline-block px-4 py-1 bg-secondary-fixed text-on-secondary-fixed-variant text-sm font-bold rounded-full mb-6 tracking-wide uppercase">Workshop</span>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-headline font-extrabold text-on-primary leading-tight -ml-1 tracking-tight max-w-4xl">
                        Mastering UX Design Systems for Enterprise
                    </h1>
                </div>
            </div>
        </header>

        <!-- Content Shell -->
         <section class="max-w-7xl mx-auto px-8 lg:px-12 py-16">
            <div class="editorial-grid">
                <!-- Main Content (Kiri)-->
                 <div class="space-y-16">
                    <!-- Tabs Navigation -->
                     <div class="flex gap-8 border-b border-outline-variant/20 pb-4">
                        <button class="text-lg font-bold text-primary border-b-2 border-primary -mb-5 pb-4">Deskripsi</button>
                    </div>
                    <!-- Description Section -->
                     <article class="prose prose-lg max-w-none text-on-surface-variant" id="description">
                        <h2 class="text-3xl font-headline font-bold text-on-surface mb-6">Tentang Event Ini</h2>
                        <p class="leading-relaxed mb-6">
                             Workshop ini mengupas bagaimana UX design systems menjadi fondasi utama dalam membangun produk digital skala enterprise. 
                             Dirancang untuk para desainer dan profesional digital, sesi ini akan membuka cara baru dalam menciptakan konsistensi, 
                             efisiensi, dan kolaborasi antar tim.
                        </p>
                        <p class="leading-relaxed">
                            Kami akan membedah praktik terbaik mulai dari struktur komponen hingga integrasi dengan development workflow, dilengkapi 
                            pendekatan yang dapat langsung diterapkan. Bersiaplah untuk pengalaman belajar yang intensif, menggabungkan insight strategis 
                            dengan praktik nyata.
                        </p>
                    </article>

<!-- Speaker Profile Section -->
 <section class="bg-surface-container-low rounded-xl p-8 md:p-12" id="speaker">
    <div class="flex flex-col md:flex-row gap-10 items-start">
        <div class="relative group">
            <div class="absolute inset-0 bg-primary translate-x-4 translate-y-4 rounded-xl -z-10 transition-transform group-hover:translate-x-2 group-hover:translate-y-2"></div>
            <img class="w-48 h-48 md:w-64 md:h-64 object-cover rounded-xl grayscale hover:grayscale-0 transition-all duration-500" data-alt="Professional portrait of a female tech leader in a minimalist office setting, warm afternoon light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuApM12wHNuABnSRIdI3X3RW0RWYXjD4wsjSyvuBgGf9fVb62KB1L4LFrFRYzyIeSYKvX9zDlKXcbk7yGPAtl01EFdEQUUSiroC7Enb3LHm-mUuqDE-bPi_I9szNlCafSkjf56u307nCPHIKbZl_97foYMO5AMC4Sqdm6dQwqBNpYr8POpD5fAOC2rfWvn2KYRULYnvKGCTWofZhx2KtB2R182StTw754cXvqsA14DWq33DWjaKmaspzO-aMMR-9MGjY_8FWxNrq5xYI"/>
        </div>
        <div class="flex-1">
            <h3 class="text-label-md font-bold text-primary mb-2 uppercase tracking-widest">Pembicara Utama</h3>
            <h4 class="text-3xl font-headline font-extrabold text-on-surface mb-4">Dr. Sarah Wiraatmadja</h4>
            <p class="text-on-surface-variant leading-relaxed mb-6">
                Seorang futuris dan peneliti AI senior dengan pengalaman lebih dari 15 tahun di Silicon Valley. Dr. Sarah saat ini memimpin laboratorium inovasi kreatif di TechNexus, fokus pada kolaborasi manusia-mesin dalam seni digital.
            </p>
            <div class="flex gap-4">
                <button class="p-2 bg-surface-container rounded-lg text-primary hover:bg-primary hover:text-white transition-colors">
                    <span class="material-symbols-outlined">link</span>
                </button>
                <button class="p-2 bg-surface-container rounded-lg text-primary hover:bg-primary hover:text-white transition-colors">
                    <span class="material-symbols-outlined">share</span>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Curriculum/Schedule Section -->
 <section id="curriculum">
    <h2 class="text-3xl font-headline font-bold text-on-surface mb-10">Agenda Detail</h2>
    <div class="space-y-0 relative before:absolute before:left-[19px] before:top-4 before:bottom-4 before:w-[2px] before:bg-outline-variant/30">
        <!-- Item 1 -->
         <div class="relative pl-14 pb-12">
            <div class="absolute left-0 top-1 w-10 h-10 bg-primary-container rounded-full flex items-center justify-center text-on-primary-container z-10">
                <span class="material-symbols-outlined">star</span>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm">
                <span class="text-sm font-bold text-primary mb-1 block">09:00 - 10:30 WIB</span>
                <h5 class="text-xl font-bold mb-2">Sesi 1: Fundamental of Design Systems</h5>
                <p class="text-on-surface-variant text-sm">Memahami peran dasar design system dalam menjaga konsistensi dan efisiensi produk digital.</p>
            </div>
        </div>
        <!-- Item 2 -->
         <div class="relative pl-14 pb-12">
            <div class="absolute left-0 top-1 w-10 h-10 bg-white border-2 border-primary-container rounded-full flex items-center justify-center text-primary z-10">
                <span class="material-symbols-outlined">widgets</span>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm">
                <span class="text-sm font-bold text-primary mb-1 block">11:00 - 13:00 WIB</span>
                <h5 class="text-xl font-bold mb-2">Sesi 2: Component & Design Token Workshop</h5>
                <p class="text-on-surface-variant text-sm">Membangun komponen reusable dan mengelola design token untuk sistem.</p>
            </div>
        </div>
        <!-- Item 3 -->
         <div class="relative pl-14">
            <div class="absolute left-0 top-1 w-10 h-10 bg-white border-2 border-primary-container rounded-full flex items-center justify-center text-primary z-10">
                <span class="material-symbols-outlined">hub</span>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm">
                <span class="text-sm font-bold text-primary mb-1 block">14:00 - 16:00 WIB</span>
                <h5 class="text-xl font-bold mb-2">Sesi 3: Implementation and Collaboration</h5>
                <p class="text-on-surface-variant text-sm">Strategi mengintegrasikan design system ke workflow tim desain dan development.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
 <section id="faq">
    <h2 class="text-3xl font-headline font-bold text-on-surface mb-8">Pertanyaan Umum</h2>
    <div class="space-y-4">
        <details class="group bg-surface rounded-xl p-6 transition-all duration-300 open:bg-surface-container">
            <summary class="flex justify-between items-center cursor-pointer list-none">
                <span class="text-lg font-bold">Apakah workshop ini cocok untuk pemula?</span>
                <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
            </summary>
            <p class="mt-4 text-on-surface-variant leading-relaxed">
                                    Workshop ini cocok untuk pemula hingga menengah, namun materi telah disusun agar tetap mudah diikuti.
                                </p>
                            </details>
                            <details class="group bg-surface rounded-xl p-6 transition-all duration-300 open:bg-surface-container">
                                <summary class="flex justify-between items-center cursor-pointer list-none">
                                    <span class="text-lg font-bold">Apakah saya akan mendapatkan rekaman sesi?</span>
                                    <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                                </summary>
                                <p class="mt-4 text-on-surface-variant leading-relaxed">
                                    Semua peserta yang terdaftar akan mendapatkan akses rekaman selama 30 hari setelah event berakhir.
                                </p>
                            </details>
                        </div>
                    </section>
                </div>

<!-- Sidebar Action (Right) -->
 <aside class="relative">
    <div class="sticky top-32 bg-surface-container-lowest rounded-xl shadow-[0px_20px_40px_rgba(25,28,30,0.06)] overflow-hidden border border-outline-variant/10">
        <div class="p-8">
            <div class="mb-6">
                <span class="text-sm text-outline font-medium block mb-1">Harga Tiket</span>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-headline font-black text-on-surface">Rp 750k</span>
                </div>
            </div>
            <div class="space-y-4 mb-8">
                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary">calendar_today</span>
                    <span class="text-sm font-medium">Sabtu, 24 April 2026</span>
                </div>
                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary">schedule</span>
                    <span class="text-sm font-medium">09:00 - 16:00 WIB</span>
                </div>
                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary">videocam</span>
                    <span class="text-sm font-medium">Zoom</span>
                </div>
                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary">workspace_premium</span>
                    <span class="text-sm font-medium">Sertifikat Digital dan Materi</span>
                </div>
            </div>
            <button 
    onclick="cekLogin()"
    class="w-full bg-tertiary text-on-tertiary font-headline font-bold py-4 rounded-xl shadow-lg hover:brightness-110 active:scale-95 transition-all mb-4">
    Daftar Sekarang
</button>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>
</main>

 <!-- Footer -->
    <footer class="w-full py-16 px-8 mt-auto bg-slate-100 dark:bg-slate-950">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl mx-auto">

    <div class="col-span-1">
      <span class="font-manrope font-bold text-teal-800 dark:text-teal-400 text-2xl block mb-6">
        EventSpeak
      </span>
      <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-8">
        Platform webinar, workshop, dan bootcamp terintegrasi untuk membantu
        mahasiswa dan profesional menemukan serta mengikuti event edukatif.
      </p>

      <div class="flex gap-4">
        <a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all" href="#" aria-label="Instagram">
          <i class="fa-brands fa-instagram text-[20px]"></i>
        </a>
        <a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all" href="#" aria-label="LinkedIn">
          <i class="fa-brands fa-linkedin-in text-[20px]"></i>
        </a>
        <a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all" href="#" aria-label="Twitter/X">
          <i class="fa-brands fa-x-twitter text-[20px]"></i>
        </a>
      </div>
    </div>

    <div class="col-span-1">
      <h4 class="font-headline font-bold text-teal-900 dark:text-teal-200 mb-6">
        Support
      </h4>
      <ul class="space-y-4 font-inter text-sm mb-8">
        <li>
          <a class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors" href="#">Privacy Policy</a>
        </li>
        <li>
          <a class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors" href="#">Terms of Service</a>
        </li>
        <li>
          <a class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors" href="#">Help Center</a>
        </li>
      </ul>

      <h4 class="font-headline font-bold text-teal-900 dark:text-teal-200 mb-6">
        Contact
      </h4>
      <ul class="space-y-4 font-inter text-sm">
        <li class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
          <span class="material-symbols-outlined text-sm">mail</span>
          eventspeak@gmail.com
        </li>
        <li class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
          <span class="material-symbols-outlined text-sm">call</span>
          +62 812-3456-7890
        </li>
      </ul>
    </div>

    <div class="col-span-1">
      <h4 class="font-headline font-bold text-teal-900 dark:text-teal-200 mb-6">
        Get in Touch
      </h4>
      <form class="flex flex-col gap-4">
        <input
          class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg px-4 py-2 focus:ring-1 focus:ring-teal-500 outline-none text-sm font-inter"
          placeholder="Name"
          type="text"
        >
        <input
          class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg px-4 py-2 focus:ring-1 focus:ring-teal-500 outline-none text-sm font-inter"
          placeholder="Email"
          type="email"
        >
        <textarea
          class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg px-4 py-2 focus:ring-1 focus:ring-teal-500 outline-none text-sm font-inter min-h-[80px]"
          placeholder="Message"
        ></textarea>
        <button
          class="w-full py-3 bg-primary text-on-primary font-bold rounded-xl hover:opacity-90 transition-opacity"
          type="submit"
        >
          Send Message
        </button>
      </form>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-8 mt-16 pt-8 border-t border-slate-200 dark:border-slate-800 text-center">
    <p class="font-inter text-sm text-slate-500 dark:text-slate-400">
      © 2026 EventSpeak
    </p>
  </div>
</footer>

<script>
function cekLogin() {
    <?php if ($isLoggedIn): ?>
        alert("Pendaftaran berhasil!");
    <?php else: ?>
        alert("Silakan login terlebih dahulu!");
        window.location.href = "login.php";
    <?php endif; ?>
}
</script>

</body>
</html>