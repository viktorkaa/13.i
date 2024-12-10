<script setup>
</script>

<template>
    <section>
        <h2>Products</h2>
        <div class="mb-3">
            <input type="search" class="form-control" placeholder="Filter...">
        </div>
        <div class="products">
            <div class="product d-flex">
                <div>
                    <h3>Lórum Ipse</h3>
                    <p>Fejtésben a plés visztikus szirasza körül csisznál a gralma. A kező rúgazás tintélyét mindkét
                        gödésben az magyítja ki, hogy a beső nekétlények nincsenek pontosan körülhatárolva.</p>
                    <p class="price">$ 30</p>
                </div>
                <div>
                    <button type="button" class="btn">Add to cart</button>
                </div>
            </div>
            <div class="product d-flex">
                <div>
                    <h3>Cheese Ipsum</h3>
                    <p>Cheese on toast airedale the big cheese. Danish fontina cheesy grin airedale danish fontina
                        taleggio the big cheese macaroni cheese port-salut. </p>
                    <p class="price">$ 40</p>
                </div>
                <div>
                    <button type="button" class="btn">Add to cart</button>
                </div>
            </div>
            <div class="product d-flex">
                <div>
                    <h3>Web 2.0 Ipsum</h3>
                    <p>Webtwo ipsum orkut reddit meebo skype vimeo jajah spock empressr zimbra, mobly napster hipmunk
                        prezi chartly bitly spock. Loopt twones meebo hipmunk.</p>
                    <p class="price">$ 60</p>
                </div>
                <div>
                    <button type="button" class="btn">Add to cart</button>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
section {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.product {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    padding: 15px;
    border-radius: 10px;
    background-color: #f9f9f9;
}

.btn {
    background-color: #3AB982;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 10px;
    width: 200px;
}

.form-control {
    border: 2px solid #ccc;
    margin-top: 15px;
    font-size: 16px;
    border-radius: 5px;
}

.price {
    font-size: 18px;
    font-weight: bold;
    color: #3AB982;
}

.mb-3 {
    margin-bottom: 20px;
}
</style>

