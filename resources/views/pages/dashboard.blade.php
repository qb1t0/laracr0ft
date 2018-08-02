@extends('menu')

@section('styles')

@stop

@section('header')
 DASHBOARD INFORMATION
@stop

@section('datacontent')

 <div class="row">
  <div class="col-md-12 panel-info">
   <div class="content-box-large">
    <div class="panel-heading">
     <div class="panel-title">WRITE SOMETHING</div>
    </div>
    <div class="panel-body">
     <form action="{{ route('post.create') }}" method="POST">
      @csrf
      <div class="form-group">
       <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
     </form>
    </div>
   </div>
  </div>
 </div>

 <div class="row">
     <div class="col-md-12 panel-info">
      <div class="content-box-large box-with-header">
       <div class="panel-heading">
        <div class="panel-title">An example of post header #1</div>

        <div class="panel-options">
         <a href="#" data-rel="edit"><i class="glyphicon glyphicon-pencil"></i></a>
         <a href="#" data-rel="delete"><i class="glyphicon glyphicon-trash"></i></a>
        </div>
      </div>

       <div class = "panel-body">
        Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
        <br /><br />
        <div class="info">
         Posted by me on 7 Jul 2018
        </div>
       </div>
     </div>

      <div class="content-box-large box-with-header">
       <div class="panel-heading">
        <div class="panel-title">An example of post header #1</div>

        <div class="panel-options">
         <a href="#" data-rel="edit"><i class="glyphicon glyphicon-pencil"></i></a>
         <a href="#" data-rel="delete"><i class="glyphicon glyphicon-trash"></i></a>
        </div>
       </div>

       <div class = "panel-body">
        Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
        <br /><br />
        <div class="info">
         Posted by me on 7 Jul 2018
        </div>
       </div>
      </div>

      <div class="content-box-large box-with-header">
       <div class="panel-heading">
        <div class="panel-title">An example of post header #1</div>

        <div class="panel-options">
         <a href="#" data-rel="edit"><i class="glyphicon glyphicon-pencil"></i></a>
         <a href="#" data-rel="delete"><i class="glyphicon glyphicon-trash"></i></a>
        </div>
       </div>

       <div class = "panel-body">
        Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
        <br /><br />
        <div class="info">
         Posted by me on 7 Jul 2018
        </div>
       </div>
      </div>

      <div class="content-box-large box-with-header">
       <div class="panel-heading">
        <div class="panel-title">An example of post header #1</div>

        <div class="panel-options">
         <a href="#" data-rel="edit"><i class="glyphicon glyphicon-pencil"></i></a>
         <a href="#" data-rel="delete"><i class="glyphicon glyphicon-trash"></i></a>
        </div>
       </div>

       <div class = "panel-body">
        Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
        <br /><br />
        <div class="info">
         Posted by me on 7 Jul 2018
        </div>
       </div>
      </div>

      <div class="content-box-large box-with-header">
       <div class="panel-heading">
        <div class="panel-title">An example of post header #1</div>

        <div class="panel-options">
         <a href="#" data-rel="edit"><i class="glyphicon glyphicon-pencil"></i></a>
         <a href="#" data-rel="delete"><i class="glyphicon glyphicon-trash"></i></a>
        </div>
       </div>

       <div class = "panel-body">
        Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
        <br /><br />
        <div class="info">
         Posted by me on 7 Jul 2018
        </div>
       </div>
      </div>

      <div class="content-box-large box-with-header">
       <div class="panel-heading">
        <div class="panel-title">An example of post header #1</div>

        <div class="panel-options">
         <a href="#" data-rel="edit"><i class="glyphicon glyphicon-pencil"></i></a>
         <a href="#" data-rel="delete"><i class="glyphicon glyphicon-trash"></i></a>
        </div>
       </div>

       <div class = "panel-body">
        Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
        <br /><br />
        <div class="info">
         Posted by me on 7 Jul 2018
        </div>
       </div>
      </div>

      <div class="content-box-large box-with-header">
       <div class="panel-heading">
        <div class="panel-title">An example of post header #1</div>

        <div class="panel-options">
         <a href="#" data-rel="edit"><i class="glyphicon glyphicon-pencil"></i></a>
         <a href="#" data-rel="delete"><i class="glyphicon glyphicon-trash"></i></a>
        </div>
       </div>

       <div class = "panel-body">
        Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
        <br /><br />
        <div class="info">
         Posted by me on 7 Jul 2018
        </div>
       </div>
      </div>

     </div>
    </div>
@stop