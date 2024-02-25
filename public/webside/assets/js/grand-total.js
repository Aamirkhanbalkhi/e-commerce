

function calculateGrandTotal()
{
        let grandTotal = 0;

        // Loop through each product row
        document.querySelectorAll('.product-row').forEach(function(row){
            let quantity = parseInt(row.querySelectorAll('.cart-input').value);
            // console.log(quantity);
            let price = parseFloat(row.querySelector('.amount').textContent);

            // Calculate subtotal for current row
            let subtotal = quantity * price;

            // Add subtotal to GrandTotal
            grandTotal += subtotal;
    });

        // Update Grand Total in DOM
        document.getElementById('total-amount').textContent = grandTotal.toFixed(2);


    // Call calculateGrandTotal function initially and whenever quantity changes
    calculateGrandTotal();
    document.querySelectorAll('.cart-input').forEach(function(input){
        input.addEventListener('change', calculateGrandTotal);
});

    }

