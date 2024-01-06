
<section class="intro">
    <div class="bg-image h-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.25);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card bg-dark shadow-2-strong">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-dark table-borderless mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mật khẩu</th>
                                            <th scope="col">Giới Tính</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Kiểu</th>
                                        </tr>
                                        </thead>
                                        @foreach($client as $clients)
                                        <tbody>
                                        <tr>
                                            <th scope="row">{{$clients['name']}}</th>
                                            <td>{{$clients['email']}}</td>
                                            <td>{{$clients['password']}}</td>
                                            <td>{{$clients['gender']}}</td>
                                            <td>{{$clients['tel']}}</td>
                                            <td>{{$clients['roles']}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



