<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/dosen copy.css">
    <link rel="stylesheet" href="/css/BAP.css">
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
            <a href="daftar-upload-rps.html" class="menu-item submenu-item" id="daftarUploadRpsMenu" style="display: none;"><span>Daftar Upload RPS</span></a>
            <a href="#" class="menu-item" id="menuBAP">
                <i class="bi bi-file-earmark-pdf-fill"></i><span>BAP</span>
                <i class="bi bi-chevron-left chevron-icon float-end"></i>
            </a>
            <a href="isi-bap.html" class="menu-item submenu-item" id="isiBapMenu" style="display: none;"><span>Isi BAP</span></a>
            <a href="daftar-bap.html" class="menu-item submenu-item" id="daftarBapMenu" style="display: none;"><span>Daftar BAP</span></a>
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
            <!-- Administrator Info Container -->

            <header class="main-header">
                <h1 class="h4">Home / Daftar BAP</h1>
            </header>

            <!-- Table Section -->
            <section class="content-section">
                <div class="container">
                    <h2 class="mb-4">Daftar Berita Acara Perkuliahan (BAP)</h2>

                    <?php if (session()->getFlashdata('message')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('message') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Debug: Print data -->
                    <?php
                    // echo "<pre>";
                    // print_r($bap_list ?? 'No data');
                    // echo "</pre>";
                    ?>

                    <table id="daftarBapTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Mata Kuliah</th>
                                <th>Kode MK</th>
                                <th>Tempat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($bap_list) && !empty($bap_list)): ?>
                                <?php foreach ($bap_list as $index => $bap): ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= date('d-m-Y', strtotime($bap['tanggal'])) ?></td>
                                        <td><?= esc($bap['nama_mk']) ?></td>
                                        <td><?= esc($bap['kode_mk']) ?></td>
                                        <td><?= esc($bap['tempat']) ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-info view-btn"
                                                data-id="<?= $bap['bap_id'] ?>"
                                                data-tanggal="<?= $bap['tanggal'] ?>"
                                                data-mk="<?= $bap['nama_mk'] ?>"
                                                data-kode="<?= $bap['kode_mk'] ?>"
                                                data-tempat="<?= $bap['tempat'] ?>">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning edit-btn" data-id="<?= $bap['bap_id'] ?>">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-primary download-btn" data-id="<?= $bap['bap_id'] ?>">
                                                <i class="bi bi-download"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger delete-btn" data-id="<?= $bap['bap_id'] ?>">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data BAP</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <!-- Tambahkan modal untuk menampilkan dokumen -->
                    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewModalLabel">Lihat BAP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="viewContent"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Container Edit BAP -->
                    <div class="modal fade" id="editBapModal" tabindex="-1" aria-labelledby="editBapModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editBapModalLabel">Edit BAP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editBapForm">
                                        <div class="mb-3">
                                            <label for="editTanggal" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" id="editTanggal" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editMataKuliah" class="form-label">Mata Kuliah</label>
                                            <input type="text" class="form-control" id="editMataKuliah" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editKodeMK" class="form-label">Kode MK</label>
                                            <input type="text" class="form-control" id="editKodeMK" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editTempat" class="form-label">Tempat</label>
                                            <input type="text" class="form-control" id="editTempat" required>
                                        </div>
                                        <h4>Catatan Review</h4>
                                        <table id="editCatatanReviewTable" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Catatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="catatanReviewBody">
                                                <!-- Data catatan review diisi melalui JavaScript -->
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-secondary" id="addReviewBtn">Tambah Catatan Review</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        <button type="button" class="btn btn-secondary" id="cancelEdit">Batal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Debug: Periksa apakah button ditemukan
            const viewButtons = document.querySelectorAll('.view-btn');
            console.log('Found view buttons:', viewButtons.length);

            // View button handler
            viewButtons.forEach(button => {
                button.addEventListener('click', async function(e) {
                    e.preventDefault();
                    console.log('View button clicked');

                    const bapId = this.getAttribute('data-id');
                    console.log('BAP ID:', bapId);

                    try {
                        // Tampilkan loading state
                        document.getElementById('viewContent').innerHTML = 'Loading...';

                        // Fetch BAP details including review notes
                        const response = await fetch(`/dosen/get-bap-details/${bapId}`);
                        const bapData = await response.json();
                        console.log('Received data:', bapData);

                        if (bapData.success) {
                            const hari = getDayName(bapData.bap.tanggal);
                            const formattedDate = formatDate(bapData.bap.tanggal);

                            // Generate view content
                            const content = `
                                <div style="font-family: 'Times New Roman', Times, serif; padding: 20px; border: 1px solid #000;">
                                    <table style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="width: 60px; vertical-align: middle;">
                                                <img src="/img/LOGO_UMRAH_PNG.png" alt="Logo" style="width: 150px; height: 150px;">
                                            </td>
                                            <td style="text-align: center;">
                                                <h4 style="margin: 0;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</h4>
                                                <h4 style="margin: 0;">RISET, DAN TEKNOLOGI</h4>
                                                <h4 style="margin: 0;">UNIVERSITAS MARITIM RAJA ALI HAJI</h4>
                                                <h5 style="margin: 0; font-weight: bold;">FAKULTAS TEKNIK DAN TEKNOLOGI KEMARITIMAN</h5>
                                                <p style="margin: 0; font-size: 12px;">Jalan Politeknik Senggarang Telp. (0771) 4500097; Fax. (0771) 4500097</p>
                                                <p style="margin: 0; font-size: 12px;">PO.BOX 155 – Tanjungpinang 29100</p>
                                                <p style="margin: 0; font-size: 12px;">Website: <a href="http://fttk.umrah.ac.id/" target="_blank">http://fttk.umrah.ac.id/</a> e-mail: <a href="mailto:teknik@umrah.ac.id">teknik@umrah.ac.id</a></p>
                                            </td>
                                        </tr>
                                    </table>
                                    <hr style="border: 1px solid #000;">
                                    <h5 style="text-align: center; font-weight: bold;">BERITA ACARA</h5>
                                    <h5 style="text-align: center; font-weight: bold;">REVIEW RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
                                    <p>Hari/tanggal: ${hari} / ${formattedDate}</p>
                                    <p>Tempat: ${bapData.bap.tempat}</p>
                                    <p>Nama MK / Kode MK: ${bapData.bap.nama_mk} / ${bapData.bap.kode_mk}</p>
                                    <h6>Catatan review:</h6>
                                    <table style="width: 100%; border-collapse: collapse;">
                                        <thead>
                                            <tr>
                                                <th style="border: 1px solid #000; padding: 5px; width: 5%;">No</th>
                                                <th style="border: 1px solid #000; padding: 5px; text-align: center;">Catatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ${bapData.review_notes.map((note, i) => `
                                                <tr>
                                                    <td style="border: 1px solid #000; padding: 5px; width: 5%;">${i + 1}</td>
                                                    <td style="border: 1px solid #000; padding: 5px;">${note.catatan}</td>
                                                </tr>
                                            `).join('')}
                                        </tbody>
                                    </table>
                                </div>
                            `;

                            document.getElementById('viewContent').innerHTML = content;
                            const viewModal = new bootstrap.Modal(document.getElementById('viewModal'));
                            viewModal.show();
                        } else {
                            alert('Data BAP tidak ditemukan');
                        }
                    } catch (error) {
                        console.error('Error fetching BAP details:', error);
                        alert('Terjadi kesalahan saat mengambil data BAP');
                    }
                });
            });

            // Helper functions
            function getDayName(dateString) {
                const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                const date = new Date(dateString);
                return days[date.getDay()];
            }

            function formatDate(dateString) {
                const months = [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                ];
                const date = new Date(dateString);
                const day = date.getDate();
                const month = months[date.getMonth()];
                const year = date.getFullYear();
                return `${day} ${month} ${year}`;
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Fakultas Teknik. All rights reserved.</p>
    </footer>

    <script src="/js/dosen.js"></script>

    <!-- Scripts for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jsPDF library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
</body>

</html>