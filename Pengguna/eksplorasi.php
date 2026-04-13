<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);

if (!$isLoggedIn) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>

<html class="light" lang="id">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>EventSpeak</title>
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
      rel="stylesheet"
    >
    <!-- Material Symbols -->
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    >
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    >
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    >
    <!-- Tailwind CSS -->
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
      .editorial-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 2.5rem;
      }
      .glass-nav {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
      }
    </style>
  </head>
  <body
    class="bg-background text-on-surface font-body selection:bg-secondary-container"
  >
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
              href="#"
              >Featured</a
            >
            <a
              class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="schedule.php"
              >Schedule</a
            >
            <a
              class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="#"
              >Become a Speaker</a
            >
            <a
              class="font-manrope text-slate-600 dark:text-slate-400 hover:text-teal-600 tracking-tight transition-colors"
              href="team.php"
              >Team</a
            >
          </div>
        </div>
        <div class="flex items-center gap-4">
  <?php if ($isLoggedIn): ?>

    <!-- Avatar -->
    <a href="profil.php" 
    class="w-10 h-10 rounded-full overflow-hidden shadow-md hover:scale-95 transition">
      <img 
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7V9Te4MhqGJF4B4UsLUoraWH5dNjTAK7sF-VbS5sDev2unalotsCqi2Q_70_T605O60TpZlQtsOtRCNXGBvbl7-6P-yDfvh-iN2Z7MUwwAmyB67x5O_bRbbL8FgWSl53ELODN0CUecRzMlPpD8vgswrMx9ETO1UZznR_v1GIgzQYnq8YYd2p5Decj1MclJm1CpX5_WVxP1cma9cDke40F4j2jEZ7PTXuTM-4SuZp0HU2sYHghdTkYo2ZGvfwg2s2XJ3BN9i6cLA"
        class="w-full h-full object-cover"
      >
    </a>

  <?php else: ?>

    <a href="login.php"
      class="px-5 py-2 text-primary font-semibold hover:bg-slate-100 rounded-xl">
      Login
    </a>

    <a href="registrasi.php"
      class="px-6 py-2 bg-primary text-on-primary font-bold rounded-xl shadow-md hover:scale-95 duration-200">
      Sign Up
    </a>

  <?php endif; ?>
</div>

      </div>
      </div>
    </nav>

    <!-- Main Content Wrapper -->
    <main
      class="pt-28 pb-16 px-8 max-w-7xl mx-auto min-h-screen flex flex-col md:flex-row gap-12"
    >
      <!-- Sidebar Filters -->
      <form method="GET" class="w-full md:w-72 flex-shrink-0 space-y-10">
        <!-- Search Widget -->
        <div class="space-y-4">
          <h3
            class="font-headline font-bold text-xl tracking-tight text-primary"
          >
            Cari Event
          </h3>
          <div class="relative group">
            <input
            type="text"
            name="keyword"
            value="<?= $_GET['keyword'] ?? '' ?>"
            class="w-full pl-12 pr-4 py-3 bg-surface-container border-none rounded-xl"
            placeholder="Design, AI, Business..."
            >
            <span
              class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline"
              >search</span
            >
          </div>
        </div>
        <!-- Categories -->
        <div class="space-y-4">
          <h3
            class="font-headline font-bold text-lg tracking-tight text-primary"
          >
            Kategori
          </h3>
          <?php $selected = $_GET['jenis'] ?? []; ?>
          <div class="space-y-2">

  <!-- Workshop -->
  <label class="flex items-center gap-3 p-3 rounded-xl hover:bg-surface-container-low cursor-pointer transition-colors group">
    <input
      type="checkbox"
      name="jenis[]"
      value="Workshop"
      class="rounded border-outline text-primary focus:ring-primary"
      <?= in_array('Workshop', $selected) ? 'checked' : '' ?>
    >
    <span class="text-on-surface font-medium">Workshop</span>
  </label>

  <!-- Webinar -->
  <label class="flex items-center gap-3 p-3 rounded-xl hover:bg-surface-container-low cursor-pointer transition-colors group">
    <input
      type="checkbox"
      name="jenis[]"
      value="Webinar"
      class="rounded border-outline text-primary focus:ring-primary"
      <?= in_array('Webinar', $selected) ? 'checked' : '' ?>
    >
    <span class="text-on-surface font-medium">Webinar</span>
  </label>

  <!-- Bootcamp -->
  <label class="flex items-center gap-3 p-3 rounded-xl hover:bg-surface-container-low cursor-pointer transition-colors group">
    <input
      type="checkbox"
      name="jenis[]"
      value="Bootcamp"
      class="rounded border-outline text-primary focus:ring-primary"
      <?= in_array('Bootcamp', $selected) ? 'checked' : '' ?>
    >
    <span class="text-on-surface font-medium">Bootcamp</span>
  </label>

