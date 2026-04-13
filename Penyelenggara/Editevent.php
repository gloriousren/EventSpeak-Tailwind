<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "db_eventspeak");

// ambil id dari URL
$id = $_GET['id'];

// ambil data berdasarkan id
$query = mysqli_query($conn, "SELECT * FROM Penyelenggara WHERE id = $id");
$data = mysqli_fetch_assoc($query);

// proses update
if(isset($_POST['submit'])){
    $Jenis_Event = $_POST['Jenis_Event'];
    $Nama_Event = $_POST['Nama_Event'];
    $Deskripsi = $_POST['Deskripsi'];
    $Tanggal = $_POST['Tanggal'];
    $Lokasi = $_POST['Lokasi'];
    $Gambar = $_POST['Gambar_lama'];
 if($_FILES['Gambar']['name'] != ""){

        $gambar = time() . "_" . $_FILES['Gambar']['name'];
        $tmp    = $_FILES['Gambar']['tmp_name'];

        move_uploaded_file($tmp, "upload/" . $Gambar);

        // optional: hapus gambar lama
        if(file_exists("upload/" . $_POST['Gambar_lama'])){
            unlink("upload/" . $_POST['Gambar_lama']);
        }
    }
    mysqli_query($conn, "UPDATE Penyelenggara SET 
        Jenis_Event='$Jenis_Event',
        Nama_Event='$Nama_Event',
        Deskripsi='$Deskripsi',
        Tanggal='$Tanggal',
        Lokasi='$Lokasi',
        Gambar='$Gambar'
        WHERE id=$id
    ");

    echo "<script>
        alert('Data berhasil diupdate!');
        window.location='dashboard.php';
    </script>";
}
?>
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

<body class="flex flex-col min-h-screen">
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
                    <a href="../Pengguna/profil.php"
                        class="block w-10 h-10 rounded-full overflow-hidden bg-surface-container-high hover:scale-95 transition">
                        <img alt="User profile avatar" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7V9Te4MhqGJF4B4UsLUoraWH5dNjTAK7sF-VbS5sDev2unalotsCqi2Q_70_T605O60TpZlQtsOtRCNXGBvbl7-6P-yDfvh-iN2Z7MUwwAmyB67x5O_bRbbL8FgWSl53ELODN0CUecRzMlPpD8vgswrMx9ETO1UZznR_v1GIgzQYnq8YYd2p5Decj1MclJm1CpX5_WVxP1cma9cDke40F4j2jEZ7PTXuTM-4SuZp0HU2sYHghdTkYo2ZGvfwg2s2XJ3BN9i6cLA" />
                    </a>
            </div>
    </header>
    <div class="flex flex-1 pt-20">
        <aside
            class="w-64 h-[calc(100vh-5rem)] sticky top-20 flex flex-col p-6 gap-2 bg-slate-50 border-r border-slate-100">
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
                    <button type="butoon" onclick="openModal()"
                        class="w-full flex items-center gap-3 px-4 py-2 text-error hover:bg-error-container/20 rounded-lg text-sm transition-transform hover:translate-x-1">
                        <span class="material-symbols-outlined">logout</span>
                        <span>Sign Out</span>
                    </button>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 pt-24 pb-12 px-8">
            <div class="max-w-4xl mx-auto">

                <!-- Header -->
                <div class="mb-10">
                    <h1 class="text-3xl font-extrabold">EDIT EVENT</h1>
                    <p class="text-slate-500 text-sm mt-1">
                        Perbarui informasi event kamu
                    </p>
                </div>

                <!-- Form -->
                <form method="POST" enctype="multipart/form-data" class="space-y-8">

                    <!-- Gambar Event -->
                    <div class="bg-blue-50 border-l-4 border-teal-400 p-6 rounded-xl shadow-sm">
                        <label class="font-bold text-sm mb-3 block">Gambar Event</label>

                        <div class="flex items-center gap-6">
                            <img id="previewGambar"
     src="upload/<?= $data['gambar'] ?? 'default.png' ?>"
     class="w-28 h-28 rounded-xl object-cover">

                            <input type="hidden" name="gambar_lama" value="<?= $data['gambar'] ?>">
                        </div>
                    </div>
                    <!-- Jenis Event -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <label
                            class="inline-flex items-center gap-2 text-sm font-semibold text-teal-700 bg-teal-100 px-3 py-1 rounded-full mb-2">
                            <span class="material-symbols-outlined text-[18px]">category</span>
                            Jenis Event
                        </label>

                        <select name="jenis_event" class="w-full rounded-xl border border-slate-200 px-4 py-3 bg-white 
               focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none 
               text-slate-700 font-medium">

                            <option value="">-- Pilih Jenis Event --</option>
                            <option value="webinar">Webinar</option>
                            <option value="workshop">Workshop</option>
                            <option value="bootcamp">Bootcamp</option>

                        </select>
                    </div>
                    <!-- Nama Event -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <label
                            class="inline-flex items-center gap-2 text-sm font-semibold text-teal-700 bg-teal-100 px-3 py-1 rounded-full mb-2">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                            Nama Event
                        </label>
                        <input type="text" name="nama_event" value="Global Tech Futures 2024"
                            class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <!-- Deskripsi -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <label
                            class="inline-flex items-center gap-2 text-sm font-semibold text-teal-700 bg-teal-100 px-3 py-1 rounded-full mb-2">
                            <span class="material-symbols-outlined text-[18px]">description</span>
                            Deskripsi Event
                        </label>
                        <textarea name="deskripsi" rows="5"
                            class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:ring-2 focus:ring-primary outline-none">Event teknologi terbesar membahas masa depan AI, Web3, dan startup.</textarea>
                    </div>

                    <!-- Tanggal -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <label
                            class="inline-flex items-center gap-2 text-sm font-semibold text-teal-700 bg-teal-100 px-3 py-1 rounded-full mb-2">
                            <span class="material-symbols-outlined text-[18px]">event</span>
                            Tanggal Event
                        </label>
                        <input type="date" name="tanggal" value="2026-03-14"
                            class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <!-- Lokasi -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <label
                            class="inline-flex items-center gap-2 text-sm font-semibold text-teal-700 bg-teal-100 px-3 py-1 rounded-full mb-2">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            Lokasi Event
                        </label>
                        <input type="text" name="lokasi" value='Fasilkom UPN "VETERAN" Jawa Timur'
                            class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:ring-2 focus:ring-primary outline-none">
                    </div>

                    <!-- Pemateri -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <label
                            class="inline-flex items-center gap-2 text-sm font-semibold text-teal-700 bg-teal-100 px-3 py-1 rounded-full mb-4">
                            <span class="material-symbols-outlined text-[18px]">person</span>
                            Pemateri
                        </label>

                        <!-- Foto + Nama -->
                        <div class="flex items-center gap-4 mb-4">
                            <!-- Foto Pemateri -->
                            <img id="previewPemateri" src="img/pemateri.jpg" alt="Foto Pemateri"
                                class="w-16 h-16 rounded-full object-cover border">

                            <!-- Nama Pemateri -->
                            <input type="text" name="Pemateri" value="Khodijah, S.M"
                                class="flex-1 rounded-xl border border-slate-200 px-4 py-3 focus:ring-2 focus:ring-primary outline-none">
                        </div>

                        <!-- Upload Gambar -->
                        <input type="file" name="foto_pemateri" onchange="previewPemateriImage(event)" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 
        file:rounded-lg file:border-0 file:text-sm file:font-semibold 
        file:bg-teal-100 file:text-teal-700 hover:file:bg-teal-500">
                    </div>
                    <!-- Button -->
                    <div class="flex justify-between items-center">
                        <button type="button" onclick="window.location.href='dashboard.php'"
                            class="flex-1 lg:flex-none px-4 py-2 bg-surface-container-low text-on-surface font-semibold rounded-xl text-sm flex items-center justify-center gap-2">

                            <span class="material-symbols-outlined text-sm">arrow_back</span>
                            Kembali
                        </button>

                        <button type="button" onclick="openModal()"
                            class="bg-teal-900 text-white px-6 py-3 rounded-xl hover:bg-teal-700">
                            Simpan Perubahan
                        </button>
                    </div>

                </form>
            </div>
        </main>
    </div>
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

                    <button type="button" "logout()"
                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Keluar
                    </button>
                </div>

            </div>

        </div>
    </div>
    <!-- Overlay -->
    <div id="modalKonfirmasi" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

        <!-- Box Modal -->
        <div class="bg-white rounded-2xl p-6 w-full max-w-sm text-center shadow-lg">
            <h2 class="text-lg font-semibold mb-4">
                Simpan Perubahan Event?
            </h2>

            <div class="flex justify-center gap-4">
                <!-- Tombol Tidak -->
                <button onclick="closeModal()" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">
                    Tidak
                </button>

                <!-- Tombol Simpan -->
                <button onclick="submitForm()" class="px-4 py-2 rounded-lg bg-teal-600 text-white hover:bg-teal-700">
                    Simpan
                </button>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="mt-auto bg-white px-8 py-12">
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
            </p>
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
                function openModal() {
                    document.getElementById('modalKonfirmasi').classList.remove('hidden');
                    document.getElementById('modalKonfirmasi').classList.add('flex');
                }

                function closeModal() {
                    document.getElementById('modalKonfirmasi').classList.remove('flex');
                    document.getElementById('modalKonfirmasi').classList.add('hidden');
                }

                function submitForm() {
                    // ganti dengan id form kamu
                    document.querySelector('form').submit();
                }
            </script>
            <script>
                function previewImage(event) {
                    const input = event.target;
                    const preview = document.getElementById('previewGambar');

                    if (input.files && input.files[0]) {
                        const reader = new FileReader();

                        reader.onload = function (e) {
                            preview.src = e.target.result;
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            <script>
                function previewPemateriImage(event) {
                    const input = event.target;
                    const preview = document.getElementById('previewPemateri');

                    if (input.files && input.files[0]) {
                        const reader = new FileReader();

                        reader.onload = function (e) {
                            preview.src = e.target.result;
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
</body>

</html>