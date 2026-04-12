<!DOCTYPE html>

<html lang="en">

<head>
    <title>Profil | EventSpeak</title>
    <meta charset="utf-8" >
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet" >
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" >
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script
        id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { colors: { "tertiary-container": "#7c4634", "on-primary-container": "#96d5c9", "on-background": "#191c1b", "on-tertiary-fixed": "#360f03", "surface-dim": "#d8dad9", "surface-container": "#eceeec", "on-primary": "#ffffff", "primary-container": "#1b5e55", "on-secondary-container": "#526964", "tertiary-fixed-dim": "#ffb59e", "secondary-fixed-dim": "#b3ccc6", "inverse-primary": "#93d3c7", "on-tertiary-fixed-variant": "#6c3928", secondary: "#4c635e", "on-secondary-fixed-variant": "#354b47", "on-surface": "#191c1b", "on-secondary": "#ffffff", background: "#f8faf8", surface: "#f8faf8", "on-surface-variant": "#3f4946", "surface-container-low": "#f2f4f2", "on-primary-fixed-variant": "#035048", "tertiary-fixed": "#ffdbd0", "on-tertiary": "#ffffff", "surface-tint": "#28685f", error: "#ba1a1a", tertiary: "#60301f", "primary-fixed-dim": "#93d3c7", "on-tertiary-container": "#ffb8a2", "outline-variant": "#bfc9c5", "surface-variant": "#e1e3e1", "primary-fixed": "#afefe3", "inverse-on-surface": "#eff1ef", "on-primary-fixed": "#00201c", "surface-bright": "#f8faf8", "secondary-container": "#cee8e2", "on-error-container": "#93000a", "error-container": "#ffdad6", primary: "#00463e", outline: "#6f7976", "inverse-surface": "#2e3130", "surface-container-lowest": "#ffffff", "surface-container-highest": "#e1e3e1", "secondary-fixed": "#cee8e2", "surface-container-high": "#e7e9e7", "on-error": "#ffffff", "on-secondary-fixed": "#081f1c" }, borderRadius: { DEFAULT: "0.125rem", lg: "0.25rem", xl: "0.5rem", full: "0.75rem" }, fontFamily: { headline: ["Manrope"], body: ["Inter"], label: ["Inter"], display: "Manrope" } } } };</script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body
    class="bg-surface text-on-surface min-h-screen selection:bg-primary-container selection:text-on-primary-container">
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
             class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="#"
              >Browse</a
            >
            <a
              class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="#"
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
            <img alt="User profile avatar" class="w-10 h-10 rounded-full object-cover ring-2 ring-indigo-100"
                data-alt="Close up portrait of a professional man with a friendly smile, soft natural studio lighting, neutral grey background"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3k277rb8JimoTjrIQTRHxNvSkemszmgGyRYewTepukmfHnR0ugcEHjZzvpNg-8xustV73XRmTQH1knYyw5T0JNvlQ815WuV4UDu-5M5zboipfE57bLiuJcGKf2RwnKNTEOD43jc7hK5hwFjZ4ZeWLWMM5OTFjphPT9nC1mWu4-qxXnowR7teFHIt1PQqCqpXmIrcATV14kd1wNhvu4JxPD-NQ-efzWq_jqEwm9ifB5ef88NDVIVelNTK7NvLFYXLyhQIdsxxo9w" >
        </div>
    </nav>
    <div class="flex pt-20">
        <!-- SideNavBar -->
        <aside
            class="h-[calc(100vh-80px)] w-64 sticky left-0 top-20 flex flex-col p-6 gap-2 bg-slate-50 border-r border-slate-100">
            <div class="mb-8 px-2">
                <h2 class="font-manrope font-extrabold text-xl text-on-background">Alex Rivera</h2>
                <p class="font-inter text-xs font-medium text-slate-500 tracking-wider uppercase">pengguna</p>
            </div>
            <div class="flex flex-col gap-1 flex-grow">
                <!-- Active Tab -->
                <a class="flex items-center gap-3 px-4 py-3 text-teal-700 font-bold bg-white rounded-lg shadow-sm"
                    href="#">
                    <span class="material-symbols-outlined">person</span>
                    <span class="font-inter text-sm">Profil</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-100 hover:translate-x-1 transition-transform"
                    href="Penyelengga.html">
                    <span class="material-symbols-outlined">stars</span>
                    <span class="font-inter text-sm">Become an Organizer</span>
                </a>
            </div>
            <div class="mt-auto pt-6 flex flex-col gap-1 border-t border-slate-200">
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-teal-500 text-xs font-medium uppercase tracking-widest"
                    href="#">
                    <span class="material-symbols-outlined text-sm">help</span>
                    <span>Help Center</span>
                </a>
               <button type="button" onclick="openModal()"
                        class="w-full flex items-center gap-3 px-4 py-2 text-error hover:bg-error-container/20 rounded-lg text-sm transition-transform hover:translate-x-1">
                        <span class="material-symbols-outlined">logout</span>
                        <span>Sign Out</span>
                    </button>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 bg-surface min-h-screen p-12">
            <header class="max-w-4xl mb-12">
                <h1 class="text-4xl font-extrabold tracking-tight text-on-background mb-2">Profil</h1>
                <p class="text-on-surface-variant text-lg">Manage your account details and how you're seen across
                    EventSpeak.</p>
            </header>
            <!-- Profile Bento Grid -->
            <div class="max-w-4xl grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Profile Header Card -->
                <section
                    class="md:col-span-3 bg-white rounded-full p-8 shadow-sm border border-indigo-50/50 flex flex-col md:flex-row items-center gap-8">
                    <div class="relative group">
                        <img alt="Profile photo" class="w-32 h-32 rounded-full object-cover ring-4 ring-primary/10"
                            data-alt="Professional studio headshot of a Hispanic male in his 30s with a sharp haircut and subtle stubble, minimalist aesthetic"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7V9Te4MhqGJF4B4UsLUoraWH5dNjTAK7sF-VbS5sDev2unalotsCqi2Q_70_T605O60TpZlQtsOtRCNXGBvbl7-6P-yDfvh-iN2Z7MUwwAmyB67x5O_bRbbL8FgWSl53ELODN0CUecRzMlPpD8vgswrMx9ETO1UZznR_v1GIgzQYnq8YYd2p5Decj1MclJm1CpX5_WVxP1cma9cDke40F4j2jEZ7PTXuTM-4SuZp0HU2sYHghdTkYo2ZGvfwg2s2XJ3BN9i6cLA" >
                        <button type="button"
                            class="absolute bottom-0 right-0 bg-primary text-white p-2 rounded-full shadow-lg hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-sm">edit</span>
                        </button>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div class="flex flex-col md:flex-row md:items-center gap-3 mb-2">
                            <h2 class="text-2xl font-bold">Alex Rivera</h2>
                        </div>
                        <p class="text-slate-500 mb-4">Pengguna sejak Februari 2026</p>
                        <div class="flex flex-wrap justify-center md:justify-start gap-4">
                            <div
                                class="flex items-center gap-2 text-sm font-medium text-slate-700 bg-slate-50 px-4 py-2 rounded-lg">
                                <span class="material-symbols-outlined text-primary">mail</span>
                                alex.rivera@gmail.com
                            </div>
                            <div
                                class="flex items-center gap-2 text-sm font-medium text-slate-700 bg-slate-50 px-4 py-2 rounded-lg">
                                <span class="material-symbols-outlined text-primary">alternate_email</span>
                                @arivera_events
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Detailed Settings -->
                <section class="md:col-span-2 space-y-6">
                    <div class="bg-surface-container-low rounded-full p-8">
                        <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">account_circle</span>
                            Identitas Akun
                        </h3>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="group">
                                <label
                                    class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 px-1">Full
                                    Name</label>
                                <div
                                    class="bg-white px-5 py-4 rounded-xl border border-transparent group-focus-within:border-primary/20 group-focus-within:shadow-md transition-all flex justify-between items-center">
                                    <span class="font-medium">Alex Rivera</span>
                                    <button type="button" class="text-primary font-bold text-sm">Change</button>
                                </div>
                            </div>
                            <div class="group">
                                <label
                                    class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 px-1">Username</label>
                                <div
                                    class="bg-white px-5 py-4 rounded-xl border border-transparent group-focus-within:border-primary/20 group-focus-within:shadow-md transition-all flex justify-between items-center">
                                    <span class="font-medium text-slate-500">@arivera_events</span>
                                    <span class="material-symbols-outlined text-slate-300">lock</span>
                                </div>
                            </div>
                            <div class="group">
                                <label
                                    class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 px-1">Email
                                    Address</label>
                                <div
                                    class="bg-white px-5 py-4 rounded-xl border border-transparent group-focus-within:border-primary/20 group-focus-within:shadow-md transition-all flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <span class="font-medium">alex.rivera@eventspeak.com</span>
                                        <span
                                            class="text-green-600 text-xs font-bold bg-green-50 px-2 py-0.5 rounded">Primary</span>
                                    </div>
                                    <button type="button" class="text-primary font-bold text-sm">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sidebar Info / Stats -->
                <section class="md:col-span-1 space-y-6">
                    <div
                        class="bg-teal-900 text-on-primary-container rounded-full p-8 shadow-xl relative overflow-hidden group">
                        <div class="relative z-10">
                            <h4 class="text-sm font-bold uppercase tracking-widest mb-4 text-teal-300">Your Impact
                            </h4>
                            <div class="space-y-6">
                                <div>
                                    <div class="flex justify-between text-xs mb-2">
                                        <span class="font-bold">Events Attended</span>
                                        <span class="text-indigo-200">0 / 20</span>
                                    </div>
                                    <div class="h-2 bg-teal-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-primary-container w-[60%] rounded-full"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-3xl font-black text-white">4</p>
                                    <p class="text-xs font-medium text-teal-300">Upcoming Bookings</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-12 -right-12 w-32 h-32 bg-indigo-800/30 rounded-full blur-3xl group-hover:bg-indigo-500/20 transition-all duration-700">
                        </div>
                    </div>
                    <div class="bg-white border border-slate-100 rounded-full p-8">
                        <h4 class="text-sm font-bold uppercase tracking-widest mb-4 text-slate-400">Security Snapshot
                        </h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-500 text-lg">check_circle</span>
                                <div>
                                    <p class="text-sm font-bold">2FA Enabled</p>
                                    <p class="text-xs text-slate-500">Protecting your account</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3 opacity-60">
                                <span class="material-symbols-outlined text-slate-400 text-lg">info</span>
                                <div>
                                    <p class="text-sm font-bold">Last password change</p>
                                    <p class="text-xs text-slate-500">3 months ago</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </main>
    </div>
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
       <!-- Modal Sign Out -->
            <div id="logoutModal" class="fixed inset-0 bg-black/40 hidden z-50">

  <!-- CENTER PAKAI ABSOLUTE -->
  <div class="absolute inset-0 flex items-center justify-center p-4">
    <div id="modalBox"
      class="bg-white rounded-xl p-6 w-[90%] max-w-sm shadow-lg scale-95 opacity-0 transition duration-200">
      <h2 class="text-lg font-bold mb-2">Konfirmasi</h2>
      <p class="text-slate-600 text-sm mb-6">
        Anda yakin ingin keluar?
      </p>

      <div class="flex justify-between gap-3">
        <button type="button" onclick="closeModal()"
          class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg">
          Batalkan
        </button>

        <button type="button" onclick="logout()"
          class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
          Keluar
        </button>
      </div>

    </div>

  </div>
</div>

 <script>
                function openModal() {
                    const modal = document.getElementById("logoutModal");
                    const box = document.getElementById("modalBox");

                    modal.classList.remove("hidden");
                    modal.classList.add("flex");

                    setTimeout(() => {
                        box.classList.remove("scale-95", "opacity-0");
                    }, 10);
                }

                function closeModal() {
                    const modal = document.getElementById("logoutModal");
                    const box = document.getElementById("modalBox");

                    box.classList.add("scale-95", "opacity-0");

                    setTimeout(() => {
                        modal.classList.add("hidden");
                        modal.classList.remove("flex");
                    }, 200);
                }

                function logout() {
                    alert("Berhasil logout!");
                    // redirect kalau mau:
                    // window.location.href = "login.html";
                }
            </script>
  </body>
</html>