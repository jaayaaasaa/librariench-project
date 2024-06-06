<script>
    document.getElementById('show-more-popular-btn').addEventListener('click', function() {
    const hiddenProducts = document.querySelectorAll('.hidden-product');
    hiddenProducts.forEach(product => {
        product.classList.toggle('hidden');
    });

    // Optional: Change button text after showing more products
    if (this.innerText === 'Show More') {
        this.innerText = 'Show Less';
    } else {
        this.innerText = 'Show More';
    }
});

</script>

<script>
    document.getElementById('show-more-baru-rilis-btn').addEventListener('click', function() {
    const hiddenProducts = document.querySelectorAll('.hidden-product');
    hiddenProducts.forEach(product => {
        product.classList.toggle('hidden');
    });

    // Optional: Change button text after showing more products
    if (this.innerText === 'Show More') {
        this.innerText = 'Show Less';
    } else {
        this.innerText = 'Show More';
    }
});

</script>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
    
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>

