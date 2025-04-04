document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        let productName = this.parentElement.querySelector('h2').innerText;
        let productPrice = parseFloat(this.parentElement.querySelector('.price').innerText.replace('₹', ''));
        let productId = this.dataset.productId; // Assuming you have product IDs set in your HTML
        
        // Send the order data to the server
        addToCart(productName, productPrice, productId);
    });
});

function addToCart(name, price, id) {
    // AJAX request to send order data to server
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'process_order.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            // Handle response if needed
        }
    };
    xhr.send('name=' + encodeURIComponent(name) + '&price=' + encodeURIComponent(price) + '&id=' + encodeURIComponent(id));
}
