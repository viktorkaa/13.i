<script setup>
  import Cart from './components/Cart.vue';
  import Products from './components/Products.vue';
</script>

<template>
  <header>
    <h1 class="text-center">Cart App</h1>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <Cart />
        </div>
        <div class="col-lg-9">
          <Products />
        </div>
      </div>
    </div>
  </main>
  <footer>
    <p class="text-end fw-bold"># of product 11</p>
  </footer>
</template>

<style scoped>

</style>
