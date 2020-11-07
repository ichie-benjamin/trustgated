@extends('layouts.master')

@section('content')

    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('employer.profile') }}">My Account</a></li>
                        <li class="active">Transaction Details</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')

                <div class="col-md-9">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Successful!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="top-emp-center">
                        <h4>{{ $info }}</h4>
                    </div> <!--top-emp-center-->

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div style="padding: 50px">
                                <h3 class="">Plan Name : {{ $type === 'access' ? $item->access->name : $item->product->name }}</h3>
                                <h3>Plan Price : {{ $type === 'access' ? $item->access->price : $item->product->price }}</h3>
                                <h3>Expires at : {{ $item->expired_at->format('d-M-Y') }}</h3>

                                <button onclick="pay()" class="btn btn-success">Stripe Payment</button>

                                <form action="{{ route('payment') }}" method="POST" >
                                    @csrf
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="{{ env('RAZOR_KEY') }}"
                                            data-amount="1000"
                                            data-buttontext="RAZOR PAY"
                                            data-name="{{ $info }}"
                                            data-description="{{ $info }}"
                                            data-image="{{ asset('/images/razorpay.png') }}"
                                            data-prefill.name="name"
                                            data-prefill.email="email"
                                            data-theme.color="#ff7529">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>



                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
@endsection
@section('js')

    <script src="https://checkout.stripe.com/checkout.js"></script>
{{--    <script src="https://js.stripe.com/v3"></script>--}}

    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });



        function pay(amount) {
            var handler = StripeCheckout.configure({
                key: '{{ env('STRIPE_KEY') }}',
                locale: 'auto',
                token: function (token) {
                    // You can access the token ID with `token.id`.
                    // Get the token ID to your server-side code for use.
                    $('#token_response').html(JSON.stringify(token));

                    $.ajax({
                        url: '{{ route("payment.store") }}',
                        method: 'post',
                        data: { tokenId: token.id, amount: amount, model_id : 1},
                        success: (response) => {

                            window.location.href = '{{ request()->url() }}?success'
                            // console.log(response)


                        },
                        error: (error) => {
                            // console.log(error);
                            alert('Oops! Something went wrong')
                        }
                    })
                }
            });

            handler.open({
                name: '{{ $info }}',
                email: '{{ auth()->user()->email }}',
                description: '{{ $info }}',
                amount: "{{ $type === 'access' ? $item->access->price : $item->product->price }}" * 100
            });
        }
    </script>

@endsection
