@extends('layout.admin_layout')
@section('main_content')
@section('title','Edit Carousel Image')
@section('body','hold-transition skin-blue sidebar-mini')
<div class="wrapper">
    <x-admin_header />
    <x-admin_sidebar />

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
<!-- Main content -->
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
          <h3 class="box-title">Edit Carousel Image</h3>
          <a href="{{url('/admin/carousel')}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{route('carousel.image')}}" enctype="multipart/form-data">
            {{-- {{method_field('Patch')}}   --}}
            @csrf
          <input type="hidden" name="id" value="{{$carousel->id}}">
            <div class="box-body">
              <div class="form-group">
                <label for="url_carousel">Carousel Image</label>
                @if($errors->has('image'))
                <br><span class="text-danger">{{$errors->first('image')}}</span> <br>
              @endif
              <input type="file" id="url_carousel" name="image" onchange="previewFile(this)">
              <img id="previewIMG" alt="preview image" src="{{asset('images')}}/{{$carousel->image}}" style="max-width: 200px;margin-top:20px"/>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <x-admin_footer />
</div>
<!-- ./wrapper -->

@endsection