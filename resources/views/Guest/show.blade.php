@extends('layouts.app');
@section('cdns')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
        integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
        crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection

@section('content')
    <div id="app">
        {{-- @dd(products) --}}
        {{-- <div v-for="product in products.products">
            {{ product . name }}
        </div> --}}
        <div>@{{ products. }}</div>
    </div>

@endsection

@section('script-end')
    <script>
        Vue.config.devtools = true;

        console.log('vue', Vue)
        const app = new Vue({
            el: '#app',
            data: {
                products: {},
            },
            methods: {
                getProducts(id) {
                    axios.get(`http://127.0.0.1:8000/api/users/${id}`).then((res) => {
                        this.products = res.data
                        console.log(res.data);
                    })
                }
            },
            created() {
                this.getProducts(2);
            },

        })
    </script>
@endsection