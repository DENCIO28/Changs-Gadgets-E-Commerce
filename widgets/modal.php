<!-- Cart Modal -->

<style>
    *{
        font-family: 'Poppins','Sans-Serif';
    }

    .modal {
        display: none;
        /* Initially hide the modal */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<div id="cart-modal" class="modal">
    <div class="modal-content" style="background:#fefefe">
        <span class="close" onclick="toggleCart()">&times;</span>
        <h2 class="w3-text-theme" style="color:#6805f2; font-weight:600">Shopping Cart</h2>
        <div id="cart-items" class="left-side">
        </div>
        <div id="checked-out-items" class="right-side" style="font-size:1rem; color:red;">
        </div>
        <div id="cart-total"
            style="margin-top: 2rem;margin-bottom: 2rem; font-size: 1.5em; font-weight: bold; color:brown;"></div>
        <button class="w3-hover-theme w3-padding" onclick="checkout()"
            style="background-color:#F2CF05;border:none;border-radius:8px; color: #6805f2">Checkout</button>
        <button class="w3-hover-theme w3-padding mt-3" onclick="cancelOrder()"
            style="background-color:#E22222;border:none; border-radius:8px; color: #fefefe">Cancel Order</button>
    </div>
</div>