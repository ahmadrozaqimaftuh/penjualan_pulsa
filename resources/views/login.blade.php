<!DOCTYPE html>
<html>
<head>
    <title>Login Admin Counter</title>
</head>
<body style="margin:0; font-family:Arial, sans-serif; background:#f4f6f9;">

    <div style="
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    ">

        <div style="
            background:white;
            padding:40px;
            border-radius:15px;
            box-shadow:0 4px 12px rgba(0,0,0,0.15);
            width:350px;
        ">

            <h2 style="
                text-align:center;
                color:#007bff;
                margin-bottom:25px;
            ">
                Login Admin Counter
            </h2>

            @if(session('error'))
                <div style="
                    background:#f8d7da;
                    color:#721c24;
                    padding:10px;
                    border-radius:5px;
                    margin-bottom:15px;
                ">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="/login">
                @csrf

                <label>Email</label><br>
                <input
                    type="email"
                    name="email"
                    required
                    placeholder="Masukkan Email"
                    style="
                        width:100%;
                        padding:10px;
                        margin-top:5px;
                        margin-bottom:15px;
                        border:1px solid #ccc;
                        border-radius:5px;
                        box-sizing:border-box;
                    "
                >

                <label>Password</label><br>
                <input
                    type="password"
                    name="password"
                    required
                    placeholder="Masukkan Password"
                    style="
                        width:100%;
                        padding:10px;
                        margin-top:5px;
                        margin-bottom:20px;
                        border:1px solid #ccc;
                        border-radius:5px;
                        box-sizing:border-box;
                    "
                >

                <button
                    type="submit"
                    style="
                        width:100%;
                        padding:12px;
                        background:#007bff;
                        color:white;
                        border:none;
                        border-radius:5px;
                        font-size:16px;
                        cursor:pointer;
                    "
                >
                    Login
                </button>
            </form>

            <p style="
                text-align:center;
                color:#666;
                margin-top:15px;
                font-size:14px;
            ">
                Sistem Penjualan Pulsa
            </p>

        </div>

    </div>

</body>
</html>