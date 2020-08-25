<header class="masthead" style="background-image: url('{{ asset('img/gradient.jpg') }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    @if (Route::currentRouteName() == 'cart')
                        <h2>Cart</h2>
                        <span class="subheading">Thank you for believing in Yummy Pizza</span>
                    @elseif (Route::currentRouteName() == 'login')
                        <h2>Log in to Yummy Pizza</h2>
                        <span class="subheading">Please login for the best user experience</span>
                    @elseif (Route::currentRouteName() == 'register')
                        <h2>Register at Yummy Pizza</h2>
                        <span class="subheading">Making an account provides useful features</span>
                    @elseif (Route::currentRouteName() == 'about')
                        <h2>Abous us</h2>
                        <span class="subheading">Learn why making the most delicious pizza is our passion</span>
                    @elseif (Route::currentRouteName() == 'checkout')
                        <h2>Checkout</h2>
                        <span class="subheading">Please fill out the necessary data below</span>
                    @else
                        <h2>Your Orders</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>