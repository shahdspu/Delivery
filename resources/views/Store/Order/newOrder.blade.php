<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />

    @include('layouts.Store.Link')

    <style>
        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .clear-background {
            background-color: transparent;
            border: none;
            padding: 5px;
            margin: 0;
        }
    </style>

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            {{-- Header --}}
            @include('layouts.Store.Header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    {{-- SideBar --}}
                    @include('layouts.Store.Sidebar')

                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">



                                            <h5 class="m-b-10">New Order Table</h5>
                                            <p class="m-b-0">Welcome to Delivery Dashboard</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('store.dashboard') }}">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">



                                    <div class="card">
                                        <div class="card-header">

                                            {{-- message Section --}}

                                            @if (session('success_message'))
                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    {{ session('success_message') }}
                                                </div>
                                            @endif

                                            @if (session('error_message'))
                                                <div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    {{ session('error_message') }}
                                                </div>
                                            @endif
                                            {{-- end  message Section --}}

                                            <h5>New Order Table</h5>

                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    {{-- <li><i class="fa fa-trash close-card"></i></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Order Status</th>
                                                            <th>Order Note</th>
                                                            <th>User Name</th>
                                                            <th>User Phone</th>
                                                            <th>User Location</th>
                                                            <th>Order Details</th>
                                                            <th>Order Date</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($orders as $order)
                                                            <tr>
                                                                <th scope="row">{{ $order->id }}</th>
                                                                <td>{{ $order->order_status }}</td>
                                                                <td>{{ $order->order_note }}</td>
                                                                <td>{{ $order->user->name }}</td>
                                                                <td>{{ $order->user->phone }}</td>
                                                                <td>
                                                                    @foreach ($orderLocationDetails[$order->id] as $location_detail)
                                                                        <div>{{ $location_detail->name }}</div>
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach ($order->orderDetails as $orderDetail)
                                                                        <div>
                                                                            <div>Product Name:
                                                                                {{ $orderDetail->productOrderDetails->name }}
                                                                            </div>
                                                                            <div>Quantity: {{ $orderDetail->quantity }}
                                                                            </div>
                                                                            <div>Note: {{ $orderDetail->product_note }}
                                                                            </div>
                                                                            <div>Price:
                                                                                {{ $orderDetail->product_price }}</div>
                                                                        </div>
                                                                        <hr>
                                                                    @endforeach
                                                                </td>
                                                                <td>{{ $order->created_at }}</td>

                                                                <td>
                                                    
                                                                    @if ($order->order_status == 'pending store accept')
                                                                        <div class="button-group">
                                                                            <form method="POST"
                                                                                action="{{ route('store.order.new.order.accept', $order->id) }}">
                                                                                @csrf
                                                                                <button type="submit"
                                                                                    class="btn btn-success rounded"
                                                                                    style="margin-right: 10px">Accept</button>
                                                                            </form>

                                                                            <form action="{{route('store.order.new.order.refusal' , $order->id)}}" method="POST">
                                                                                @csrf
                                                                                <button type="button" class="btn btn-danger rounded refusal-button" data-order-id="{{ $order->id }}">Refusal</button>
                                                                                <button type="submit" class="btn btn-primary rounded accept-button" style="display: none;" data-order-id="{{ $order->id }}">Accept Refusal Reason</button>
                                                                                <br>
                                                                                <div class="refusal-reason" style="display: none;" data-order-id="{{ $order->id }}">
                                                                                    <textarea name="refusal_reason" rows="3" cols="20"></textarea>
                                                                                </div>
                                                                            </form>
                                                                            
                                                                                          
                                                                             </div>
                                                                          
                             
                                                @elseif($order->order_status == 'pending delivery agent accept')
                                            <div class="alert alert-success">
                                                Pending Delivery Agent Accept .......
                                            </div>
                                            <br>

                                            {{-- <form method="POST"
                                            action="{{ route('store.order.new.order.aaccept.delivery', $order->id) }}">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-success rounded"
                                               >Accept Delivery Agent</button>
                                        </form> --}}
                                            @endif
                                         
                                            </td>

                                            </tr>
                                            @endforeach

                                            <script>
                                                var refusalButtons = document.querySelectorAll('.refusal-button');
                                                var acceptButtons = document.querySelectorAll('.accept-button');
                                            
                                                refusalButtons.forEach(function (button) {
                                                    button.addEventListener('click', function () {
                                                        var orderId = button.getAttribute('data-order-id');
                                                        var refusalReasonDiv = document.querySelector('.refusal-reason[data-order-id="' + orderId + '"]');
                                                        var acceptButton = document.querySelector('.accept-button[data-order-id="' + orderId + '"]');
                                            
                                                        refusalReasonDiv.style.display = 'block';
                                                        button.style.display = 'none';
                                                        acceptButton.style.display = 'block';
                                                    });
                                                });
                                            
                                                acceptButtons.forEach(function (button) {
                                                    button.addEventListener('click', function () {
                                                        var orderId = button.getAttribute('data-order-id');
                                                        var refusalReasonDiv = document.querySelector('.refusal-reason[data-order-id="' + orderId + '"]');
                                                        var refusalButton = document.querySelector('.refusal-button[data-order-id="' + orderId + '"]');
                                            
                                                        refusalReasonDiv.style.display = 'none';
                                                        button.style.display = 'none';
                                                        refusalButton.style.display = 'block';
                                                    });
                                                });
                                            </script>

                                            </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Page-body end -->
                        </div>
                        <div id="styleSelector"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>
