@extends('layout.main')
@section('content')

    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* IMAGE STYLING */
        .image-box img {
            width: 100%;
            height: 200px; /* control image height */
            object-fit: cover; /* ensures images fill box neatly */
            border-radius: 10px;
            border: 1px solid #ddd;
            transition: transform 0.3s ease;
        }

        .image-box img:hover {
            transform: scale(1.03);
        }

        .pricing-section {
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        footer {
            background-color: #ffffff;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container-fluid mt-5">
        <div class="row">
            <!-- LEFT SIDE (Login Form) -->
            <div class="col-md-3 offset-md-1">
                <div class="login-box">
                    <h5 class="mb-3 text-center">Login</h5>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email:</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Password:</label>
                            <input type="password" id="password" class="form-control" placeholder="Enter password">
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="#" class="text-decoration-none small">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- RIGHT SIDE (Pricing Section) -->
            <div class="col-md-7">
                <div class="pricing-section">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">Pricing</h2>
                        <p class="text-muted">
                            Lorem ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>

                    <!-- IMAGE GRID -->
                    <div class="row g-3">
                        <div class="col-md-4 image-box">
                            <img src="{{ asset('images/1.jpg') }}" alt="Image 1">
                        </div>
                        <div class="col-md-4 image-box">
                            <img src="{{ asset('images/2.jpg') }}" alt="Image 2">
                        </div>
                        <div class="col-md-4 image-box">
                            <img src="{{ asset('images/3.png') }}" alt="Image 3">
                        </div>
                        <div class="col-md-4 image-box">
                            <img src="{{ asset('images/4.jpg') }}" alt="Image 4">
                        </div>
                        <div class="col-md-4 image-box">
                            <img src="{{ asset('images/5.png') }}" alt="Image 5">
                        </div>
                        <div class="col-md-4 image-box">
                            <img src="{{ asset('images/6.png') }}" alt="Image 6">
                        </div>
                    </div>

                    <!-- COMPARE PLANS TABLE -->
                    <div class="mt-5">
                        <h5 class="text-center mb-3 fw-bold">Compare Plans</h5>
                        <table class="table table-bordered text-center align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Plan</th>
                                    <th>Free</th>
                                    <th>Pro</th>
                                    <th>Enterprise</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Public</td>
                                    <td>✓</td>
                                    <td>✓</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <td>Private</td>
                                    <td></td>
                                    <td>✓</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <td>Permissions</td>
                                    <td></td>
                                    <td></td>
                                    <td>✓</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@ENDSection