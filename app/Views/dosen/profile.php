<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="dosen.css">
    <link rel="stylesheet" href="profil.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header-judul">
                <p>MONEV RPS</p> 
            </div>
            <div class="sidebar-header">
                <p>Tahun Ajaran : 2024/2025 Ganjil</p>
            </div>
            <a href="dashboard-dosen.html" class="menu-item">
                <i class="bi bi-speedometer2"></i><span>Halaman Utama</span>
            </a>
            <a href="#" class="menu-item" id="menuRPS">
                <i class="bi bi-file-earmark-arrow-up-fill"></i><span>RPS</span>
                <i class="bi bi-chevron-left chevron-icon float-end"></i>
            </a>
            <a href="unggah-rps.html" class="menu-item submenu-item" id="unggahRpsMenu" style="display: none;"><span>Unggah RPS</span></a>
            <a href="Isi-bap.html" class="menu-item">
                <i class="bi bi-file-earmark-pdf-fill"></i><span>BAP</span> 
            </a>
            <a href="feedback.html" class="menu-item">
                <img src="feedback.png" alt="Feedback Icon" class="feedback-icon"><span>Feedback RPS</span> 
            </a>
            <a href="notifikasi-rps.html" class="menu-item">
                <i class="bi bi-bell-fill"></i><span>Notifikasi</span> 
            </a>
            <a href="#" class="menu-item">
                <i class="bi bi-box-arrow-left"></i><span>Keluar</span> 
            </a>
        </nav>

        <!-- Main content -->
        <div class="admin-info">
            <span class="toggle-sidebar">&#9776;</span>
            
            <!-- Right-aligned container for profile and notification icons -->
            <div class="right-icons">
                <a href="profile.html" class="profile-link">
                    <span class="admin-name">Nama Dosen</span>
                    <i class="bi bi-person-fill"></i>
                </a>
                <a href="notifikasi-rps.html" class="notif">
                    <i class="bi bi-bell-fill"></i>
                </a>
            </div>
        </div>

        <div class="main-content">
            <header class="main-header">
                <h1 class="h4">Home / Profil saya</h1>
            </header>

            <div class="profile-container">
                <div class="profile-content">
                    <div class="profile-form">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nidn">NIDN</label>
                            <input type="text" id="nidn" name="nidn">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <input type="text" id="fakultas" name="fakultas">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" id="jurusan" name="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select required>
                                <option value="admin">Admin</option>
                                <option value="dosen">Dosen</option>
                                <option value="gpm">GPM</option>
                                <option value="kajur">Kajur</option>
                            </select>
                        </div>
                        <button class="but" type="submit" id="saveButton">Simpan</button>
                    </div>
                    <div class="profile-image">
                        <i class="bi bi-person-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Fakultas Teknik. All rights reserved.</p>
    </footer>
    
    <script src="dosen.js"></script>

    <!-- Scripts for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>