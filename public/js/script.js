document.addEventListener('DOMContentLoaded', function() {

    // 1. EFEK RIPPLE PADA TOMBOL
    // Cari semua tombol yang punya class btn-dark
    const buttons = document.querySelectorAll('.btn-dark');

    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Hitung posisi akurat titik klik mouse
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;

            // Buat elemen span baru untuk gelombangnya
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');

            // Letakkan gelombang tepat di titik klik
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;

            // Masukkan span ke dalam tombol
            this.appendChild(ripple);

            // Hapus elemen gelombang setelah 600 milidetik (saat animasi selesai)
            // agar memori browser tidak penuh
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // 2. EFEK LOADING SAAT FORM SUBMIT
    // Cari semua form di halaman
    // 2. EFEK LOADING SAAT FORM SUBMIT
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitBtn = this.querySelector('button[type="submit"]');

            if (submitBtn) {
                // Simpan teks asli tombolnya (misal: "Search rooms")
                const originalText = submitBtn.innerHTML;

                // Ubah jadi processing
                submitBtn.innerHTML = 'Processing...';
                submitBtn.style.opacity = '0.7';
                submitBtn.style.cursor = 'wait';

                // JURUS RESET: Kembalikan ke kondisi semula setelah 2 detik
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.opacity = '1';
                    submitBtn.style.cursor = 'pointer'; // Balikkan logo mouse jadi tangan lagi
                }, 2000);
            }
        });
    });
// 3. EFEK LOADING UNTUK TOMBOL LINK (Seperti Reserve Now)
    // Cari semua tag <a> yang punya class btn-dark
    const linkButtons = document.querySelectorAll('a.btn-dark');

    linkButtons.forEach(link => {
        link.addEventListener('click', function() {
            // Ubah teks saat diklik agar terasa merespon
            this.innerHTML = 'Please wait...';
            this.style.opacity = '0.7';
            this.style.cursor = 'wait';
        });
    });
});
