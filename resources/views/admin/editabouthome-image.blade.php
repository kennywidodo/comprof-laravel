@extends('layout.admin_layout')
@section('main_content')
@section('title','Edit About Us Image')
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
          <h3 class="box-title">Edit About Us Home Image</h3>
          <a href="{{url('/admin/about-home')}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{route('abouthome.image')}}" enctype="multipart/form-data">
            {{-- {{method_field('Patch')}}   --}}
            @csrf
          <input type="hidden" name="id" value="{{$abouthome->id}}">
            <div class="box-body">
              <div class="form-group">
                <label for="image_abouthome">Image upload (max 2mb)</label>
                @if($errors->has('abouthome_image'))
                  <br><span class="text-danger">{{$errors->first('abouthome_image')}}</span> <br>
                @endif
              <input type="file" id="image_abouthome" name="abouthome_image" onchange="previewFile(this)">
              <img id="previewIMG" alt="preview image" src="{{asset('images')}}/{{$abouthome->abouthome_image}}" style="max-width: 200px;margin-top:20px"/>
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