</div>
        </div>
        <!-- Price Range -->
        <div class="space-y-4">
          <h3
            class="font-headline font-bold text-lg tracking-tight text-primary"
          >
            Rentang Harga
          </h3>
          <div class="px-2">
            <input
              class="w-full accent-primary"
              max="5000000"
              min="0"
              type="range"
            >
            <div
              class="flex justify-between mt-2 text-sm text-outline font-medium"
            >
              <span>Rp 0</span>
              <span>Rp 5jt+</span>
            </div>
          </div>
        </div>

        <!-- Date -->
        <div class="space-y-4">
          <h3
            class="font-headline font-bold text-lg tracking-tight text-primary"
          >
            Waktu
          </h3>
          <input 
          type="date" 
          name="tanggal"
          value="<?= $_GET['tanggal'] ?? '' ?>"
          >
        </div>
        <button
          type="submit"
          class="w-full py-4 bg-secondary-container text-on-secondary-container font-bold rounded-xl hover:opacity-90 transition-opacity"
        >
          Terapkan Filter
        </button>
  </form>
      <!-- Content Area -->
      <section class="flex-grow">
        <!-- Header Editorial -->
        <div class="mb-12">
          <h1
            class="font-headline text-5xl font-extrabold tracking-tighter text-primary mb-4"
          >
            Temukan Panggung Intelektual Anda
          </h1>
          <p class="text-on-surface-variant text-lg max-w-2xl leading-relaxed">
            Kurasi workshop dan pelatihan dari pakar industri untuk mengakselerasi pertumbuhan karier Anda.
          </p>
        </div>

        <?php
$conn = mysqli_connect("127.0.0.1:3306", "root", "", "eventspeak");

$query = "SELECT * FROM Penyelenggara WHERE 1=1";
// 🔍 SEARCH KEYWORD
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $query .= " AND (
        nama_event LIKE '%$keyword%' OR 
        pemateri LIKE '%$keyword%' OR 
        lokasi LIKE '%$keyword%'
    )";
}

// kategori
if (!empty($_GET['jenis'])) {
    $jenis = $_GET['jenis'];
    $jenisList = "'" . implode("','", $jenis) . "'";
    $query .= " AND jenis_event IN ($jenisList)";
}

// harga
if (!empty($_GET['min_harga']) && !empty($_GET['max_harga'])) {
    $min = $_GET['min_harga'];
    $max = $_GET['max_harga'];
    $query .= " AND harga BETWEEN $min AND $max";
}

// tanggal
if (!empty($_GET['tanggal'])) {
    $tanggal = $_GET['tanggal'];
    $query .= " AND tanggal <= '$tanggal'";
}

$result = mysqli_query($conn, $query);
?>

    <!-- Event Cards Grid -->
     <div class="editorial-grid">

<?php while($row = mysqli_fetch_assoc($result)) { ?>

  <div class="group flex flex-col bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition">

    <!-- GAMBAR -->
    <div class="relative h-56">
      <img src="../penyelenggara/upload/<?= $row['gambar'] ?>" 
           class="w-full h-full object-cover group-hover:scale-105 transition">

      <!-- Badge -->
      <div class="absolute top-3 left-3">
        <span class="bg-primary text-white text-xs px-3 py-1 rounded-full uppercase">
          <?= $row['jenis_event'] ?>
        </span>
      </div>

      <!-- Tanggal -->
      <div class="absolute -bottom-4 right-4 bg-white px-3 py-2 rounded-xl shadow">
        <div class="text-center">
          <span class="block font-bold text-primary text-lg">
            <?= date('d', strtotime($row['tanggal'])) ?>
          </span>
          <span class="text-xs text-gray-500 uppercase">
            <?= date('M', strtotime($row['tanggal'])) ?>
          </span>
        </div>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="p-6 flex flex-col flex-grow mt-6">

      <h3 class="font-bold text-lg mb-2">
        <?= $row['nama_event'] ?>
      </h3>

      <p class="text-sm text-gray-500 mb-4">
        <?= $row['pemateri'] ?>
      </p>

      <!-- FOOTER -->
      <div class="mt-auto flex justify-between items-center">
        <span class="text-lg font-bold text-primary">
          <?php
          if ($row['harga'] == 0) {
              echo "Gratis";
          } else {
              echo "Rp " . number_format($row['harga']);
          }
          ?>
        </span>

        <span class="text-primary text-xl">›</span>
      </div>

    </div>
  </div>

<?php } ?>

</div>
  </div>
</div>
         
          </button>
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
  </body>
</html>
