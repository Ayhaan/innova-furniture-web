<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Innova</title>

    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.css') }}">

    <link rel="stylesheet" href={{ asset('vendors-admin/iconly/bold.css') }}>
    
    {{-- CSS croper image --}}
    <link rel="stylesheet" href={{ asset('css/croper/ijaboCropTool.min.css') }}>

    <link rel="stylesheet" href={{ asset('vendors-admin/perfect-scrollbar/perfect-scrollbar.css') }}>
    <link rel="stylesheet" href={{ asset('vendors-admin/bootstrap-icons/bootstrap-icons.css') }}>
    <link rel="stylesheet" href={{ asset('css/admin/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/back.css') }}>
    {{-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> --}}


</head>

<body>
    <main id="app">
        @include('partials.nav')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                @yield('title-page')
            </div>
            <div class="page-content">
                @yield('content')
            </div>

        </div>
    </main>

    {{-- JS croper image --}}
    <script src={{ asset('js/croper/jquery-3.5.1.min.js') }}></script>
    <script src={{ asset('js/croper/ijaboCropTool.min.js') }}></script>

    <script src={{ asset('vendors-admin/perfect-scrollbar/perfect-scrollbar.min.js') }}></script>
    <script src={{ asset('js/admin/bootstrap.bundle.min.js') }}></script>
    {{-- <script src={{ asset("vendors-admin/apexcharts/apexcharts.js") }}></script> --}}
    <script src={{ asset('js/admin/pages/dashboard.js') }}></script>
    <script src={{ asset('js/admin/main.js') }}></script>
    
    <script>
        // let select = document.querySelector("#ratio-cropper")
        // let ratio = 16/9;
        // // select.addEventListener("change", function() {
        // // });



        $('#image-crop').ijaboCropTool({
           preview : '.image-previewer',
           setRatio: 16/9,
        //    allowedExtensions: ['jpg', 'jpeg','png'],
        //    buttonsText:['CROP','QUIT'],
        //    buttonsColor:['#30bf7d','#ee5155', -15],
           processUrl:'{{ route("crop.store") }}',
           withCSRF:['_token','{{ csrf_token() }}'],
           onSuccess:function(message, element, status){
            //   alert(message);
              getallimage()
              console.log(ratio);
           },
           onError:function(message, element, status){
             alert(message);
           }
        });
    </script>
    <script>
        function getallimage() {
            // let tab = []; 
            $.get("/img-all", function(data){
                if (data.length > 0) {
                    let div = document.querySelector('#div-all-img')
                    div.innerHTML = ""
                    // console.log(data);
                    const {img1, img2, img3, img4, img5} = data[0];
                    let myImg = [img1, img2, img3, img4, img5]
                    // console.log(myImg);
                    myImg.forEach((el,i) => {
                        console.log(el);
                        if (el != null) {
                            //création card structure + btn delete
                            let col = document.createElement('div')
                            col.className = 'col-4 my-4'
                            let block = document.createElement('div')
                            block.classList.add('block-image')
                            let block_img = document.createElement('div')
                            block_img.classList.add('block-img')

                            let overlay = document.createElement('div')
                            overlay.classList.add('block-overlay')
                            let btn_add_cart = document.createElement('div')
                            btn_add_cart.classList.add('block-btn-addcart')
                            let btn = document.createElement('a')
                            btn.setAttribute('href', `/remove-img/${i}`)
                           
                            let icon_trash = document.createElement('i')
                            icon_trash.className = "bi bi-trash-fill"

                            //création image
                            let img = document.createElement('img')
                            img.setAttribute('src', `{{ asset('img/productUpload/${el}') }}`) 

                            //logique append de chaque element
                            btn.append(icon_trash)
                            btn_add_cart.append(btn)
                            overlay.append(btn_add_cart)
                            block_img.append(img)
                            block_img.append(overlay)
                            block.append(block_img)
                            col.append(block)
                            div.append(col)

                            
                        }
                    });
                    
                }
                // console.log(data);
            });       
        }
        window.onload = getallimage();
    </script>
</body>

</html>
