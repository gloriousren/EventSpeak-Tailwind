<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Become an Organizer | EventSpeak</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

<body class="bg-surface text-on-surface antialiased min-h-screen">
    <header
        class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-[0px_20px_40px_rgba(25,28,30,0.06)] h-20">
        <div class="flex justify-between items-center px-8 h-full max-w-full mx-auto">
            <div class="flex items-center gap-12">
                <span
                    class="text-2xl font-black text-teal-900 dark:text-teal-100 font-headline tracking-tight">EventSpeak</span>
                <div class="hidden md:flex gap-8 items-center">
                    <a class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
                        href="../pengguna/index.php">Browse</a>
                    <a class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
                        href="../pengguna/eksplorasi.php">Featured</a>
                    <a class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
                        href="#">Schedule</a>
                    <a class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
                        href="#">Become a Speaker</a>
                    <a class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
                        href="#">Team</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="px-5 py-2 text-primary font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors rounded-xl"
                    type="button">
                    <a href="../Pengguna/profil.php" class="block w-10 h-10 rounded-full overflow-hidden bg-surface-container-high hover:scale-95 transition">
    <img 
        alt="User profile avatar" 
        class="w-full h-full object-cover"
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7V9Te4MhqGJF4B4UsLUoraWH5dNjTAK7sF-VbS5sDev2unalotsCqi2Q_70_T605O60TpZlQtsOtRCNXGBvbl7-6P-yDfvh-iN2Z7MUwwAmyB67x5O_bRbbL8FgWSl53ELODN0CUecRzMlPpD8vgswrMx9ETO1UZznR_v1GIgzQYnq8YYd2p5Decj1MclJm1CpX5_WVxP1cma9cDke40F4j2jEZ7PTXuTM-4SuZp0HU2sYHghdTkYo2ZGvfwg2s2XJ3BN9i6cLA"
    />
