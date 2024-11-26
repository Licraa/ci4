<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url("/css/unggah.css"); ?>">
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
            <a href="<?= base_url("/dosen"); ?>" class="menu-item">
                <i class="bi bi-speedometer2"></i><span>Halaman Utama</span>
            </a>

            <a href="/dosen/unggah-rps" class="menu-item" id="menuRPS">
                <i class="bi bi-file-earmark-arrow-up-fill"></i><span>RPS</span>
                <i class="bi bi-chevron-left chevron-icon float-end"></i>
            </a>
            <a href="/dosen/unggah-rps" class="menu-item submenu-item" id="unggahRpsMenu" style="display: none;"><span>Unggah RPS</span></a>
            <a href="Isi-bap.html" class="menu-item">
                <i class="bi bi-file-earmark-pdf-fill"></i><span>BAP</span>
            </a>
            <a href="feedback.html" class="menu-item">
                <img src="/img/feedback.png" alt="Feedback Icon" class="feedback-icon"><span>Feedback RPS</span>
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
                <h1 class="h4">Home / Unggah RPS</h1>
            </header>

            <div class="container-fluid">
                <!-- Filter and Pagination -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="input-group">
                        <select class="form-select" aria-label="Select Semester">
                            <option selected disabled>Pilih Semester</option>
                            <option value="1">GANJIL</option>
                            <option value="2">GENAP</option>
                        </select>
                        <select class="form-select" aria-label="Select Academic Year">
                            <option selected disabled>Pilih Tahun Ajaran</option>
                            <option value="1">2021/2022</option>
                            <option value="2">2022/2023</option>
                            <option value="3">2023/2024</option>
                            <option value="4">2024/2025</option>
                        </select>
                        <button class="btn btn-outline-secondary custom-btn">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Tabel unggah RPS-->
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Upload Dokumen RPS</th>
                                    <th>Mata Kuliah</th>
                                    <th>Kode Mata Kuliah</th>
                                    <th>Prodi</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="/dosen/linkRPS" onclick="passData(event, 1)" class="btn btn-sm btn-outline-primary btn-full-width">Upload RPS</a></td>
                                    <td><input type="text" class="form-control mata-kuliah" placeholder="Mata Kuliah"></td>
                                    <td><input type="text" class="form-control kode" placeholder="Kode Mata Kuliah"></td>
                                    <td>
                                        <select class="form-select prodi">
                                            <option selected disabled>Pilih Prodi</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Teknik Industri">Teknik Industri</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control kelas" placeholder="Kelas"></td>
                                    <td><i class="bi bi-trash3-fill trash-icon" onclick="hapusBaris(this)" style="cursor: pointer;"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="/dosen/linkRPS" onclick="passData(event, 1)" class="btn btn-sm btn-outline-primary btn-full-width">Upload RPS</a></td>
                                    <td><input type="text" class="form-control mata-kuliah" placeholder="Mata Kuliah"></td>
                                    <td><input type="text" class="form-control kode" placeholder="Kode Mata Kuliah"></td>
                                    <td>
                                        <select class="form-select prodi">
                                            <option selected disabled>Pilih Prodi</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Teknik Industri">Teknik Industri</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control kelas" placeholder="Kelas"></td>
                                    <td><i class="bi bi-trash3-fill trash-icon" onclick="hapusBaris(this)" style="cursor: pointer;"></i></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="/dosen/linkRPS" onclick="passData(event, 1)" class="btn btn-sm btn-outline-primary btn-full-width">Upload RPS</a></td>
                                    <td><input type="text" class="form-control mata-kuliah" placeholder="Mata Kuliah"></td>
                                    <td><input type="text" class="form-control kode" placeholder="Kode Mata Kuliah"></td>
                                    <td>
                                        <select class="form-select prodi">
                                            <option selected disabled>Pilih Prodi</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Teknik Industri">Teknik Industri</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control kelas" placeholder="Kelas"></td>
                                    <td><i class="bi bi-trash3-fill trash-icon" onclick="hapusBaris(this)" style="cursor: pointer;"></i></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="/dosen/linkRPS" onclick="passData(event, 1)" class="btn btn-sm btn-outline-primary btn-full-width">Upload RPS</a></td>
                                    <td><input type="text" class="form-control mata-kuliah" placeholder="Mata Kuliah"></td>
                                    <td><input type="text" class="form-control kode" placeholder="Kode Mata Kuliah"></td>
                                    <td>
                                        <select class="form-select prodi">
                                            <option selected disabled>Pilih Prodi</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Teknik Industri">Teknik Industri</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control kelas" placeholder="Kelas"></td>
                                    <td><i class="bi bi-trash3-fill trash-icon" onclick="hapusBaris(this)" style="cursor: pointer;"></i></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="/dosen/linkRPS" onclick="passData(event, 1)" class="btn btn-sm btn-outline-primary btn-full-width">Upload RPS</a></td>
                                    <td><input type="text" class="form-control mata-kuliah" placeholder="Mata Kuliah"></td>
                                    <td><input type="text" class="form-control kode" placeholder="Kode Mata Kuliah"></td>
                                    <td>
                                        <select class="form-select prodi">
                                            <option selected disabled>Pilih Prodi</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Teknik Industri">Teknik Industri</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control kelas" placeholder="Kelas"></td>
                                    <td><i class="bi bi-trash3-fill trash-icon" onclick="hapusBaris(this)" style="cursor: pointer;"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center my-3">
                            <button id="addRowButton" class="btn btn-primary">Tambah Baris</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Key untuk menyimpan data di localStorage
        const tableKey = "tableData";

        // Fungsi untuk menyimpan data tabel ke localStorage
        function saveTableData() {
            const tableRows = document.querySelectorAll("tbody tr");
            const tableData = Array.from(tableRows).map(row => {
                const mataKuliah = row.querySelector('.mata-kuliah')?.value || '';
                const kode = row.querySelector('.kode')?.value || '';
                const prodi = row.querySelector('.prodi')?.value || '';
                const kelas = row.querySelector('.kelas')?.value || '';

                return {
                    mataKuliah,
                    kode,
                    prodi,
                    kelas
                };
            });

            localStorage.setItem(tableKey, JSON.stringify(tableData));
        }

        // Fungsi untuk memuat data tabel dari localStorage
        function loadTableData() {
            const storedData = JSON.parse(localStorage.getItem(tableKey) || "[]");
            const tbody = document.querySelector("tbody");

            tbody.innerHTML = ""; // Kosongkan tabel sebelum memuat
            const maxRows = 10;
            const limitedData = storedData.slice(0, maxRows);


            limitedData.forEach((data, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td><a href="/dosen/linkRPS" onclick="passData(event, ${index + 1})" class="btn btn-sm btn-outline-primary btn-full-width">Upload RPS</a></td>
                    <td><input type="text" class="form-control mata-kuliah" value="${data.mataKuliah || ''}" placeholder="Mata Kuliah"></td>
                    <td><input type="text" class="form-control kode" value="${data.kode || ''}" placeholder="Kode Mata Kuliah"></td>
                    <td>
                        <select class="form-select prodi">
                            <option value="Teknik Informatika" ${data.prodi === "Teknik Informatika" ? "selected" : ""}>Teknik Informatika</option>
                            <option value="Teknik Elektro" ${data.prodi === "Teknik Elektro" ? "selected" : ""}>Teknik Elektro</option>
                            <option value="Teknik Perkapalan" ${data.prodi === "Teknik Perkapalan" ? "selected" : ""}>Teknik Perkapalan</option>
                            <option value="Kimia" ${data.prodi === "Kimia" ? "selected" : ""}>Kimia</option>
                            <option value="Teknik Industri" ${data.prodi === "Teknik Industri" ? "selected" : ""}>Teknik Industri</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control kelas" value="${data.kelas || ''}" placeholder="Kelas"></td>
                    <td><i class="bi bi-trash3-fill trash-icon" onclick="hapusBaris(this)" style="cursor: pointer;"></i></td>
                `;
                tbody.appendChild(row);
            });
        }

        // Fungsi untuk menambah baris baru di tabel
        function tambahBaris() {
            const tbody = document.querySelector("tbody");
            const rowCount = tbody.rows.length + 1;

            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${rowCount}</td>
                <td><a href="/dosen/linkRPS" onclick="passData(event, ${rowCount})" class="btn btn-sm btn-outline-primary btn-full-width">Upload RPS</a></td>
                <td><input type="text" class="form-control mata-kuliah" placeholder="Mata Kuliah"></td>
                <td><input type="text" class="form-control kode" placeholder="Kode Mata Kuliah"></td>
                <td>
                    <select class="form-select prodi">
                        <option value="" disabled selected>Pilih Prodi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                    </select>
                </td>
                <td><input type="text" class="form-control kelas" placeholder="Kelas"></td>
                <td><i class="bi bi-trash3-fill trash-icon" onclick="hapusBaris(this)" style="cursor: pointer;"></i></td>
            `;
            tbody.appendChild(newRow);

            saveTableData(); // Simpan data ke localStorage
        }

        // Fungsi untuk menghapus baris tertentu
        function hapusBaris(button) {
            const row = button.closest('tr');
            row.remove();
            updateRowNumbers();
            saveTableData();
        }

        function updateRowNumbers() {
            const tableRows = document.querySelectorAll("tbody tr");
            tableRows.forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1; // Perbarui nomor baris
            });
        }

        // Fungsi untuk memvalidasi data dan berpindah halaman
        function passData(event, rowNum) {
            event.preventDefault();

            // Simpan data ke localStorage sebelum berpindah halaman
            saveTableData();

            const row = document.querySelectorAll('tbody tr')[rowNum - 1];
            const mataKuliah = row.querySelector('.mata-kuliah').value.trim();
            const kode = row.querySelector('.kode').value.trim();
            const prodi = row.querySelector('.prodi').value.trim();
            const kelas = row.querySelector('.kelas').value.trim();

            if (!mataKuliah || !kode || prodi === "" || !kelas) {
                return alert("Semua data harus diisi!");
            }

            const queryString = `?mataKuliah=${encodeURIComponent(mataKuliah)}&kode=${encodeURIComponent(kode)}&prodi=${encodeURIComponent(prodi)}&kelas=${encodeURIComponent(kelas)}`;
            window.location.href = `/dosen/linkRPS${queryString}`;
        }

        // Event listener untuk tombol "Tambah Baris"
        document.addEventListener("DOMContentLoaded", function() {
            loadTableData(); // Muat data tabel saat halaman dimuat

            const addRowButton = document.getElementById("addRowButton");
            if (addRowButton) {
                addRowButton.addEventListener("click", tambahBaris);
            }
        });
    </script>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Fakultas Teknik. All rights reserved.</p>
    </footer>

    <script src="/js/dosen.js"></script>

    <!-- Scripts for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>