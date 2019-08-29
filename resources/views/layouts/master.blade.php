<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-table.css')}}">

  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Sripuja
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/selectize.default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist-plugin-tooltip.css') }}">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style type="text/css">
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="black" data-image="{{asset('/img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
          <a href="#" class="simple-text logo-mini">
            SP
          </a>
          <a href="@if(!Auth::check()) {{route('login')}} @else {{route('home')}} @endif " class="simple-text logo-normal">
            Sripuja
          </a>
      </div>
      <div class="sidebar-wrapper">
        @if(Auth::check())
        <div class="user">
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseProfile" class="username">
                    <span>
                        {!! Auth::user()->nama !!}
                    </span>
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseProfile">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endif

        <ul class="nav">
        @if(Auth::check())
          <li class="nav-item" id="dashboard">
            <a class="nav-link" href="{{route('home')}}">
              <i class="material-icons">dashboard</i>
              <p>Halaman Utama</p>
            </a>
          </li>

          <li class="nav-item" id="nav_barang">
            <a class="nav-link" href="{!! route('barang.index') !!}">
              <i class="material-icons">card_travel</i>
              <p>
                Master Barang
              </p>
            </a>
          </li>

          <li class="nav-item" id="nav_relation">
            <a class="nav-link" data-toggle="collapse" href="#side_bar_relation"">
              <i class="material-icons">person</i>
              <p>
                Relasi
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="side_bar_relation">
              <ul class="nav">
                <li class="nav-item " id="nav_supplier">
                  <a class="nav-link" href="{!! route('supplier.index') !!}">
                    <i class="material-icons">list</i>
                    <span class="sidebar-normal"> Pemasok </span>
                  </a>
                </li>
              </ul>
              <ul class="nav">
                <li class="nav-item " id="nav_customer">
                  <a class="nav-link" href="{!! route('customer.index') !!}">
                    <i class="material-icons">list</i>
                    <span class="sidebar-normal"> Pelanggan </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item" id="nav_transaksi">
            <a class="nav-link" data-toggle="collapse" href="#side_bar_transaksi" id="nav_transaksi_side">
              <i class="material-icons">store</i>
              <p>
                Transaksi
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="side_bar_transaksi">
              <ul class="nav">
                <li class="nav-item " id="nav_penjualan">
                  <a class="nav-link" href="{!! route('penjualan.index') !!}">
                    <i class="material-icons">shopping_cart</i>
                    <span class="sidebar-normal"> Penjualan </span>
                  </a>
                </li>
              </ul>
              <ul class="nav">
                <li class="nav-item " id="nav_pembelian">
                  <a class="nav-link" href="{!! route('pembelian.index') !!}">
                    <i class="material-icons">shopping_basket</i>
                    <span class="sidebar-normal"> Pembelian </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item" id="nav_report">
            <a class="nav-link" data-toggle="collapse" href="#side_bar_report" id="nav_report_side">
              <i class="material-icons">trending_up</i>
              <p>
                Laporan
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="side_bar_report">
              <ul class="nav">
                <li class="nav-item " id="nav_report_1">
                  <a class="nav-link" href="{!! route('report_penjualan_show') !!}">
                    <i class="material-icons">shopping_cart</i>
                    <span class="sidebar-normal"> Penjualan </span>
                  </a>
                </li>
              </ul>
              <ul class="nav">
                <li class="nav-item " id="nav_report_2">
                  <a class="nav-link" href="{!! route('report_pembelian_show') !!}">
                    <i class="material-icons">shopping_basket</i>
                    <span class="sidebar-normal"> Pembelian </span>
                  </a>
                </li>
              </ul>
              <ul class="nav">
                <li class="nav-item " id="nav_report_3">
                  <a class="nav-link" href="#" onclick="showStokAlert();">
                    <i class="material-icons">list</i>
                    <span class="sidebar-normal"> Stok </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item " id="logout">
            <form method="post" action="{!! route('logout') !!}" id="form_logout" hidden>
              {{ csrf_field() }}
            </form>
            <a class="nav-link" href="#" onclick="logout()">
              <i class="material-icons">exit_to_app</i>
              <p>Keluar</p>
            </a>
          </li>
        @endif
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                  <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                  <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                </button>
              </div>
              <a class="navbar-brand" href="#">
                @if(Auth::check())
                    Dashboard
                @else
                    Login
                @endif
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
          </div>
        </nav>
      <!-- End Navbar -->
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer">
        <div class="container-fluid">
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
    <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{asset('assets/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('assets/js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{asset('assets/js/plugins/arrive.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.min.js?v=2.0.2')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/selectize.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>

  <script src="{{asset('js/bootstrap-table.js')}}"></script>
  <!-- BOOTSTRAP TABLE --> 

  <script type="text/javascript">
    function showStokAlert() {
      var html = 
        '<select class="selectpicker col-md-12" data-size="6" title="Single Select" id="penjualan_select_bulan" name="penjualan_select_bulan" data-style="select-with-transition">' +
          '<option disabled selected>Pilih salah satu</option>'+
          '<option value="1">Januari</option>'+
          '<option value="2">Februari</option>'+
          '<option value="3">Maret</option>'+
          '<option value="4">April</option>'+
          '<option value="5">Mei</option>'+
          '<option value="6">Juni</option>'+
          '<option value="7">Juli</option>'+
          '<option value="8">Agustus</option>'+
          '<option value="9">September</option>'+
          '<option value="10">Oktober</option>'+
          '<option value="11">November</option>'+
          '<option value="12">Desember</option>'+
        '</select>';
      swal({
        title: 'Pilih Bulan',
        html:'<form method="GET" action="' + '{!! route("report_generate_stok") !!}' + '" target="blank_" id="formStokNav"><select class="form-control" name="bulan" required>' +
          '<option disabled selected>Pilih salah satu</option>'+
          '<option value="1">Januari</option>'+
          '<option value="2">Februari</option>'+
          '<option value="3">Maret</option>'+
          '<option value="4">April</option>'+
          '<option value="5">Mei</option>'+
          '<option value="6">Juni</option>'+
          '<option value="7">Juli</option>'+
          '<option value="8">Agustus</option>'+
          '<option value="9">September</option>'+
          '<option value="10">Oktober</option>'+
          '<option value="11">November</option>'+
          '<option value="12">Desember</option>'+
        '</select><input type="text" class="form-control" name="tahun" placeholder="Tahun" required></input></form>',
        confirmButtonText: "Cetak Laporan Stok"
      }).then((result) => {
        $("#formStokNav").submit();
        if (result.value === true) {
          location.reload();
          $("#formStokNav").submit();
        }
      });
    }

    function asdasd() {
      console.log("Check");
    }
    Number.prototype.format = function(n, x, s, c) {
        var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
            num = this.toFixed(Math.max(0, ~~n));

        return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
    };

    function number_format(e)
    {
      e.value = e.value.replace(/\D/g, "");

      var num = e.value.replace(/\./g, '');
      if(num == null || num == "")
        console.log('Is Null');
      else
        e.value = parseInt(num).format(0,3,'.', ',');
    }

    function logout()
    {
      $('#form_logout').submit();
    }
    function delete_confirmation(e, link)
    {
      e.preventDefault();
      swal({
        title: 'Apakah anda yakin?',
        text: "Anda tidak dapat mengembalikan data yang sudah dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus barangnya!'
      }).then((result) => {
        if (result) {
          delete_ajax(link);
        }
      });
  }

    function delete_ajax(link)
    {
      $.ajax({
        type:'DELETE',
        url: link,
        success:function(data){
          if (data == 1)
          {
              var table = $('#datatables').DataTable();
              table.ajax.reload();
              swal(
              'Terhapus!',
              'Data berhasil dihapus.',
              'success'
            );
          }
          else
            swal(
              'Oops...',
            'Data tersebut tidak dapat dihapus!',
            'error'
          );
      }
    });
  }
  
  </script>
  @if (\Session::has('status'))
  <script type="text/javascript">
      $(document).ready(function(){
        $('#modalWarning').modal('show');
      });
  </script>
  @endif

  <script type="text/javascript">
    Date.prototype.toDateInputValue = (function() {
      var local = new Date(this);
      local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
      return local.toJSON().slice(0,10);
  });

    $(document).ready(function(){
      $('.button_delete').click(function(){
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            swal(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        });
      });
      
      @if(\Session::has('status'))
      swal({
        @if (\Session::has('status') && explode('||', \Session::get('status'))[0] == "0")
          type: 'error',
        @else
          type: 'success',
        @endif
        title: '{!! explode("||", \Session::get("status"))[1] !!}',
        text: '{!! explode("||", \Session::get("status"))[2] !!}',
      });
      @endif
    });
  </script>
  <script type="text/javascript">
    function binarySearch(arr, target) {
      let left = 0;
      let right = arr.length - 1;
      while (left <= right) {
          const mid = left + Math.floor((right - left) / 2);
          if (arr[mid].id == target) {
              return mid;
          }
          if (arr[mid].id < target) {
              left = mid + 1;
          } else {
              right = mid - 1;
          }
      }
      return -1;
    }
  </script>
  @yield('scripts')
</body>
</html>