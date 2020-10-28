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

                        @if (session('failure'))
                            <div class="alert alert-danger" role="alert">
                                <strong>Error!</strong> {{ session('failure') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="top-emp-center">
                        <h4>Transaction Details</h4>
                    </div> <!--top-emp-center-->
                    <div
                        style="color:#009900; padding:5px; font-family:'Times New Roman', Times, serif; font-style:italic;"></div>
                    <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #BACDDC; width:100%;"
                           align="center" bgcolor="#F1F9FE">
                        <tr>
                            <td valign="middle" colspan="7" height="35" style="background-color:#95B3D7;">&nbsp; &nbsp;
                                <font color="#FFFFFF" size="3"><b>Resume Access </b></font></td>
                        </tr>
                        <tr bgcolor="#e0eef7">
                            <td valign="middle" align="center" width="100" height="35"><b>S.No</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center"><b>Transaction Details</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center" width="350"><b>Product</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center" width="150"><b>Status</b></td>
                        </tr>

                        <!--	<tr> <td> <br /> </td> </tr>	-->


                        @foreach ($access as $item)
                        <tr class="table-bordered">
                            <td valign="middle" height="50" align="center">1</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="left" style="padding-left:20px;">
                                <b>Purchase Date</b><br>
                                {{ $item->created_at->format('d-m-Y') }}<br/>
                                <b>Expiry Date</b>
                                <br>
                                {{ $item->expired_at->format('d-m-Y') }} <br/>

                            </td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center">{{ $item->access->name }}</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center">
                                @if ($item->paid)
                                    <span style='color:green;'>Paid</span>
                                @else
                                    <span style='color:red;'>Unpaid</span> <br/>
                                    <a href="{{ route('employer.transaction.payment',['access',$item->id]) }}" class="btn btn-success">Pay Now</a>
                                @endif
                            </td>
                            <!-- </tr>   <tr> <td> <br /> </td> </tr>-->
                        </tr>
                        @endforeach
                    </table>
                    <br/>

                    <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #BACDDC; width:100%;"
                           align="center" bgcolor="#F1F9FE">
                        <tr>
                            <td valign="middle" colspan="7" height="35" style="background-color:#95B3D7;">&nbsp; &nbsp;
                                <font color="#FFFFFF" size="3"><b>Job Posting</b></font></td>
                        </tr>

                        <tr bgcolor="#E0EEF7">
                            <td valign="middle" align="center" width="100" height="35"><b>S.No</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center"><b>Transaction Details</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center" width="350"><b>Product</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center" width="150"><b>Status</b></td>
                        </tr>

                        @php
                        $i = 1;
                        @endphp
                        @foreach ($products as $item)
                            <tr class="table-bordered">
                                <td valign="middle" height="50" align="center">{{ $i++ }}</td>
                                <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                                <td valign="middle" align="left" style="padding-left:20px;">
                                    <b>Purchase Date</b><br>
                                    {{ $item->created_at->format('d-m-Y') }}<br/>
                                    <b>Expiry Date</b>
                                    <br>
                                    {{ $item->expired_at->format('d-m-Y') }} <br/>
{{--                                    <b>Invoice No:</b> 65--}}
                                </td>
                                <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                                <td valign="middle" align="center"> {{ optional($item->product)->name }}</td>
                                <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                                <td valign="middle" align="center">
                                    @if ($item->paid)
                                        <span style='color:green;'>Paid</span>
                                        @else
                                        <span style='color:red;'>Unpaid</span> <br/>

                                        <a href="{{ route('employer.transaction.payment',['product',$item->id]) }}" class="btn btn-success">Pay Now</a>

                                    @endif
                                </td>
                            </tr>
                        @endforeach


                    </table>
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
                name: 'Plan Payment',
                email: '{{ auth()->user()->email }}',
                description: 'Plan Payment',
                amount: amount * 100
            });
        }
    </script>

@endsection
