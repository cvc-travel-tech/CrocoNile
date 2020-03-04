<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Verfiy account</title>
</head>
<body>
    <a href="{{ url('/') }}" class="bravo-logo" width="40%">
                    <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($setting['site[logo]'])->file_path) }}" alt="sandpad">


                </a>
<h1>Hi  {{$user->name}}</h1>
<h2>please verfiy your account from this link</h2>
<a href="{{url('user/email_verified_at',$user->verify_users->token)}}">verfiy Now</a>


</body>
</html>