</a>
            </div>
    </header>
    <div class="flex min-h-screen">
        <aside
            class="h-[calc(100vh-80px)] w-64 sticky left-0 top-20 flex flex-col p-6 gap-2 bg-slate-50 border-r border-slate-100">
            <div class="mb-8 px-2">
                <h2 class="font-manrope font-extrabold text-xl text-on-background">Alex Rivera</h2>
                <p class="font-inter text-xs font-medium text-slate-500 tracking-wider uppercase">Premium Member</p>
            </div>
            <nav class="flex-grow space-y-1">
                <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-100 transition-transform hover:translate-x-1 rounded-lg font-medium text-sm"
                    href="../pengguna/profil.php">
                    <span class="material-symbols-outlined">person</span>
                    <span>Profil</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-teal-700 font-bold bg-white rounded-lg shadow-sm font-medium text-sm"
                    href="dashboard.php">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">stars</span>
                    <span>Menjadi Penyelenggara</span>
                </a>

            </nav>
            <div class="mt-auto pt-6 border-t border-slate-200">
                <div class="space-y-1">
                    <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:bg-slate-100 rounded-lg text-sm transition-transform hover:translate-x-1"
                        href="#">
                        <span class="material-symbols-outlined">help</span>
                        <span>Help Center</span>
                    </a>
                    <button onclick="openModal()"
                        class="w-full flex items-center gap-3 px-4 py-2 text-error hover:bg-error-container/20 rounded-lg text-sm transition-transform hover:translate-x-1">
                        <span class="material-symbols-outlined">logout</span>
                        <span>Sign Out</span>
                    </button>
                </div>
            </div>
        </aside>
        </aside>>
        <!-- Main Content -->
        <main class="flex-1 pt-24 pb-12 px-8">
            <header class="mb-12 max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <span class="label-sm text-primary font-bold tracking-[0.05em] uppercase text-xs">Organizer
                            Hub</span>
                        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tighter text-on-surface mt-2">Welcome
                            back,
                            Alex.</h1>
                    </div>
                    <button type="button"
                        class="bg-gradient-to-r from-primary to-primary-container text-on-primary py-2 px-3 rounded-lg text-sm font-medium flex items-center justify-center gap-2 shadow active:scale-95 duration-200">
                        <span class="material-symbols-outlined text-base">add_circle</span>
                        <span>Create Event</span>
                    </button>
                </div>
            </header>
            <!-- Bento Grid Stats -->
            <section class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 mb-16">
                <div
                    class="md:col-span-2 bg-gradient-to-br from-primary to-indigo-900 p-8 rounded-xl text-on-primary flex flex-col justify-between overflow-hidden relative min-h-[220px]">
                    <div class="relative z-10">
                        <p class="text-primary-fixed-dim font-medium uppercase tracking-wider text-xs mb-1">Total
                            Registrations</p>
                        <h3 class="text-6xl font-black tracking-tighter">10</h3>
                    </div>
                    <!-- Subtle Texture/Graphic -->
                    <div class="absolute -right-10 -bottom-10 opacity-20 transform rotate-12">
                        <span class="material-symbols-outlined text-[180px]"
                            style="font-variation-settings: 'FILL' 1;">analytics</span>
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-8 rounded-xl shadow-none border-none tonal-transition-surface-container-low flex flex-col justify-between min-h-[220px]">

                    <div>
                        <p class="text-slate-400 font-medium uppercase tracking-wider text-xs mb-1">
                            Active Events
                        </p>

                        <!-- ANGKA DINAMIS -->
                        <h3 class="text-5xl font-bold tracking-tight text-on-surface">
                            03
                        </h3>
                    </div>

                    <!-- PROGRESS -->
                    <div class="h-2 w-full bg-surface-container-low rounded-full overflow-hidden">
                        <div class="h-full bg-primary w-[75%] rounded-full"></div>
                    </div>

                    <p class="text-slate-500 text-xs mt-2">
                        2 published, 1 draft
                    </p>

                </div>
                <div class="bg-surface-container-low p-8 rounded-xl flex flex-col justify-between min-h-[220px]">
                    <div>
                        <p class="text-slate-400 font-medium uppercase tracking-wider text-xs mb-1">Pembicara terdaftar
                        </p>
                        <h3 class="text-5xl font-bold tracking-tight text-on-surface">3</h3>
                    </div>
                </div>
            </section>
            <!-- Events List Section -->
            <section class="max-w-6xl mx-auto">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-3xl font-extrabold tracking-tight">Your Events</h2>
                    <div class="flex gap-4">
                        <button type="button"
                            class="text-slate-500 font-bold text-sm border-b-2 border-primary pb-1">All Events</button>
                    </div>
                </div>
                <div class="space-y-6">
                    <!-- Event Card 1 -->
                    <div
                        class="bg-surface-container-lowest rounded-xl p-6 transition-all hover:translate-x-1 duration-300 border-l-4 border-primary">
                        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                            <div class="flex items-center gap-6">
                                <div class="w-24 h-24 rounded-xl overflow-hidden bg-slate-200 flex-shrink-0">
                                    <img alt="Tech Future Conference thumbnail" class="w-full h-full object-cover"
                                        data-alt="vibrant abstract background with neon geometric shapes and digital tech patterns, energetic futuristic vibe"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCoOHFOVwxmtdKGaaqbM4n0HYTItdhOeGgLdMbcbAqHygJDrrZthHtzYbB5huhoFobz6baRflkwI_QWO8t3KuZZklBeRkhbyzCFaqnh5x39MvE8jc_EGflvIbJbIbldFzVzhiF8VUAAIcKGjiixMgYex5qX4o5xSAIeL5Y0QZ6BweIogo99RIskKD8bSwTylTXQ61Ibek60ZvvWKd51-Bj4BVDgwSAxE6LDVtGx62DH3Vz_60iItzLPN2tHlzIrGHQUtt8Gunvijw">
                                </div>
                                <div>
                                   <div class="flex items-center gap-2 mb-1 flex-wrap">
                                        <span
                                            class="bg-indigo-100 text-teal-700 text-[10px] uppercase font-black px-2 py-0.5 rounded tracking-widest">
                                            Published
                                        </span>

                                        <!-- JENIS EVENT -->
                                        <span
                                            class="bg-blue-100 text-blue-700 text-[10px] uppercase font-bold px-2 py-0.5 rounded tracking-widest">
                                            bootcamp
                                        </span>
                                    </div>
                                    <h3 class="text-xl font-bold text-on-surface tracking-tight">Global Tech Futures
                                        2024
                                    </h3>
                                    <div class="flex flex-wrap gap-x-6 gap-y-2 mt-2 text-slate-500 text-sm">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">calendar_today</span>
                                            <span>March 14-16, 2026</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">group</span>
                                            <span>842 Registered</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            <span>Fasilkom UPN "VETERAN" Jawa Timur</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 w-full lg:w-auto">
                                <button type="button"
                                    class="flex-1 lg:flex-none px-4 py-2 bg-surface-container-low text-on-surface font-semibold rounded-xl text-sm hover:bg-surface-container-high transition-colors flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                    Edit
                                </button>
                                <button type="button" onclick="openDeleteModal()"
                                    class="p-2 text-slate-400 hover:text-error hover:bg-error-container/20 rounded-xl transition-all">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Event Card 2 -->
                    <div
                        class="bg-surface-container-lowest rounded-xl p-6 transition-all hover:translate-x-1 duration-300 border-l-4 border-slate-300">
                        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                            <div class="flex items-center gap-6 opacity-75">
                                <div class="w-24 h-24 rounded-xl overflow-hidden bg-slate-200 flex-shrink-0 grayscale">
                                    <img alt="Sustainable Living Workshop thumbnail" class="w-full h-full object-cover"
                                        data-alt="minimalist organic textures with leaves and recycled paper materials, soft earthy green and beige tones"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNu1eBVVK989SD86iUabiiPp80cKUf4Tz-CU4Fh8L-5l7PD49K8giz1c3qQ6nBH-vJaTXDbtfdJJpDUFqtvT2QRaE71Gi0ym4a4Va8MBPoMIQ-cjNiluU1tXFptYzEMzMn57-T7pwG8A8B1xgmWfOVdARlnxy9ZWTbbPDyu2Z8l5a3-4c1ZCAUTFJlYe7qVxmhQ5BZCKTXhfLx6S6q01mXfQcx3aqbZrMxmIzT9iGL2YNvL46gZqSKznUSSXhlcTf2FV-Z-EsiAw">
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 mb-1 flex-wrap">
                                        <span
                                            class="bg-indigo-100 text-teal-700 text-[10px] uppercase font-black px-2 py-0.5 rounded tracking-widest">
                                            Draft
                                        </span>

                                        <!-- JENIS EVENT -->
                                        <span
                                            class="bg-blue-100 text-blue-700 text-[10px] uppercase font-bold px-2 py-0.5 rounded tracking-widest">
                                            Webinar
                                        </span>
                                    </div>
                                    <h3 class="text-xl font-bold text-on-surface tracking-tight">Sustainable Living
                                        Workshop
                                        Series</h3>
                                    <div class="flex flex-wrap gap-x-6 gap-y-2 mt-2 text-slate-500 text-sm">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">calendar_today</span>
                                            <span>TBD</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">group</span>
                                            <span>0 Registered</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            <span>Online Only</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 w-full lg:w-auto">
                                <button type="button"
                                    class="flex-1 lg:flex-none px-4 py-2 bg-primary text-on-primary font-semibold rounded-xl text-sm hover:bg-primary-container transition-colors">
                                    Publish Event
                                </button>
                                <button type="button"
                                    class="flex-1 lg:flex-none px-4 py-2 bg-surface-container-low text-on-surface font-semibold rounded-xl text-sm hover:bg-surface-container-high transition-colors flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                    Edit
                                </button>
                                <button type="button" onclick="openDeleteModal()"
                                    class="p-2 text-slate-400 hover:text-error hover:bg-error-container/20 rounded-xl transition-all">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Event Card 3 -->
                    <div
                        class="bg-surface-container-lowest rounded-xl p-6 transition-all hover:translate-x-1 duration-300 border-l-4 border-primary">
                        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                            <div class="flex items-center gap-6">
                                <div class="w-24 h-24 rounded-xl overflow-hidden bg-slate-200 flex-shrink-0">
                                    <img alt="Design Thinking Summit" class="w-full h-full object-cover"
                                        data-alt="close-up of colorful sticky notes on a glass wall with blurred office people in background, creative workshop atmosphere"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDXBUJTFndMUx_7egKcSyTRL8Nun_DF7qnJ1yvhh0GoyB4XG6TKDve3Cjw4SLLv3m9ap_nYHHQorWjhT1bZZcFBiXO9AuO1ha7PIrR8bI7JyJdh6GzPWrRKhloWg8quXX77Qa6o7CnJqebkQ0ilHoCpu39CXteM5VB6hggKFcPcza3fWd-mMAD71rCPmCZtBG3A57DmKrRavE-UtMGj7xltfoKyf2ZFApTDhYM7r2SQqKe6sU86K5eq4qHZotEIZ64dVmMDovYMw">
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 mb-1 flex-wrap">
                                        <span
                                            class="bg-indigo-100 text-teal-700 text-[10px] uppercase font-black px-2 py-0.5 rounded tracking-widest">
                                            Published
                                        </span>

                                        <!-- JENIS EVENT -->
                                        <span
                                            class="bg-blue-100 text-blue-700 text-[10px] uppercase font-bold px-2 py-0.5 rounded tracking-widest">
                                            Webinar
                                        </span>
                                    </div>
                                    <h3 class="text-xl font-bold text-on-surface tracking-tight">Design Thinking Summit
                                        2026
                                    </h3>
                                    <div class="flex flex-wrap gap-x-6 gap-y-2 mt-2 text-slate-500 text-sm">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">calendar_today</span>
                                            <span>April 02, 2026</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">group</span>
                                            <span>315 Registered</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            <span>online only</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 w-full lg:w-auto">
                                <button type="button"
                                    class="flex-1 lg:flex-none px-4 py-2 bg-surface-container-low text-on-surface font-semibold rounded-xl text-sm hover:bg-surface-container-high transition-colors flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                    Edit
                                </button>
                                <button type="button" onclick="openDeleteModal()"
                                    class="p-2 text-slate-400 hover:text-error hover:bg-error-container/20 rounded-xl transition-all">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Speakers Section -->
                    <section class="max-w-6xl mx-auto mt-16">
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="text-3xl font-extrabold tracking-tight">
                                Pembicara Terdaftar
                            </h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Speaker Card -->
                            <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all">
                                <div class="flex items-center gap-4">
                                    <img class="w-14 h-14 rounded-full object-cover"
                                        src="https://i.pravatar.cc/150?img=12" alt="speaker">
                                    <div>
                                        <h3 class="font-bold text-on-surface">Ibrahim</h3>
                                        <p class="text-sm text-slate-500">Product Manager @ Google</p>
                                    </div>
                                </div>
                                <p class="text-sm text-slate-500 mt-4">
                                    Keahlian: UI/UX
                                </p>
                            </div>

                            <!-- Speaker Card -->
                            <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all">
                                <div class="flex items-center gap-4">
                                    <img class="w-14 h-14 rounded-full object-cover"
                                        src="https://i.pravatar.cc/150?img=32" alt="speaker">
                                    <div>
                                        <h3 class="font-bold text-on-surface">Khodijah</h3>
                                        <p class="text-sm text-slate-500">Startup Advisor</p>
                                    </div>
                                </div>
                                <p class="text-sm text-slate-500 mt-4">
                                    Keahlian: Bisnis
                                </p>
                            </div>

                            <!-- Speaker Card -->
                            <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all">
                                <div class="flex items-center gap-4">
                                    <img class="w-14 h-14 rounded-full object-cover"
                                        src="https://i.pravatar.cc/150?img=45" alt="speaker">
                                    <div>
                                        <h3 class="font-bold text-on-surface">Amanda Rizky</h3>
                                        <p class="text-sm text-slate-500">CEO geprekin</p>
                                    </div>
                                </div>
                                <p class="text-sm text-slate-500 mt-4">
                                    Keahlian: Bisnis & Keuangan
                                </p>
                            </div>

                        </div>
                    </section>
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
                    <a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all"
                        href="#" aria-label="Instagram">
                        <i class="fa-brands fa-instagram text-[20px]"></i>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all"
                        href="#" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in text-[20px]"></i>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-teal-800 dark:text-teal-400 hover:bg-teal-800 hover:text-white transition-all"
                        href="#" aria-label="Twitter/X">
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
                        <a class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors"
                            href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors"
                            href="#">Terms of Service</a>
                    </li>
                    <li>
                        <a class="text-slate-500 dark:text-slate-400 hover:text-teal-600 transition-colors"
                            href="#">Help Center</a>
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
                        placeholder="Name" type="text">
                    <input
                        class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg px-4 py-2 focus:ring-1 focus:ring-teal-500 outline-none text-sm font-inter"
                        placeholder="Email" type="email">
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
                            <button onclick="closeModal()"
                                class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg">
                                Batalkan
                            </button>

                            <button onclick="logout()"
                                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                Keluar
                            </button>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Modal Hapus -->
            <div id="deleteModal" class="fixed inset-0 bg-black/40 hidden z-50">

                <div class="absolute inset-0 flex items-center justify-center p-4">

                    <div id="deleteBox"
                        class="bg-white rounded-xl p-6 w-[90%] max-w-sm shadow-lg scale-95 opacity-0 transition duration-200">

                        <h2 class="text-lg font-bold mb-2 text-red-600">Hapus Event</h2>
                        <p class="text-slate-600 text-sm mb-6">
                            Anda yakin mau menghapus event ini?
                        </p>

                        <!-- Tombol -->
                        <div class="flex justify-center gap-3">

                            <button onclick="closeDeleteModal()"
                                class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg">
                                Batalkan
                            </button>

                            <button onclick="deleteEvent()"
                                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                Hapus
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
            <script>
                function openDeleteModal() {
                    const modal = document.getElementById("deleteModal");
                    const box = document.getElementById("deleteBox");

                    modal.classList.remove("hidden");

                    setTimeout(() => {
                        box.classList.remove("scale-95", "opacity-0");
                    }, 10);
                }

                function closeDeleteModal() {
                    const modal = document.getElementById("deleteModal");
                    const box = document.getElementById("deleteBox");

                    box.classList.add("scale-95", "opacity-0");

                    setTimeout(() => {
                        modal.classList.add("hidden");
                    }, 200);
                }

                function deleteEvent() {
                    alert("Event berhasil dihapus!");
                    closeDeleteModal();

                    // nanti bisa ditambah:
                    // hapus dari database / redirect
                }
            </script>
</body>

</html>