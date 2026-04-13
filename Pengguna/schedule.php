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
            "on-surface-variant": "#40484c",
            "surface-container": "#eceef0",
            tertiary: "#7e0016",
            background: "#f8f9fb",
            secondary: "#406370",
            error: "#ba1a1a",
            "surface-bright": "#f8f9fb",
            "on-background": "#191c1e",
            "primary-fixed": "#b7eaff",
            "surface-container-high": "#e6e8ea",
            "secondary-fixed-dim": "#a7ccda",
            "outline-variant": "#bfc8cc",
            "primary-fixed-dim": "#8dd0e9",
            "on-secondary-container": "#446874",
            "on-primary-fixed": "#001f28",
            "on-tertiary-fixed-variant": "#92001b",
            surface: "#f8f9fb",
            "on-tertiary": "#ffffff",
            "on-secondary-fixed-variant": "#274c57",
            "on-primary-container": "#8ed1ea",
            "inverse-on-surface": "#eff1f3",
            "inverse-surface": "#2e3132",
            "secondary-fixed": "#c3e8f7",
            "on-secondary-fixed": "#001f28",
            "on-primary": "#ffffff",
            "on-primary-fixed-variant": "#004e61",
            "tertiary-fixed": "#ffdad8",
            "on-tertiary-container": "#ffb4b2",
            "error-container": "#ffdad6",
            "inverse-primary": "#8dd0e9",
            "on-surface": "#191c1e",
            "on-error-container": "#93000a",
            "on-error": "#ffffff",
            "primary-container": "#005b71",
            primary: "#004253",
            "tertiary-fixed-dim": "#ffb3b0",
            "tertiary-container": "#a51526",
            "secondary-container": "#c0e6f4",
            "surface-variant": "#e1e3e4",
            "surface-tint": "#19667d",
            "surface-container-lowest": "#ffffff",
            "surface-dim": "#d8dadc",
            "surface-container-highest": "#e1e3e4",
            outline: "#70787d",
            "on-secondary": "#ffffff",
            "on-tertiary-fixed": "#410007",
            "surface-container-low": "#f2f4f6",
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
    body {
      font-family: "Inter", sans-serif;
      background-color: #f8f9fb;
      color: #191c1e;
    }

    .font-manrope {
      font-family: "Manrope", sans-serif;
    }

    .glass-nav {
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    }

    .material-symbols-outlined {
      font-variation-settings:
        "FILL" 0,
        "wght" 400,
        "GRAD" 0,
        "opsz" 24;
    }
  </style>
</head>

