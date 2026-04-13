<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>

<html class="light" lang="id">

<head>
  <title>EventSpeak</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@600;700;800&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            background: "#f8f9fb",
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
            primary: "#004253",
            "tertiary-fixed": "#ffdad8",
            "on-secondary-fixed-variant": "#274c57",
            "on-background": "#191c1e",
            "on-secondary-fixed": "#001f28",
            error: "#ba1a1a",
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
            secondary: "#406370",
            "surface-container-high": "#e6e8ea",
            "on-primary-container": "#8ed1ea",
            "primary-fixed-dim": "#8dd0e9",
            "on-tertiary": "#ffffff",
            "inverse-surface": "#2e3132",
            "surface-bright": "#f8f9fb",
            "on-primary-fixed-variant": "#004e61",
            "on-secondary-container": "#446874",
            "on-primary": "#ffffff",
            outline: "#70787d",
            "surface-variant": "#e1e3e4",
            tertiary: "#7e0016",
            "on-error": "#ffffff",
            "on-error-container": "#93000a",
            "on-surface-variant": "#40484c",
            surface: "#f8f9fb",
            "surface-container-lowest": "#ffffff",
          },
          borderRadius: {
            DEFAULT: "0.125rem",
            lg: "0.25rem",
            xl: "0.5rem",
            full: "0.75rem",
          },
          fontFamily: {
            headline: ["Manrope"],
            body: ["Inter"],
            label: ["Inter"],
          },
        },
      },
    };
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        "FILL" 0,
        "wght" 400,
        "GRAD" 0,
        "opsz" 24;
    }

    .material-symbols-outlined.fill-1 {
      font-variation-settings:
        "FILL" 1,
        "wght" 400,
        "GRAD" 0,
        "opsz" 24;
    }

    .glass-nav {
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    }

    .hero-gradient {
      background: linear-gradient(135deg, #004253 0%, #005b71 100%);
    }

    .tonal-shift {
      background-color: #f2f4f6;
    }
  </style>
</head>

<body class="bg-background text-on-surface font-body antialiased">
  <!-- TopNavBar -->
  <nav
    class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-[0px_20px_40px_rgba(25,28,30,0.06)] h-20">
    <div
      class="flex justify-between items-center px-8 h-full max-w-full mx-auto">
      <div class="flex items-center gap-12">
        <span
          class="text-2xl font-black text-teal-900 dark:text-teal-100 font-headline tracking-tight">EventSpeak</span>
        <div class="hidden md:flex gap-8 items-center">
          <a
            class="text-teal-700 dark:text-teal-300 border-b-2 border-teal-700 dark:border-teal-300 pb-1 font-headline font-semibold tracking-tight"
            href="index.php">Browse</a>
          <a
            class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
            href="eksplorasi.php">Featured</a>
          <a
            class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
            href="schedule.php">Schedule</a>
          <a
            class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
            href="../Pembicara/pembicara-registrasi.php">Become a Speaker</a>
          <a
            class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
            href="team.php">Team</a>
        </div>
      </div>
      <div class="flex items-center gap-4">
        <?php if ($isLoggedIn): ?>

          <!-- Avatar -->
          <a href="profil.php"
            class="w-10 h-10 rounded-full overflow-hidden shadow-md hover:scale-95 transition">
            <img
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7V9Te4MhqGJF4B4UsLUoraWH5dNjTAK7sF-VbS5sDev2unalotsCqi2Q_70_T605O60TpZlQtsOtRCNXGBvbl7-6P-yDfvh-iN2Z7MUwwAmyB67x5O_bRbbL8FgWSl53ELODN0CUecRzMlPpD8vgswrMx9ETO1UZznR_v1GIgzQYnq8YYd2p5Decj1MclJm1CpX5_WVxP1cma9cDke40F4j2jEZ7PTXuTM-4SuZp0HU2sYHghdTkYo2ZGvfwg2s2XJ3BN9i6cLA"
              class="w-full h-full object-cover">
          </a>

        <?php else: ?>

          <!-- Belum login -->
          <a
            href="login.php"
            class="px-5 py-2 text-primary font-semibold hover:bg-slate-100 rounded-xl">
            Login
          </a>

          <a
            href="registrasi.php"
            class="px-6 py-2 bg-primary text-on-primary font-bold rounded-xl shadow-md hover:scale-95 duration-200">
            Sign Up
          </a>

        <?php endif; ?>
      </div>
    </div>
  </nav>
  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-20 pb-32 px-8">
      <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
        <div class="relative z-10">
          <h1
            class="text-6xl md:text-7xl font-headline font-extrabold text-primary leading-tight tracking-tight mb-8">
            Tingkatkan Skill Lewat
            <span class="text-tertiary">Event Terbaik</span>
          </h1>
          <p
            class="text-xl text-on-surface-variant max-w-xl mb-10 leading-relaxed">
            Temukan workshop, webinar, dan bootcamp yang dikurasi oleh para
            ahli di bidangnya. Belajar langsung dari praktisi industri global.
          </p>
          <div class="flex flex-wrap gap-4">
            <?php if ($isLoggedIn): ?>
              <a
                href="eksplorasi.php"
                class="px-8 py-4 bg-primary text-on-primary rounded-lg font-headline font-bold text-lg hover:opacity-90 transition-all flex items-center gap-2">
                Mulai Eksplorasi
                <span class="material-symbols-outlined">arrow_forward</span>
              </a>
            <?php else: ?>
              <a
                href="login.php"
                class="px-8 py-4 bg-primary text-on-primary rounded-lg font-headline font-bold text-lg hover:opacity-90 transition-all flex items-center gap-2">
                Mulai Eksplorasi
                <span class="material-symbols-outlined">arrow_forward</span>
              </a>
            <?php endif; ?>

            </a>
          </div>
        </div>
        <div class="relative">
          <div
            class="absolute -top-12 -left-12 w-64 h-64 bg-secondary-fixed/30 rounded-full blur-3xl"></div>
          <div
            class="relative rounded-2xl overflow-hidden shadow-2xl transform rotate-2">
            <img
              alt="Live Workshop Scene"
              class="w-full h-[500px] object-cover"
              data-alt="Modern high-tech auditorium with a large screen and people engaged in a professional intellectual workshop at golden hour"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuADM6JWAR3AvTBr080eEX5ONiC3AolSKtvnwXzegWvAvGMjHBGASZQLtVI7G6uPFd-7qHRJwUbDfNCirZAuy7vHBs-F_ElrMk_l-HgymmqV3I9lFQcdoPiYyQFqAHRueSVacrEnpe1-GPEGf8vbmqyws4AImEMHiae8LS88r0Xt1CRQkcZvBBNb1-G9Zz_riXp7_1G9kWRykuxqkaGBP23nSoTx_zIEVvb2Y-PqsKp6w-P4R9YCQYgotd9hEjcsGHwR2U3CW2jopeAu">
            <div
              class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
            <div
              class="absolute bottom-6 left-6 right-6 p-6 bg-surface-container-lowest/90 backdrop-blur rounded-xl">
              <div class="flex items-center gap-4">
                <div
                  class="w-12 h-12 rounded-full overflow-hidden border-2 border-primary">
                  <img
                    alt="Speaker"
                    class="w-full h-full object-cover"
                    data-alt="Professional woman speaker with a confident smile and corporate attire in a studio setting"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlAAASx5EGw9Z8DpxNxSPcyjGQL9BkQgkw8AsmuEhZwpZnuq1uSgwQeHBAdIYOKuqABYDxKFT4A3xtg83dnHD59Yfb6GmOQRsUsUZbx2el3VLNCFbWuWlljZDgwl2nCbI5CNhh-UWHRwVtYsoETmkn_oxq0NeW7RMz0m1aj3E6zce7fGpWUNygOCT-IqguRS4iZZTs18H4Ihu6buVl8Zq56ejT3lPzc5Nyl7A3f4Uh2BGqczwl1VaYGRRGJVR7HzdxIdPK6u8jz1PS">
                </div>
                <div>
                  <p class="font-headline font-bold text-primary">
                    Dr. Aris Sudharma
                  </p>
                  <p class="text-xs text-on-surface-variant font-medium">
                    Head of AI Research at TechCorp
                  </p>
                </div>
                <div
                  class="ml-auto px-3 py-1 bg-tertiary text-white text-xs font-bold rounded-full uppercase tracking-widest">
                  Live Now
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section -->
    <section class="py-24 bg-surface-container-low">
      <div class="max-w-7xl mx-auto px-8">
        <div class="flex justify-between items-end mb-16">
          <div>
            <span
              class="text-tertiary font-headline font-bold uppercase tracking-[0.2em] text-sm">Pilih Fokusmu</span>
            <h2
              class="text-4xl font-headline font-extrabold text-primary mt-2">
              Kategori Populer
            </h2>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Workshop -->
          <div
            class="bg-surface-container-lowest p-10 rounded-2xl group hover:shadow-xl transition-all duration-300">
            <div
              class="w-16 h-16 bg-primary-container/10 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
              <span
                class="material-symbols-outlined text-primary text-4xl"
                data-icon="construction">construction</span>
            </div>
            <h3 class="text-2xl font-headline font-bold text-primary mb-4">
              Workshop
            </h3>
            <p class="text-on-surface-variant leading-relaxed mb-6">
              Sesi praktek langsung intensif dengan pengawasan mentor
              profesional.
            </p>
            <a
              class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all"
              href="eksplorasi.php">
              Jelajahi Workshop
              <span class="material-symbols-outlined">trending_flat</span>
            </a>
          </div>
          <!-- Webinar -->
          <div
            class="bg-surface-container-lowest p-10 rounded-2xl group hover:shadow-xl transition-all duration-300">
            <div
              class="w-16 h-16 bg-secondary-container/10 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
              <span
                class="material-symbols-outlined text-secondary text-4xl"
                data-icon="videocam">videocam</span>
            </div>
            <h3 class="text-2xl font-headline font-bold text-primary mb-4">
              Webinar
            </h3>
            <p class="text-on-surface-variant leading-relaxed mb-6">
              Seminar online interaktif membahas tren industri terbaru.
            </p>
            <a
              class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all"
              href="eksplorasi.php">
              Jelajahi Webinar
              <span class="material-symbols-outlined">trending_flat</span>
            </a>
          </div>
          <!-- Bootcamp -->
          <div
            class="bg-surface-container-lowest p-10 rounded-2xl group hover:shadow-xl transition-all duration-300">
            <div
              class="w-16 h-16 bg-tertiary-fixed-dim/10 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
              <span
                class="material-symbols-outlined text-tertiary text-4xl"
                data-icon="school">school</span>
            </div>
            <h3 class="text-2xl font-headline font-bold text-primary mb-4">
              Bootcamp
            </h3>
            <p class="text-on-surface-variant leading-relaxed mb-6">
              Program akselerasi karir mendalam selama beberapa minggu.
            </p>
            <a
              class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all"
              href="eksplorasi.php">
              Jelajahi Bootcamp
              <span class="material-symbols-outlined">trending_flat</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Popular Events Section -->
    <section class="py-24">
      <div class="max-w-7xl mx-auto px-8">
        <div
          class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-16">
          <div>
            <h2 class="text-4xl font-headline font-extrabold text-primary">
              Event Populer Minggu Ini
            </h2>
            <p class="text-on-surface-variant mt-2 text-lg">
              Pilihan kurasi untuk pertumbuhan intelektual Anda.
            </p>
          </div>
          <a
            type="button"
            class="text-primary font-bold border-b-2 border-primary/20 hover:border-primary transition-all"
            href="eksplorasi.php">
            Lihat Semua Event
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
          <!-- Event Card 1 -->
          <div
            class="bg-surface-container-lowest rounded-2xl overflow-hidden group">
            <div class="relative h-64">
              <img
                alt="Product Strategy Workshop"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                data-alt="Dynamic meeting of diverse professionals brainstorming around a table with sticky notes and digital devices in a sunlit modern office"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvpwMKE4ZM_or5gQwhxr3fOuoOFqo4Jb2GipTmPrHjCpG1p_KEifXrWBm9fpCGQ4vneh8vnRa-UmxIrDG9z69xIGSyRP2U2FbTvKw0zOvhDX7JuTKd8YR0fs1M6FGYc1SYlk2U8qxgO0FF3W_KuN6KtXAKpd2a1sHasp65FZ8ZRHZXC9drcLHM500lOB-qenqUGRq7I2wyjFtC8RnXhM1y7_zRQ0bRvPWk1JsVcKAWynXTFUraUYz6ybIQiuVV1FiMFJ4m0T-uwBwt">
              <div
                class="absolute top-4 right-4 bg-secondary-fixed text-on-secondary-fixed-variant px-4 py-1.5 rounded-full text-xs font-bold">
                Webinar
              </div>
              <div
                class="absolute bottom-4 left-4 bg-primary text-on-primary px-3 py-1 rounded-md text-xs font-bold">
                12 Okt, 19:00 WIB
              </div>
            </div>
            <div class="p-8">
              <h3
                class="text-xl font-headline font-bold text-primary mb-3 leading-tight">
                Strategi Produk untuk Startup di Era AI
              </h3>
              <p class="text-on-surface-variant text-sm line-clamp-2 mb-6">
                Pelajari bagaimana mengintegrasikan AI dalam roadmap produk
                Anda tanpa mengorbankan user experience.
              </p>
              <div
                class="flex items-center justify-between border-t border-outline-variant/10 pt-6">
                <span class="text-tertiary font-bold text-lg">Rp 150.000</span>
                <a
                  href="detail-event.php"
                  class="px-5 py-2 bg-tertiary text-on-tertiary rounded-md font-bold text-sm hover:opacity-90 transition-opacity">
                  Book Seat
                </a>
              </div>
            </div>
          </div>
          <!-- Event Card 2 -->
          <div
            class="bg-surface-container-lowest rounded-2xl overflow-hidden group">
            <div class="relative h-64">
              <img
                alt="UI/UX Bootcamp"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                data-alt="Close-up of a designer's hands using a stylus on a tablet showing sleek mobile app interface designs with vibrant colors"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5_lcwcbAovExrPkD4hVqr4tlVgwD3rIv3GTOYUYpQByH1wEJ0orlANdnkj82FHNvejKNolxA0Y17XVShNuLPfjsjLZdHgZTg9Fu21HJcXRwISMop2TIvbORU7IPK6FDpY5LCNKFgUXsvSfVWqD1QKwAE4NCA7-KlR3E8TLYHkf01zNfngUfbn-8lMiNv6bsj0Qn804nZWm6vZM-cBkEn276fFhNZzOBKQ55Q15ZxSjZMuFAVhiqVQT1cTIfbpAOxbzPGczyVn3VDG">
              <div
                class="absolute top-4 right-4 bg-secondary-fixed text-on-secondary-fixed-variant px-4 py-1.5 rounded-full text-xs font-bold">
                Bootcamp
              </div>
              <div
                class="absolute bottom-4 left-4 bg-primary text-on-primary px-3 py-1 rounded-md text-xs font-bold">
                15 Okt, 09:00 WIB
              </div>
            </div>
            <div class="p-8">
              <h3
                class="text-xl font-headline font-bold text-primary mb-3 leading-tight">
                Mastering UI/UX: 8 Minggu Intensif
              </h3>
              <p class="text-on-surface-variant text-sm line-clamp-2 mb-6">
                Dari fundamental hingga prototype high-fidelity. Portofolio
                siap kerja di akhir program.
              </p>
              <div
                class="flex items-center justify-between border-t border-outline-variant/10 pt-6">
                <span class="text-tertiary font-bold text-lg">Rp 2.500.000</span>
                <a
                  href="detail-event.php"
                  class="px-5 py-2 bg-tertiary text-on-tertiary rounded-md font-bold text-sm hover:opacity-90 transition-opacity">
                  Book Seat
                </a>
              </div>
            </div>
          </div>
          <!-- Event Card 3 -->
          <div
            class="bg-surface-container-lowest rounded-2xl overflow-hidden group">
            <div class="relative h-64">
              <img
                alt="Communication Workshop"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                data-alt="Professional speaker addressing a captivated audience in a dark theater with theatrical lighting on the stage"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbjieSPuDGi39znsHfaL1Z0Lh3nAnUAhI5JnCsiU94nYb2IoPbp7bxm8j2u17MdaFP-J1RG6pTiYOXEsWJ47SFxDtiZh05PMFF8mno93heWI27VKKfSkJGBSderMSYBdC7oncxYbmomkuSRbXfLMc2bQ9RGMIVqtXviyYWmoQKBnIXnQR7yiKg2Vu8QOwxVIkQ6zBEIsqT-4lJPpth0EuBd29xls49S9CwlDHWib90kwY3YwJ_dZg_DJ7NIl3APFXxvHXQHfVVJS5H">
              <div
                class="absolute top-4 right-4 bg-secondary-fixed text-on-secondary-fixed-variant px-4 py-1.5 rounded-full text-xs font-bold">
                Workshop
              </div>
              <div
                class="absolute bottom-4 left-4 bg-primary text-on-primary px-3 py-1 rounded-md text-xs font-bold">
                20 Okt, 13:00 WIB
              </div>
            </div>
            <div class="p-8">
              <h3
                class="text-xl font-headline font-bold text-primary mb-3 leading-tight">
                The Art of Public Speaking for Leaders
              </h3>
              <p class="text-on-surface-variant text-sm line-clamp-2 mb-6">
                Tingkatkan karisma dan teknik presentasi Anda untuk meyakinkan
                stakeholder.
              </p>
              <div
                class="flex items-center justify-between border-t border-outline-variant/10 pt-6">
                <span class="text-tertiary font-bold text-lg">Rp 450.000</span>
                <a
                  href="detail-event.php"
                  class="px-5 py-2 bg-tertiary text-on-tertiary rounded-md font-bold text-sm hover:opacity-90 transition-opacity">
                  Book Seat
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials Section -->
    <section class="py-24 bg-surface-container overflow-hidden">
      <div class="max-w-7xl mx-auto px-8 relative">
        <span
          class="material-symbols-outlined text-[12rem] absolute -top-12 -left-12 text-outline-variant/20 select-none">format_quote</span>
        <div class="text-center mb-20 relative z-10">
          <h2 class="text-4xl font-headline font-extrabold text-primary">
            Apa Kata Mereka?
          </h2>
          <p class="text-on-surface-variant mt-4 text-lg">
            Testimoni dari alumni EventSpeak yang telah bertransformasi.
          </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 relative z-10">
          <div
            class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm border-l-4 border-tertiary">
            <div class="flex items-center gap-1 mb-6">
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
            </div>
            <p class="text-on-surface italic leading-relaxed mb-8">
              "EventSpeak benar-benar platform yang berbeda. Kurasi speakernya
              jempolan dan materi bootcamp-nya sangat relevan dengan industri
              saat ini."
            </p>
            <div class="flex items-center gap-4">
              <img
                alt="User profile"
                class="w-12 h-12 rounded-full object-cover"
                data-alt="Portrait of a young professional woman smiling warmly against a clean neutral background"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnh6z6hTRIuMbxUi_Ci-fuSfiLBZ8BW8HXyJzYU4X9cIwqnItulAriU5ODZ4iGetkWpfzIfFUEw_fgKmQq8LA2Gg41JmwMyASnKVw99b1PSWD9AGArPap81kOqc8vrIDb-Drf4N4cW-gp_zAZNFyboFLcnS2mHGpNv6PNv5g9VX7mBLr9KdBu-yQ0CnWVtM-kud_lJSChQqUJIrMxr0-3X0Fh9NRsMxX_e3P_4ufFG3vt5GjQ-usueIY3l2xRuZozHWuoWcYfVKBpz">
              <div>
                <p class="font-headline font-bold text-primary">
                  Sarah Amelia
                </p>
                <p class="text-xs text-on-surface-variant">
                  Lead Designer at Creativa
                </p>
              </div>
            </div>
          </div>
          <div
            class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm border-l-4 border-primary">
            <div class="flex items-center gap-1 mb-6">
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
            </div>
            <p class="text-on-surface italic leading-relaxed mb-8">
              "Webinar di sini tidak pernah membosankan. Interaksinya hidup
              dan insight yang didapat sangat eksklusif. Investasi waktu yang
              sangat berharga."
            </p>
            <div class="flex items-center gap-4">
              <img
                alt="User profile"
                class="w-12 h-12 rounded-full object-cover"
                data-alt="Close-up of a professional man with a friendly expression in an office setting"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLMBp5jpUKwPml00TcTwtNzcS6IU8HalfR0roay8fpfIT6VDwQrnYbD-w0NxFFx2jK6yFlZY79gqBIWWLH3KKmm2BhxRNxG3jj6CkbbDX9L-86JITmf_slyo5oZcjfs6Z7r71ocC_blAIY4GdqVz6lS8OGSHVtdYP0VpvXwG2qS9xRMBYb3BV74_KTZoW05BD5wODOSxYdWTw7NTsn50T-Q9_RjsTRxVyKj3Ly1KkxgPM5ZduFVBdjCOqvS6F5K_4Io-7IcfkXDH9E">
              <div>
                <p class="font-headline font-bold text-primary">
                  Budi Santoso
                </p>
                <p class="text-xs text-on-surface-variant">
                  Senior Dev at TechnoID
                </p>
              </div>
            </div>
          </div>
          <div
            class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm border-l-4 border-secondary">
            <div class="flex items-center gap-1 mb-6">
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
              <span class="material-symbols-outlined text-tertiary fill-1">star</span>
            </div>
            <p class="text-on-surface italic leading-relaxed mb-8">
              "Proses pendaftarannya sangat seamless. Dari pemilihan jadwal
              hingga sertifikat digital, semuanya terorganisir dengan sangat
              baik."
            </p>
            <div class="flex items-center gap-4">
              <img
                alt="User profile"
                class="w-12 h-12 rounded-full object-cover"
                data-alt="Portrait of a professional woman with glasses, expressing confidence and clarity"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBggxIZDhaKsHo8T_35SekpY9tLBvhIMZrhBEEqaWKofgJr-S0ey8mr7i6j45I5umEw4BRGMGlyy_UuEhHfEpcM6H8Fzr8moJHdAHNNQNEMLJbQdjJUCN2B-BklX4X-EaP-alD_bybzi9obaIq9qIEUWJOHExE1-Ihknqh--CcsesvV-K5c3625LE8AC7DPWxi0j0u_q7BuqgjSSZzEx7Hjl36a5B45O-L73aYlZ8atpDuyooksUZ57X22JIloX8xjB9odSpJ7xPY--">
              <div>
                <p class="font-headline font-bold text-primary">
                  Diana Putri
                </p>
                <p class="text-xs text-on-surface-variant">
                  Marketing Manager at GlobalLink
                </p>
              </div>
            </div>
          </div>
        </div>
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
            type="text">
          <input
            class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg px-4 py-2 focus:ring-1 focus:ring-teal-500 outline-none text-sm font-inter"
            placeholder="Email"
            type="email">
          <textarea
            class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg px-4 py-2 focus:ring-1 focus:ring-teal-500 outline-none text-sm font-inter min-h-[80px]"
            placeholder="Message"></textarea>
          <button
            class="w-full py-3 bg-primary text-on-primary font-bold rounded-xl hover:opacity-90 transition-opacity"
            type="submit">
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
</body>

</html>