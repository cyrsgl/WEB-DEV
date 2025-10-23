@extends('layout.main')
@section('content')


    <!-- HEADER -->
    <header class="bg-primary text-white text-center py-3 mb-4">
        <h1>Student Registration Form</h1>
    </header>

    <!-- MAIN CONTENT -->
    <main class="container">
        <div class="card shadow-sm p-4">
            <form method="POST" action="{{ route('student.submit') }}">
                @csrf
                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                </div>

                <!-- First Name -->
                <div class="mb-3">
                    <label for="first_name" class="form-label fw-semibold">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter your first name">
                </div>

                <!-- Last Name -->
                <div class="mb-3">
                    <label for="last_name" class="form-label fw-semibold">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter your last name">
                </div>

                <!-- Middle Name -->
                <div class="mb-3">
                    <label for="middle_name" class="form-label fw-semibold">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" placeholder="Enter your middle name">
                </div>

                <!-- Birthday -->
                <div class="mb-3">
                    <label for="birthday" class="form-label fw-semibold">Birthday</label>
                    <input type="date" class="form-control" name="birthday">
                </div>

                <!-- Save Button -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-4">Save</button>
                </div>
            </form>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
       
    </footer>

</body>

</html>

@endSection