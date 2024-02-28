<div class="hidden fixed top-0 left-0 w-full h-full bg-black z-50 flex justify-center items-center" id="loadingContainer">
    <div class="border-8 border-gray-200 border-t-blue-500 rounded-full animate-spin h-24 w-24"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("loadingContainer").classList.remove("hidden");
    });

    // Sembunyikan loading component saat seluruh halaman dan konten telah dimuat
    window.addEventListener("load", function() {
        document.getElementById("loadingContainer").classList.add("hidden");
    });
</script>