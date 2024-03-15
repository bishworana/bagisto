<x-admin::layouts>
    <!-- Title of the page -->
    <x-slot:title>
        @lang('admin::app.sales.orders.create.title')
    </x-slot>

    <!-- Page Header -->
    <div class="flex gap-4 justify-between items-center max-sm:flex-wrap">
        <div class="grid gap-1.5">
            <p class="text-xl text-gray-800 dark:text-white font-bold leading-6">
                @lang('admin::app.sales.orders.create.title')
            </p>
        </div>

        <!-- Back Button -->
        <a
            href="{{ route('admin.sales.orders.index') }}"
            class="transparent-button hover:bg-gray-200 dark:hover:bg-gray-800 dark:text-white"
        >
            @lang('admin::app.sales.orders.create.back-btn')
        </a>
    </div>

    <!-- Vue JS Component -->
    <v-create-order></v-create-order>

    @pushOnce('scripts')
        <script type="text/x-template" id="v-create-order-template">
            <div class="flex gap-2.5 mt-3.5 max-xl:flex-wrap">
                <!-- Left Component -->
                {!! view_render_event('bagisto.admin.sales.order.create.left_component.before') !!}
                <div class="flex flex-col gap-2 flex-1 max-xl:flex-auto">

                    @include('admin::sales.orders.create.items')

                    <!-- Included Addresses Blade File -->
                    <template v-if="['address', 'shipping', 'payment', 'review'].includes(currentStep)">
                        @include('admin::sales.orders.create.address')
                    </template>

                    <!-- Included Shipping Methods Blade File -->
                    <template v-if="cart.have_stockable_items && ['shipping', 'payment', 'review'].includes(currentStep)">
                        @include('admin::sales.orders.create.shipping')
                    </template>

                    <!-- Included Payment Methods Blade File -->
                    <template v-if="['payment', 'review'].includes(currentStep)">
                        @include('admin::sales.orders.create.payment')
                    </template>

                </div>

                {!! view_render_event('bagisto.admin.sales.order.create.left_component.after') !!}

                <!-- Right Component -->
                {!! view_render_event('bagisto.admin.sales.order.right_component.before') !!}

                <div class="flex flex-col gap-2 w-[360px] max-w-full max-sm:w-full">
                </div>
                    
                {!! view_render_event('bagisto.admin.sales.order.create.right_component.after') !!}
            </div>
        </script>

        <script type="module">
            app.component('v-create-order', {
                template: '#v-create-order-template',

                data() {
                    return {
                        cart: @json($cart),

                        isPlacingOrder: false,

                        currentStep: 'address',

                        shippingMethods: null,

                        paymentMethods: null,

                        canPlaceOrder: false,
                    };
                },

                methods: {
                    getCart() {
                        axios.get("{{ route('admin.sales.cart.index', $cart->id) }}")
                            .then(response => {
                                this.cart = response.data.data;
                            })
                            .catch(error => {});
                    },

                    stepForward(step) {
                        this.currentStep = step;

                        if (step == 'review') {
                            this.canPlaceOrder = true;

                            return;
                        }

                        this.canPlaceOrder = false;

                        if (this.currentStep == 'shipping') {
                            this.shippingMethods = null;
                        } else if (this.currentStep == 'payment') {
                            this.paymentMethods = null;
                        }
                    },

                    stepProcessed(data) {
                        if (this.currentStep == 'shipping') {
                            this.shippingMethods = data;
                        } else if (this.currentStep == 'payment') {
                            this.paymentMethods = data;
                        }

                        this.getCart();
                    },

                    placeOrder() {
                        this.isPlacingOrder = true;

                        this.$axios.post('{{ route('shop.checkout.onepage.orders.store') }}')
                            .then(response => {
                                if (response.data.data.redirect) {
                                    window.location.href = response.data.data.redirect_url;
                                } else {
                                    window.location.href = '{{ route('shop.checkout.onepage.success') }}';
                                }

                                this.isPlacingOrder = false;
                            })
                            .catch(error => {
                                this.isPlacingOrder = false

                                this.$emitter.emit('add-flash', { type: 'error', message: error.response.data.message });
                            });
                    }
                }
            });
        </script>
    @endPushOnce
</x-admin::layouts>