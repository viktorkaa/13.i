<script setup>

</script>
<template>
    <aside>
        <h2>Cart</h2>
        <div class="cartProduct">
            <h3>Lorem ipsum</h3>
            <div class="d-flex">
                <p>$ 20</p>
                <p>Quantity: 1</p>
            </div>
        </div>
        <div class="cartProduct">
            <h3>Lorem ipsum</h3>
            <div class="d-flex">
                <p>$ 20</p>
                <p>Quantity: 1</p>
            </div>
        </div>
        <div class="cartProduct">
            <h3>Lorem ipsum</h3>
            <div class="d-flex">
                <p>$ 20</p>
                <p>Quantity: 1</p>
            </div>
        </div>
        <div class="total text-end">Total quantity: 10</div>
        <div class="mb-3">
            <button type="button" class="btn">Checkout ($ 220)</button>
        </div>
    </aside>
</template>

<style scoped>
h3 {
    font-size: 16px;
    font-weight: 600;
    padding-bottom: 10px;
}

.cartProduct .d-flex {
    justify-content: space-between;
}
.cartProduct{
    border-bottom: 1px solid #aaa;
}
.total, .cartProduct{
    padding-top: 15px;
}
.d-flex p:first-of-type{
    color: #3AB982;
    font-weight: 700;
}
.btn{
    background-color:#3AB982 ;
    color: white;
    margin-top: 15px;
    width: 100%;

}

</style>