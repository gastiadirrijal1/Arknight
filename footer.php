<footer class="bg-theme-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Rhodes Island Fan Project. Task Completed.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="https://www.arknights.global/" class="text-decoration-none" style="color: #BBBBBB;">Official Arknights Global</a> |
                    <a href="#" class="text-decoration-none" style="color: #BBBBBB;">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <button type="button" class="btn btn-ri-primary" id="btnBackToTop" title="Kembali ke Atas">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        const btnDark = document.getElementById('btnDark');
        const btnLight = document.getElementById('btnLight');
        const body = document.body;

        btnDark.addEventListener('click', function() {
            body.classList.remove('light-mode');
            console.log("Mode: Dark");
        });

        btnLight.addEventListener('click', function() {
            body.classList.add('light-mode');
            console.log("Mode: Light");
        });

        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID', { hour12: false });
            const dateString = now.toLocaleDateString('id-ID', { weekday: 'short', day: 'numeric', month: 'short', year: 'numeric' });
            document.getElementById('clockDisplay').innerHTML = dateString + ' | ' + timeString;
        }
        setInterval(updateClock, 1000);
        updateClock(); 

        const myButton = document.getElementById("btnBackToTop");

        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                myButton.style.display = "block";
            } else {
                myButton.style.display = "none";
            }
        };

        myButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>
</html>