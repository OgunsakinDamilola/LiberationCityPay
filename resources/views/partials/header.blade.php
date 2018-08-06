<nav class="navbar navbar-light bg-light" style="border: 1px solid #dedbda;">
    <a class="navbar-brand" href="https://www.liberationcity.org/"><img src="/images/liberation.png" style="width:50%; " class="d-inline-block align-top" alt=""></a>

    <ul class="navbar-nav">

        <div class="form-inline my-2 my-lg-0">

           @if(auth()->guest())
            <li class="nav-item">

                <a href="/" class="btn btn-primary btn-outline-success mr-sm-2" style="
                text-decoration: none;
            color: #808080; border: 1px solid #c0c0c0; background-color: #fff;">Home <i color="#808080"
                                                                                        class="icon-home"></i></a>

            </li>

            <li class="nav-item">

                <a href="/login" class="btn btn-primary btn-outline-success mr-sm-2"  style=" text-decoration: none;
            color: #808080; border: 1px solid #c0c0c0; background-color: #fff;">Login <i color="#808080"
                                                                                         class="icon-user"></i></a>

            </li>
              @elseif(auth()->user())

               @role('admin')
                <li class="nav-item">
                    <a href="/members" class="btn btn-primary btn-outline-success mr-sm-2"  style=" text-decoration: none;
            color: #808080; border: 1px solid #c0c0c0; background-color: #fff;">Members <i color="#808080"
                                                                                                    class="icon-user"></i></a>
                </li>
               @rendrole

                <li class="nav-item">
                    <a href="/logs" class="btn btn-primary btn-outline-success mr-sm-2"  style=" text-decoration: none;
            color: #808080; border: 1px solid #c0c0c0; background-color: #fff;">Transaction Logs <i color="#808080"
                                                                                         class="icon-user"></i></a>
                </li>
            @endif
        </div>

    </ul>
</nav>
