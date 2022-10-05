<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coba-image</title>
</head>
<body>

    <div class="container">
        
        <div class="panel panel-primary">
       
          <div class="panel-heading">
            <h2>UPLOAD IMAGE</h2>
          </div>
      
          <div class="panel-body">
            
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            <img src="images/{{ Session::get('image') }}">
            @endif
           
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
       
                <div class="mb-3">
                    <label class="form-label" for="inputImage">Image:</label>
                    <input
                        type="file"
                        name="image"
                        id="inputImage"
                        class="form-control @error('image') is-invalid @enderror">
       
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            
            </form>
           
          </div>
        </div>
    </div>
    
</body>
</html>