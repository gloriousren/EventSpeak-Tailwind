<?php
session_start();
include '../koneksi.php';

if ($_POST) {

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO user (nama_user, email_user, password_user) VALUES ('$nama', '$email', '$password')");

  $_SESSION['user'] = $email;

  header("Location: /eventspeak/pengguna/index.php");
  exit;
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EventSpeak</title>
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
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "surface-bright": "#f8f9fb",
            "tertiary-container": "#a51526",
            primary: "#004253",
            "on-secondary-fixed-variant": "#274c57",
            "inverse-on-surface": "#eff1f3",
            "on-background": "#191c1e",
            "surface-container-highest": "#e1e3e4",
            "error-container": "#ffdad6",
            surface: "#f8f9fb",
            "on-error-container": "#93000a",
            "surface-container-high": "#e6e8ea",
            "secondary-fixed": "#c3e8f7",
            "inverse-primary": "#8dd0e9",
            error: "#ba1a1a",
            outline: "#70787d",
            "surface-tint": "#19667d",
            "surface-container-low": "#f2f4f6",
            tertiary: "#7e0016",
            "on-secondary-fixed": "#001f28",
            "on-primary": "#ffffff",
            secondary: "#406370",
            "primary-fixed": "#b7eaff",
            "secondary-fixed-dim": "#a7ccda",
            "on-primary-fixed": "#001f28",
            "surface-variant": "#e1e3e4",
            "surface-dim": "#d8dadc",
            "tertiary-fixed-dim": "#ffb3b0",
            "secondary-container": "#c0e6f4",
            "on-tertiary-fixed": "#410007",
            "on-tertiary-fixed-variant": "#92001b",
            "inverse-surface": "#2e3132",
            "primary-container": "#005b71",
            "on-secondary-container": "#446874",
            "primary-fixed-dim": "#8dd0e9",
            "on-surface-variant": "#40484c",
            "surface-container-lowest": "#ffffff",
            "on-secondary": "#ffffff",
            "on-error": "#ffffff",
            "outline-variant": "#bfc8cc",
            "on-tertiary-container": "#ffb4b2",
            background: "#f8f9fb",
            "tertiary-fixed": "#ffdad8",
            "on-surface": "#191c1e",
            "surface-container": "#eceef0",
            "on-primary-fixed-variant": "#004e61",
            "on-primary-container": "#8ed1ea",
            "on-tertiary": "#ffffff",
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

    .editorial-gradient {
      background: linear-gradient(135deg, #004253 0%, #005b71 100%);
    }

    .ambient-shadow {
      box-shadow: 0px 20px 40px rgba(25, 28, 30, 0.06);
    }

    .glass-panel {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(12px);
    }
  </style>
</head>

<body class="bg-surface font-body text-on-surface overflow-x-hidden">
  <div class="min-h-screen flex items-center justify-center relative p-6">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0 overflow-hidden">
      <div
        class="absolute top-[-10%] left-[-10%] w-[40%] h-[60%] editorial-gradient opacity-10 rounded-full blur-[120px]"></div>
      <div
        class="absolute bottom-[-10%] right-[-10%] w-[30%] h-[50%] bg-tertiary opacity-5 rounded-full blur-[100px]"></div>
    </div>
    <main class="relative z-10 w-full max-w-md">
      <!-- Logo Section -->
      <div class="flex flex-col items-center mb-4">
        <div
          class="text-3xl font-headline font-extrabold tracking-tight text-primary mb-2">
          EventSpeak
        </div>
        <p
          class="text-on-surface-variant font-medium text-sm tracking-wide"></p>
      </div>
      <!-- Login Card -->
      <div
        class="surface-container-lowest glass-panel ambient-shadow rounded-xl p-8 md:p-10 transition-all duration-300">
        <div class="mb-8">
          <h1
            class="text-2xl font-headline font-bold text-on-surface tracking-tight mb-2">
            Create Account
          </h1>
          <p class="text-on-surface-variant text-sm">
            Silakan isi data untuk membuat akun baru.
          </p>
        </div>

        <form method="POST" class="space-y-6">
          <!-- Full Name -->
          <div class="space-y-2">
            <label
              class="block text-xs font-bold uppercase tracking-widest text-primary/80 font-label">
              Full Name
            </label>
            <div class="relative">
              <span
                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">person</span>
              <input
                type="text"
                name="nama"
                placeholder="Nama lengkap"
                class="w-full bg-surface-variant/30 border-none rounded-xl py-3 pl-10 pr-4 text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all">
            </div>
          </div>

          <!-- Email -->
          <div class="space-y-2">
            <label
              class="block text-xs font-bold uppercase tracking-widest text-primary/80 font-label">
              Email Address
            </label>
            <div class="relative">
              <span
                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">mail</span>
              <input
                type="email"
                name="email"
                placeholder="name@email.com"
                class="w-full bg-surface-variant/30 border-none rounded-xl py-3 pl-10 pr-4 text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all">
            </div>
          </div>

          <!-- Password -->
          <div class="space-y-2">
            <label
              class="block text-xs font-bold uppercase tracking-widest text-primary/80 font-label">
              Password
            </label>
            <div class="relative">
              <span
                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">lock</span>
              <input
                type="password"
                name="password"
                placeholder="••••••••"
                class="w-full bg-surface-variant/30 border-none rounded-xl py-3 pl-10 pr-4 text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all"
                autocomplete="new-password">
            </div>
          </div>

          <!-- Confirm Password -->
          <div class="space-y-2">
            <label
              class="block text-xs font-bold uppercase tracking-widest text-primary/80 font-label">
              Confirm Password
            </label>
            <div class="relative">
              <span
                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">lock_reset</span>
              <input
                type="password"
                placeholder="Ulangi password"
                class="w-full bg-surface-variant/30 border-none rounded-xl py-3 pl-10 pr-4 text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all"
                autocomplete="current-password">
            </div>
          </div>

          <!-- Register Button -->
          <button
            type="submit"
            class="w-full editorial-gradient text-on-primary font-headline font-bold py-4 rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all cursor-pointer">
            Register
          </button>
        </form>

        <!-- Divider -->
        <div class="relative my-8">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-outline-variant/30"></div>
          </div>
          <div
            class="relative flex justify-center text-xs uppercase tracking-widest font-bold">
            <span class="bg-white/0 px-4 text-outline/60">atau</span>
          </div>
        </div>

        <!-- Google Register -->
        <button
          type="button"
          class="w-full flex items-center justify-center gap-3 bg-surface-container-lowest border border-outline-variant/30 text-on-surface font-semibold py-3.5 rounded-xl hover:bg-surface-container-low transition-all active:scale-[0.98] mb-8">
          <img
            src="https://www.svgrepo.com/show/475656/google-color.svg"
            class="w-5 h-5"
            alt="Google Logo">
          <span>Daftar dengan Google</span>
        </button>

        <!-- Footer -->
        <div class="text-center">
          <p class="text-sm text-on-surface-variant">
            Sudah punya akun?
            <a
              href="login.php"
              class="text-primary font-bold hover:underline underline-offset-4 decoration-2">
              Login
            </a>
          </p>
        </div>
        <p
          class="mt-8 text-center text-[10px] text-outline uppercase tracking-[0.2em] font-bold">
          © 2026 EventSpeak
        </p>
      </div>
    </main>
    <!-- Decorative Image Bleed -->
    <div
      class="hidden lg:block fixed top-20 right-[-100px] w-96 h-96 opacity-10">
      <img
        alt=""
        class="w-full h-full object-contain rotate-12"
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7adZuzCeLzxOlJ9xBFL7fMZsxZKZj80dBDyL3t-zHbI7KSYtux2ZRxM93QVIefogeW4eTY9VqE0gtNAknEex9fs5qnGa_hX0NU1mp0mkqKjxbLbbqZAb7c9Qh2KTeeSt7_yTKykcItexXG2dGds2qFkcQcsSfq5SqxROTYPMRo_00tv6lT8Csz9fTq8FXnD9EPLG7qINlPlFBtTnFF9TeLwwaMMSjvHevSrKEjNW3L7VRTL8OotuQg_0_CPKrVt3cyoPhzMr6kUXO">
    </div>
  </div>
</body>

</html>