<body class="bg-background text-on-background">
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
            class="text-teal-700 dark:text-teal-300 border-b-2 border-teal-700 dark:border-teal-300 pb-1 font-headline font-semibold tracking-tight"
            href="#">Schedule</a>
          <a
            class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
            href="#">Become a Speaker</a>
          <a
            class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
            href="#">Team</a>
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
  <main class="pt-24 pb-12 px-6 md:px-12 max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="mb-12">
      <h1
        class="text-5xl font-extrabold font-headline text-primary tracking-tight mb-4">
        Event Schedule
      </h1>
      <p class="text-on-surface-variant max-w-2xl text-lg leading-relaxed">
        Discover our curated lineup of intellectual growth opportunities. From
        deep-dive bootcamps to interactive webinars.
      </p>
    </div>
    <!-- Main Layout: Calendar + Sidebar -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      <!-- Monthly Calendar Grid -->
      <div
        class="lg:col-span-8 bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
        <div
          class="grid grid-cols-7 bg-surface-container text-on-surface-variant text-xs font-bold uppercase tracking-widest py-4 text-center">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="grid grid-cols-7 gap-px bg-outline-variant/10">
          <!-- Calendar Days (Static for October 2024 example) -->
          <!-- Empty slots for previous month if needed -->
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 opacity-30 text-right text-sm">
            29
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 opacity-30 text-right text-sm">
            30
          </div>
          <!-- Days 1-31 -->
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            1
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            2
            <div class="mt-2 flex flex-col gap-1">
              <span
                class="block w-full h-1.5 rounded-full bg-teal-600"
                title="Workshop"></span>
            </div>
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            3
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors border-2 border-primary">
            4
            <div class="mt-2 flex flex-col gap-1">
              <span
                class="block w-full h-1.5 rounded-full bg-tertiary"
                title="Bootcamp"></span>
              <span
                class="block w-full h-1.5 rounded-full bg-primary"
                title="Webinar"></span>
            </div>
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            5
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            6
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            7
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            8
            <div class="mt-2 flex flex-col gap-1">
              <span
                class="block w-full h-1.5 rounded-full bg-teal-600"
                title="Workshop"></span>
            </div>
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            9
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            10
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            11
          </div>
          <div
            class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
            12
            <div class="mt-2 flex flex-col gap-1">
              <span
                class="block w-full h-1.5 rounded-full bg-primary"
                title="Webinar"></span>
            </div>
          </div>
          <!-- Filler for layout demo -->
          <script>
            for (let i = 13; i <= 31; i++) {
              document.write(`
                                <div class="bg-surface-container-lowest min-h-[120px] p-2 text-right text-sm font-medium group cursor-pointer hover:bg-primary/5 transition-colors">
                                    ${i}
                                    ${i % 5 === 0 ? '<div class="mt-2 flex flex-col gap-1"><span class="block w-full h-1.5 rounded-full bg-teal-600"></span></div>' : ""}
                                    ${i % 7 === 0 ? '<div class="mt-2 flex flex-col gap-1"><span class="block w-full h-1.5 rounded-full bg-tertiary"></span></div>' : ""}
                                </div>
                            `);
            }
          </script>
        </div>
      </div>
      <!-- Side Panel: Upcoming Highlights -->
      <div class="lg:col-span-4 space-y-6">
        <div class="bg-primary-container p-8 rounded-xl text-white">
          <h3 class="text-2xl font-bold font-headline mb-2">October 4</h3>
          <p class="text-primary-fixed text-sm mb-6">
            Selected Date Highlights
          </p>
          <div class="space-y-6">
            <!-- Highlight Item 1 -->
            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
              <span
                class="inline-block px-3 py-1 rounded text-[10px] font-bold uppercase tracking-widest bg-tertiary text-white mb-3">Live Now: Bootcamp</span>
              <h4 class="font-bold text-lg leading-snug mb-2">
                Advanced UX Psychology &amp; Cognitive Load
              </h4>
              <div class="flex items-center gap-2 text-primary-fixed text-sm">
                <span class="material-symbols-outlined text-base">schedule</span>
                09:00 AM - 12:00 PM
              </div>
              <button
                class="mt-4 w-full py-2 bg-white text-primary font-bold rounded hover:bg-opacity-90 transition-all"
                type="button">
                Book Seat
              </button>
            </div>
            <!-- Highlight Item 2 -->
            <div class="bg-white/5 p-4 rounded-lg">
              <span
                class="inline-block px-3 py-1 rounded text-[10px] font-bold uppercase tracking-widest bg-primary-fixed text-primary mb-3">Webinar</span>
              <h4 class="font-bold text-lg leading-snug mb-2">
                Sustainable Architecture in Modern Cities
              </h4>
              <div class="flex items-center gap-2 text-primary-fixed text-sm">
                <span class="material-symbols-outlined text-base">schedule</span>
                02:00 PM - 03:30 PM
              </div>
            </div>
          </div>
        </div>
        <div class="bg-surface-container-low p-6 rounded-xl">
          <h3 class="text-lg font-bold font-headline mb-4">Legend</h3>
          <div class="space-y-3">
            <div class="flex items-center gap-3">
              <span class="w-4 h-4 rounded-full bg-teal-600"></span>
              <span class="text-sm font-medium text-on-surface-variant">Workshops</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-4 h-4 rounded-full bg-primary"></span>
              <span class="text-sm font-medium text-on-surface-variant">Webinars</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-4 h-4 rounded-full bg-tertiary"></span>
              <span class="text-sm font-medium text-on-surface-variant">Bootcamps</span>
            </div>
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