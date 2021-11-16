{{-- Added general layout --}}
@extends('layouts.app')
{{-- Added cdn of 'vue' and 'axios' --}}
@section('cdns')
<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
  integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
  crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with all restaurant --}}
@section('content')
<div id="app">
 
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/images/img1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/img2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/img3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/img4.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/img5.jpg" alt="Third slide">
        </div>
      </div>
    </div>


    <section class="container h-100">
      <nav class="navbar">
        <form class="form-inline mb-4">
          <input v-model='search_bar' @keyup.enter="getRestaurants()" class="form-control mr-sm-2" type="search"
            placeholder="Search" aria-label="Search">
          <button class="btn btn my-2  my-sm-0 search-buttom" type="submit">Search</button>
        </form>
      </nav>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Burger</li>
        <li data-filter=".pizza">Pizza</li>
        <li data-filter=".pasta">Pasta</li>
        <li data-filter=".fries">Fries</li>
      </ul>


    <div class="row h-100">
      <div v-for="restaurant in restaurants" class="col-sm-4">
        <h1>@{{ restaurant . activity_name }}</h1>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="/images/fresh.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">@{{ restaurant . activity_name }}</h5>
            <p class="card-text">@{{ restaurant . description }}</p>
            <h1>id @{{ restaurant . id }}</h1>
            <a :href="'/user/'+restaurant.id" class="btn btn-warning">Dettagli</a>
          </div>
        </div>

      </div>
    </div>
</div>
</section>
@endsection
{{-- Added the script section for the Vue logic --}}
@section('script-end')
<script>
  Vue.config.devtools = true;
    // Initialized a new instance of 'vue'
    const app = new Vue({
      el: '#app',
      data: {
        restaurants: [],
        search_bar: '',
      },
      methods: {
        // Function that returns all restaurants
        getRestaurants() {
          axios.get('http://127.0.0.1:8000/api/users').then((res) => {
            this.restaurants = res.data
          })
        }
      },
      created() {
        this.getRestaurants();
      },
    })


    
</script>
@endsection