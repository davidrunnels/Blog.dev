@extends('layouts.master')

@section('title')
	- Resume
@stop


@section('content')

  <body>

  <!-- begin container -->
<div class="container">
  <div class="row clearfix">
    <div class="col-md-4 column">
      <img alt="140x140" src="/img/server.jpg" class="img-rounded" />
        <h3>
        Server-side Technologies
      </h3>
      <ul>
        <li>
          PHP
        </li>
        <li>
          MySQL
        </li>
        <li>
          Apache
        </li>
        <li>
          Linux
        </li>
      </ul>
    </div>
    <div class="col-md-4 column">
      <img alt="140x140" src="/img/client.jpg" class="img-rounded" />
      <h3>
        Client-side Technologies
      </h3>
      <ul>
        <li>
          HTML
        </li>
        <li>
          CSS
        </li>
        <li>
          JavaScript
        </li>
        <li>
          jQuery
        </li>
      </ul>
    </div>
    <div class="col-md-4 column">
      <img alt="140x140" src="/img/design.jpg" class="img-rounded" />
      <h3>
        Design
      </h3>
      <ul>
        <li>
          Adobe Photoshop
        </li>
        <li>
          Adobe Illustrator
        </li>
      </ul>
    </div>
  </div>
</div> <!-- end of container -->
@stop


    </body>
    </html>

