@extends('index')
@section('title','Checkout')
@section('slider')
@endsection
@section('products')
@endsection
@section('about')
@endsection
@section('contact')
@endsection
@section('navbar')
@endsection
@section('brand')
@endsection
@parent

 <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Checkout</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="{{url('index')}}">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->


<!-- Start Billing Details Form -->
            <div class="container">
                <form action="#" class="billing-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h3 class="billing-title mt-20 mb-10">Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="First name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'First name*'" required class="common-input">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Last name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Last name*'" required class="common-input">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Company Name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Company Name'" required class="common-input">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Phone number*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone number*'" required class="common-input">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email Address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address*'" required class="common-input">
                                </div>
                                <div class="col-lg-12">
                                    <div class="sorting">
                                        <select>
                                            <option value="1">Country*</option>
                                            <option value="1">Default sorting</option>
                                            <option value="1">Default sorting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Address line 01*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Address line 01*'" required class="common-input">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Address line 02*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Address line 02*'" required class="common-input">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Town/City*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Town/City*'" required class="common-input">
                                </div>
                                <div class="col-lg-12">
                                    <div class="sorting">
                                        <select>
                                            <option value="1">District*</option>
                                            <option value="1">Default sorting</option>
                                            <option value="1">Default sorting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Postcode/ZIP" onfocus="this.placeholder=''" onblur="this.placeholder = 'Postcode/ZIP'" class="common-input">
                                </div>
                            </div>
                            <div class="mt-20">
                                <input type="checkbox" class="pixel-checkbox" id="login-3">
                                <label for="login-3">Create an account?</label>
                            </div>
                            <h3 class="billing-title mt-20 mb-10">Billing Details</h3>
                            <div class="mt-20">
                                <input type="checkbox" class="pixel-checkbox" id="login-6">
                                <label for="login-6">Ship to a different address?</label>
                            </div>
                            <textarea placeholder="Order Notes" onfocus="this.placeholder=''" onblur="this.placeholder = 'Order Notes'" required class="common-textarea"></textarea>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="order-wrapper mt-50">
                                <h3 class="billing-title mb-10">Your Order</h3>
                                <div class="order-list">
                                    <div class="list-row d-flex justify-content-between">
                                        <div>Product</div>
                                        <div>Total</div>
                                    </div>
                                    <div class="list-row d-flex justify-content-between">
                                        <div>Pixelstore fresh Blackberry</div>
                                        <div>x 02</div>
                                        <div>$720.00</div>
                                    </div>
                                    <div class="list-row d-flex justify-content-between">
                                        <div>Pixelstore fresh Blackberry</div>
                                        <div>x 02</div>
                                        <div>$720.00</div>
                                    </div>
                                    <div class="list-row d-flex justify-content-between">
                                        <div>Pixelstore fresh Blackberry</div>
                                        <div>x 02</div>
                                        <div>$720.00</div>
                                    </div>
                                    <div class="list-row d-flex justify-content-between">
                                        <h6>Subtotal</h6>
                                        <div>$2160.00</div>
                                    </div>
                                    <div class="list-row d-flex justify-content-between">
                                        <h6>Shipping</h6>
                                        <div>Flat rate: $50.00</div>
                                    </div>
                                    <div class="list-row d-flex justify-content-between">
                                        <h6>Total</h6>
                                        <div class="total">$2210.00</div>
                                    </div>
                                    <div class="d-flex align-items-center mt-10">
                                        <input class="pixel-radio" type="radio" id="check" name="brand">
                                        <label for="check" class="bold-lable">Check payments</label>
                                    </div>
                                    <p class="payment-info">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <input class="pixel-radio" type="radio" id="paypal" name="brand">
                                            <label for="paypal" class="bold-lable">Paypal</label>
                                        </div>
                                        <img src="img/organic-food/pm.jpg" alt="" class="img-fluid">
                                    </div>
                                    <p class="payment-info">Pay via PayPal; you can pay with your credit card if you don???t have a PayPal account.</p>
                                    <div class="mt-20 d-flex align-items-start">
                                        <input type="checkbox" class="pixel-checkbox" id="login-4">
                                        <label for="login-4">I???ve read and accept the <a href="#" class="terms-link">terms & conditions*</a></label>
                                    </div>
                                    <button class="primary-btn text-uppercase banner-area relative"><a href="{{url('confirmation')}}">Proceed to checkout</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Billing Details Form -->