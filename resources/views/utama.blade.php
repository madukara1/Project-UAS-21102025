<!DOCTYPE html>
<html lang="en">
<head>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">HOME</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

        
          <a class="nav-link active" aria-current="page" href="{{url('home')}}">KOMPONEN</a>
          
        </li>
        <a class="nav-link active" aria-current="page" href="{{url('code')}}">CODE</a>
    
        <li class="nav-item">

        
          
          </li>
      
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="text-bg-secondary p-3">



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
  
</head>
  
<body>
                <mb-9><center><h1>PROJECT UAS WEB PROGRAMING</h></center></mb-9>
    <h3> <center>MONITORING SUHU RUANGAN MENGGUNAKAN SENSOR DS 18B20</center></h3>
    <div class="container text-center"></div>
    <tr>
            <center><img src="img/sensor1.jpg" width="900px" ></center>
            

            </tr>
            <h3> <justify>Suhu merupakan salah satu besaran fisis dimana besaran fisis ini dapat kita ukur untuk mengetahui kondisi suhu yang ada dalam satu ruangan. Hasil monitoring ini nantinya akan sangat berguna sebagai salah satu parameter untuk melakukan efisiensi energi. Karena dengan kita mengetahui nilai dari suhu yang berada dalam ruangan maka kita juga dapat menentukan, berapa energio yang harus kita gunakan untuk membuat ruangan tersebut nyaman. Manajemen energi dewasa ini semakin menjadi perbincangan yang sangat hangat,mengingat semakin mahalnya harga energi dan kian terbatasnya sember energi. Suhu merupakan salah satu parameter yang digunakan dalam manajemen energi,penggunaan suhu yang tepat dan sesuai kebutuhan di dalam ruangan, akan dapat membuat terjadinya pemanfaatan energio secara tepat. Untuk itu diperlukan suatu sistem yang dapat memonitor berapa suhu yang ada didalam suatu ruangan. Sistem monitoring suhu ini terdiri dari sensor suhu DS 18S20,SMD RGB(3 color), mikrokontroller Arduino Uno, LCD liguid colour display) 16 X2 dan PC (personal Computer).</justify></h3>
    <div class="container text-justify"></div>

    <div class ="row">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/88y8ggw1yrpr2u8d18th02iceyad2cc267qn0cyqunvmiu5w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</body>

</html>
</div>