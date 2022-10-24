@extends('base')

@section('content')


<style>
    p{
        text-align: center;
    }
    body{
        background-image:url('office.jpg');
        background-size: cover;
    }

    .mb-3{
        background: linear-gradient(
            rgba(0,0,0,0,7);
        )
    }

</style>

<br><br>
<body>
    <div class = "container">
        <div class="row mt-5 mb-2">
            <div class="col-md-4 offset-md-4">

                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    
                    <div class="card">
                        <div class="card-body bg-secondary">
                            <div class="class d-flex justify-content-center">
                                <img src="user.png"  class="rounded-circle" style="height: 100px">
                            </div>
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-select">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

@stop