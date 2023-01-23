<x-app-layout title="Register">
    <div class="d-flex justify-content-center align-items-center">
        <div class="my-5">
            <div class="fw-bold d-flex justify-content-center bg-light align-items-center" style="height:60px;">
                Register
            </div>
            <div class="bg-white p-5">
                <form action="{{ route('register.store') }}" method="POST" style="width:400px;">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-normal">Name</label>
                        <input type="text" id="name" class="form-control @error('name')is-invalid @enderror" placeholder="Enter Your Name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="mt-2 text-danger"><span class="fw-medium"></span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-normal">Email address</label>
                        <input type="email" id="email" class="form-control @error('email')is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="mt-2 text-danger"><span class="fw-medium"></span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-normal">Password</label>
                        <input type="password" id="password" class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Enter Your Password" value="{{ old('password') }}" required>
                        @error('password')
                            <p class="mt-2 text-danger"><span class="fw-medium"></span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label fw-normal">Confirm Password</label>
                        <input type="password" id="confirm-password" class="form-control @error('confirm-password')is-invalid @enderror" name="confirm-password" placeholder="Re-type Your Password" value="{{ old('confirm-password') }}"required>
                        @error('confirm-password')
                            <p class="mt-2 text-danger"><span class="fw-medium"></span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-secondary" style="width:160px;">Register</button>
                    </div>
                </form>
                <div class="mt-3">
                    Have an account? <a href="{{ route('login.index') }}"><u>Login Here</u></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
