<x-app>
    @section('title', 'Student Login')

    <div class="container my-4">
        <div class="login-container">
            <h2 class="login-header text-white">Student Login</h2>
            <p class="login-subheader text-dark">সঠিক তথ্য দিয়ে লগইন করুন</p>

            <form method="POST" action="" class="login-form">
                @csrf

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="text-white">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Email Address" required>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="text-white">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary w-100">Login</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .login-container {
            background: #37485a;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(8, 59, 7, 0.1);
            padding: 30px;
            width: 400px;
            margin: 0 auto;
            color: #ffffff;
        }

        .login-header {
            text-align: center;
            color: #0e3802;
        }

        .login-subheader {
            text-align: center;
            margin-bottom: 30px;
            color: #6c757d;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1rem;
            color: #0e3802;
            margin-bottom: 5px;
        }

        .form-group input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            width: 100%;
        }

        .form-group input[type="checkbox"] {
            width: auto;
            margin-right: 5px;
        }

        .btn-submit {
            background: #0e3802;
            color: white;
            padding: 12px;
            font-size: 1.1rem;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }

        .btn-submit:hover {
            background: #085f02;
        }

        .error-message {
            color: red;
            font-size: 0.875rem;
        }

        .form-group a {
            color: #007bff;
            text-decoration: none;
        }

        .form-group a:hover {
            text-decoration: underline;
        }
    </style>
</x-app>
