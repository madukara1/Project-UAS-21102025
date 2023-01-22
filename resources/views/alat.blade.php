@extends('layouts.default')

@section('content')

    <section>
    <div class="conttainer mt-5">
        <div class="row">
            <div class="col-lg-8">
                <center><h1>KOMPONEN YANG DIGUNAKAN</h1></center>
                <a href="{{url('create')}}" class="btn btn-info"> +tambah project</a>
            </div>
          <div class ="col-lg-55">
          <table class="table table-bordered border-primary">
            <tr>
                    <th>komponens</th>
                    <th>Gambar</th>
                   

                    <th>action</th>
            </tr>
            @foreach ($data as $tblkomponent)
            <tr>
                    <td>{{$tblkomponent->komponens}}</td>
                
                    <td><img src="img/{{$tblkomponent->fGAMBAR}}" alt="" width="85px" ></td>
                   
                    <td>
                        <a href="{{url('/show/'.$tblkomponent->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy/'.$tblkomponent->id)}}" class="btn btn-danger">Delete</a>
                        
                    </td>
                  
            </tr>

            @endforeach
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    
    </section>
@endsection