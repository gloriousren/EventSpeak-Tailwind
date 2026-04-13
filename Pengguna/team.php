<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EventSpeak</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#005b71",
            "on-primary": "#ffffff",
            surface: "#ffffff",
            "on-surface": "#191c1e",
            "on-surface-variant": "#40484c",
            "outline-variant": "#e1e3e4",
            "surface-container-low": "#f8f9fb",
          },
          borderRadius: {
            DEFAULT: "0.125rem",
            lg: "0.5rem",
            xl: "1rem",
            full: "9999px",
          },
          fontFamily: {
            headline: ["Manrope", "sans-serif"],
            body: ["Inter", "sans-serif"],
          },
        },
      },
    };
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        "FILL" 0,
        "wght" 300,
        "GRAD" 0,
        "opsz" 20;
    }

    body {
      font-family: "Inter", sans-serif;
      background-color: #ffffff;
    }

    h1,
    h2,
    h3,
    h4 {
      font-family: "Manrope", sans-serif;
    }
  </style>
</head>

<body
  class="bg-surface text-on-surface selection:bg-primary/10 selection:text-primary">
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
            class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
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
            class="text-teal-700 dark:text-teal-300 border-b-2 border-teal-700 dark:border-teal-300 pb-1 font-headline font-semibold tracking-tight"
            href="team.php">Team</a>
        </div>
      </div>
      <!-- Avatar Profil -->
      <a
        href="profil.php"
        class="w-10 h-10 rounded-full overflow-hidden shadow-md hover:scale-95 transition">
        <img
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7V9Te4MhqGJF4B4UsLUoraWH5dNjTAK7sF-VbS5sDev2unalotsCqi2Q_70_T605O60TpZlQtsOtRCNXGBvbl7-6P-yDfvh-iN2Z7MUwwAmyB67x5O_bRbbL8FgWSl53ELODN0CUecRzMlPpD8vgswrMx9ETO1UZznR_v1GIgzQYnq8YYd2p5Decj1MclJm1CpX5_WVxP1cma9cDke40F4j2jEZ7PTXuTM-4SuZp0HU2sYHghdTkYo2ZGvfwg2s2XJ3BN9i6cLA"
          alt="Profile"
          class="w-full h-full object-cover">
      </a>
    </div>
  </nav>

  <main class="pt-40 pb-32 px-8 max-w-5xl mx-auto">
    <!-- Hero Section -->
    <header class="mb-32 text-center max-w-3xl mx-auto">
      <span
        class="text-xs font-bold tracking-[0.2em] text-primary/60 uppercase mb-4 block">The Team</span>
      <h1
        class="text-5xl md:text-6xl font-extrabold text-primary tracking-tight leading-[1.1] mb-8">
        Bersama Menciptakan Ruang Belajar yang Lebih Baik.
      </h1>
      <p class="text-lg text-on-surface-variant leading-relaxed font-normal">
        Temui tim di balik EventSpeak yang berkomitmen menghadirkan platform terbaik untuk webinar, workshop, dan bootcamp, guna menghubungkan pembicara inspiratif dengan peserta dari berbagai latar belakang.
      </p>
    </header>
    <!-- Team Members - Clean Single Column List -->
    <div class="space-y-32">
      <div class="group flex flex-col md:flex-row gap-12 items-center">
        <div
          class="w-full md:w-1/2 aspect-[4/3] overflow-hidden rounded-xl border border-outline-variant/30">
          <img
            alt=""
            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIAJqEtfgCtO3E-krLhGpkRaiZYOeqQrEL4X2Z8GsM8X-gl3aMWtT7adpA4wIOF0yrIfB-YgyojFmIXX9W-vUTir742t8HNr-cOb9MeH8WQSx3bVjK41ogRAI9SNaPEijQKv-nF9n5pCJSgAG5xaOEJMGbaWEbHJpNMky8FECJ1hMdsq6sfdeYbuZFuMeENPjWrHfyTGlAoK3ryQ65P8AUxz-MawzuuWwjeECm8ORgrPOuVD2fOfOeMhRCwKaq1RBCGSY6juoobjMp">
        </div>
        <div class="w-full md:w-1/2">
          <span
            class="text-xs font-bold text-primary tracking-widest uppercase mb-2 block">Lead Developer</span>
          <h2 class="text-3xl font-bold text-primary mb-4">Kirana Isna Dewi</h2>
          <p class="text-on-surface-variant leading-relaxed mb-6 text-sm">
            Kirana is the lead developer responsible for the technical architecture and core systems of EventSpeak. With over a decade of experience in distributed systems, she ensures the platform scales seamlessly for global audiences. She believes in code that is as elegant as it is functional.
          </p>
          <div class="flex gap-4">
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">link</span></a>
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">terminal</span></a>
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">mail</span></a>
          </div>
        </div>
      </div>
      <div
        class="group flex flex-col md:flex-row-reverse gap-12 items-center">
        <div
          class="w-full md:w-1/2 aspect-[4/3] overflow-hidden rounded-xl border border-outline-variant/30">
          <img
            alt=""
            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvpBKojLzq3YwuauyA9aoGh-xg7qj9EBh-1tnpjBwzEwfrpEeUX7YVfMCqKxjCyW0-EeCrCZOxC0CF11XtsHQSp10boZtIKmPNo77MPO0HLdwIxXGwW6DVfOosLmBim3OMeKAZLet6hTtPI8pBC68HsDSz2vpWR6XY_Y2NS47Z_mJoEXFol4rdYZpsB83nmaLiqbTVkK3xRpiy2ojJhBcuW3Q5N3fKbm7xQryZOiQIr_yMA2N-rM85bIOUPtKeo_jN_0IB980GsvKf">
        </div>
        <div class="w-full md:w-1/2">
          <span
            class="text-xs font-bold text-primary tracking-widest uppercase mb-2 block">UI/UX Designer</span>
          <h2 class="text-3xl font-bold text-primary mb-4">Ima Muhimmah Falasifa</h2>
          <p class="text-on-surface-variant leading-relaxed mb-6 text-sm">
            Ima is the creative force behind the "Curated Stage" aesthetic.
            Her philosophy focuses on intentional asymmetry and tonal depth,
            moving beyond generic interfaces to create meaningful user
            experiences.
          </p>
          <div class="flex gap-4">
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">language</span></a>
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">palette</span></a>
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">alternate_email</span></a>
          </div>
        </div>
      </div>
      <div class="group flex flex-col md:flex-row gap-12 items-center">
        <div
          class="w-full md:w-1/2 aspect-[4/3] overflow-hidden rounded-xl border border-outline-variant/30">
          <img
            alt=""
            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBK9vckSTjsHMrElq3A7lNxy3qCb4U3fP_ai_04-pJqssSoUgGqOdwjf-Hbj0K_Co7AJMJegUyrD63mhiS1wgBVHrvQATKuoejJmspKMcPDMU9iWS4FAzAHT0mW5h3u1KxS6RZvEKLDqxqI6rucqQ_n0ykpVWD-etTduOQjVV8I2FlRuuuFQjuKbqLnzJ-I4YGtU141E7BXaoRJNsCOeQvbj0uIyuUYnpNVAk5A7hfU_kwh-rtefncutDgSIMc0bs6dYeRkNvhcIogj">
        </div>
        <div class="w-full md:w-1/2">
          <span
            class="text-xs font-bold text-primary tracking-widest uppercase mb-2 block">Backend Engineer</span>
          <h2 class="text-3xl font-bold text-primary mb-4">Faren Tresandra Nafasya</h2>
          <p class="text-on-surface-variant leading-relaxed mb-6 text-sm">
            Faren specializes in high-performance API development and data
            integrity. He built the EventSpeak scheduling engine from the
            ground up, ensuring zero-latency synchronization for live
            bootcamps and global summits.
          </p>
          <div class="flex gap-4">
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">code</span></a>
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">database</span></a>
            <a
              class="text-on-surface-variant hover:text-primary transition-colors"
              href="#"><span class="material-symbols-outlined">north_east</span></a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="w-full py-16 px-8 mt-auto bg-slate-100 dark:bg-slate-950">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl mx-auto">
      <div class="col-span-1">
        <span
          class="font-manrope font-bold text-teal-800 dark:text-teal-400 text-2xl block mb-6">
          EventSpeak
        </span>
        <p
          class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-8">
          Platform webinar, workshop, dan bootcamp terintegrasi untuk membantu
          mahasiswa dan profesional menemukan serta mengikuti event edukatif.
        </p>

        <div class="flex gap-4">
          <a
            class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all"
            href="#"
            aria-label="Instagram">
            <i class="fa-brands fa-instagram text-[20px]"></i>
          </a>
          <a
            class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all"
            href="#"
            aria-label="LinkedIn">
            <i class="fa-brands fa-linkedin-in text-[20px]"></i>
          </a>
          <a
            class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all"
            href="#"
            aria-label="Twitter/X">
            <i class="fa-brands fa-x-twitter text-[20px]"></i>
          </a>
        </div>
      </div>

      <div class="col-span-1">
        <h4
          class="font-headline font-bold text-teal-900 dark:text-teal-200 mb-6">
          Support
        </h4>
        <ul class="space-y-4 font-inter text-sm mb-8">
          <li>
            <a
              class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors"
              href="#">Privacy Policy</a>
          </li>
          <li>
            <a
              class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors"
              href="#">Terms of Service</a>
          </li>
          <li>
            <a
              class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors"
              href="#">Help Center</a>
          </li>
        </ul>

        <h4
          class="font-headline font-bold text-teal-900 dark:text-teal-200 mb-6">
          Contact
        </h4>
        <ul class="space-y-4 font-inter text-sm">
          <li
            class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
            <span class="material-symbols-outlined text-sm">mail</span>
            eventspeak@gmail.com
          </li>
          <li
            class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
            <span class="material-symbols-outlined text-sm">call</span>
            +62 812-3456-7890
          </li>
        </ul>
      </div>

      <div class="col-span-1">
        <h4
          class="font-headline font-bold text-teal-900 dark:text-teal-200 mb-6">
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

    <div
      class="max-w-7xl mx-auto px-8 mt-16 pt-8 border-t border-slate-200 dark:border-slate-800 text-center">
      <p class="font-inter text-sm text-slate-500 dark:text-slate-400">
        © 2026 EventSpeak
      </p>
    </div>
  </footer>
</body>

</html>