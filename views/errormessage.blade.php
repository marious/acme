  @if (isset($_SESSION['msg']))
         <div class="alert alert-danger alert-dismissible" role="alert">
          <ul>
            @foreach ($_SESSION['msg'] as $error)
            <li>{!! $error !!}</li>
            @endforeach
          </ul>
          </div>
  @endif