<script>
    document.getElementById("nextButton").addEventListener("click", function(event) {
        event.preventDefault(); // Mencegah perilaku default dari link
        
        // Menambahkan animasi zoom out
        document.querySelector('.container').style.animation = "zoomOut 0.5s ease";
        document.querySelector('.container').style.animationFillMode = "forwards";

        // Menunggu animasi selesai sebelum navigasi
        setTimeout(function() {
            window.location.href = event.target.href; // Navigasi ke link "Next"
        }, 500); // Sesuaikan dengan durasi animasi zoom out (dalam milidetik)
    });
</script>
