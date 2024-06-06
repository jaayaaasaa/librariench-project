document.getElementById("show-more-btn").addEventListener("click", function () {
    const hiddenProducts = document.querySelectorAll(".hidden-product");
    hiddenProducts.forEach((product) => {
        product.classList.toggle("hidden");
    });

    // Optional: Change button text after showing more products
    if (this.innerText === "Show More") {
        this.innerText = "Show Less";
    } else {
        this.innerText = "Show More";
    }
});
