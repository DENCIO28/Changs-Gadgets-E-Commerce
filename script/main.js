

var minus_B = document.querySelector("#product_qty_selection .btn-subtract")
var add_B = document.querySelector("#product_qty_selection .btn-add");
var quantity_B = document.querySelector("#product_qty_selection .form-control-input");

// includes button minus disablement if at minimum or below
const minimum = 0;

minus_B.addEventListener("click", function(){
    if (quantity_B.value <= minimum) {
      minus_B.disabled = true;
      return; // return to avoid decrementing
    } else {
      minus_B.disabled = false;
    }
    quantity_B.value--;
});

add_B.addEventListener("click", function() {
    if (quantity_B.value > minimum) {
      minus_B.disabled = false;
    }
    quantity_B.value++;
});


