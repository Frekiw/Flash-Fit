<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scan Check In</title>
    <link rel="shortcut icon" href="{{ asset('admindashboard/assets/images/logo.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('admindashboard/assets/css/qrcode/style.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Orbitron:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script>

    function display_ct5() {
    var x = new Date()
    const yyyy = x.getFullYear();
    let mm = x.getMonth() + 1; // Months start at 0!
    let dd = x.getDate();

    if (dd < 10) dd = '0' + dd;
    if (mm < 10) mm = '0' + mm;
    var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
    
    var x1=dd + '-' + mm + '-' + yyyy;
    x1 = x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
    document.getElementById('ct5').innerHTML = x1;
    display_c5();
    }
    function display_c5(){
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct5()',refresh)
    }
    display_c5()
</script>
</head>

<body>
    @foreach ($location as $item)
    <div class="row p-0 m-0 bg-white">
        <div class="col-md-4 p-0 px-4 d-flex align-items-center justify-content-center">
            <div>
                <div>
                    <h2 class="">Check In</h2>
                    <small class="text-secondary">Scan QR-code untuk mencatat kehadiran Anda dengan mudah!</small>
                    
                    <div class="border rounded-3 my-3 d-flex justify-content-start align-items-center p-2" style="background: #8dff0a;">
                        <div class="bg-white rounded d-flex justify-content-center align-items-center" style="width: 40px; height:36px;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="w-100">
                            <small class="ms-3 fw-bold">{{ $item->name }}, {{ $item->city }}</small>
                        </div>
                    </div>
                    <div class="d-flex mt-5 align-items-center justify-content-center border rounded-3 border-dark p-2 my-2 apkk">
                        <i class="fab fa-google-play"></i>
                        <small class="mb-0 ms-2">Download aplikasi kami</small>
                    </div>
                </div>
                <div class="rounded-3" style="background-image:url('{{ asset('admindashboard/assets/images/jkk.png') }}');background-size:cover;">
                    <div class="overlay-trial position-relative h-100 p-3 rounded-3">
                        <div class="text-white p-2">
                            <h4 class="fw-bold">Free Trial</h4>
                            <button class="btn btn-outline-light">Go Now <i class="ms-2 fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 bg-white vh-100 position-relative p-4">
            <div class="d-flex align-items-center justify-content-center rounded-4 bg-danger w-100 h-100" style="background: rgb(2,0,36);
            background: linear-gradient(162deg, rgba(2,0,36,1) 0%, rgba(82,255,0,1) 100%);">
                <div>
                    <div class="bg-white p-3 rounded-4 text-center d-flex align-items-center justify-content-center" style="width:350px;height:350px;">
                        <?php
                            date_default_timezone_set("Asia/Jakarta");
                            $t=time();
                            $t2 = date("d-m-Y",$t);
                            
                            $dt   = new DateTime($t2);
                            $myqr = $dt->getTimestamp();
                        ?>
                        {!! QrCode::size(300)->generate(
                            $t.'?lcd='.$item->id_location
                        ) !!}
                    </div>
                    <div class="mt-3 d-flex align-items-center justify-content-center">
                        <h5 class="text-white mb-0">
                            <?php
                            date_default_timezone_set("Asia/Jakarta");
                            $t=time();
                            echo(date("d-m-Y",$t)).' ,';
                            ?>
                        </h5>
                        <h5 class="ms-1 mb-0 fw-bold" id="ct5">
                           
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- @foreach ($location as $item)
        {{ $item->name }}
    @endforeach --}}


    <script>
        setInterval(function() {
            location.reload();
        }, 3000); // 5000 ms = 5 detik
    </script>







<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>