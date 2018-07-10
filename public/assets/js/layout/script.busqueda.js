$(document).ready(function () {

  var set = {
    sumit: $('#sumit-search'),
    content: $('.content-busqueda'),
    input: $('#input-search'),
    loading: $('.animation')
  }

  var Class={
    loading: 'loading-search'
  }

  set.sumit.click(function () {
    var val = set.input.val()
    set.content.html(' ')
    $.ajax({
      type: "post",
      url: "/Foro.CoBin/BusquedaMaster",
      data: {
        input : val
      },
      dataType: "json",
      headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
      },
      beforeSend: function () {
        set.loading.addClass(Class.loading)
      },
      complete:function () {
        set.loading.removeClass(Class.loading)
      },
      success: function (response) {
        var length = Object.keys(response).length
        var html
        var ruta = 'assets/img/icons/svg/048-capas.svg';
        console.log(response)
        console.log(ruta);

        for (let i = 0; i < length - 2; i++) {

          // '<div class="d-flex col-12">
          //   < div class="option-search-item col-12" >
          //     <div class="title-search d-flex jc-spaceBetween"><img src="{{asset(" assets /img/icons/svg/048-capas.svg")}}" alt="" srcset="" width="35px" height="35px"><h1 class="small titulo-cuestion" style="">NO PUEDO CONECTAR</h1><small class="small date-cuestion text-muted-app">2018-08-09<br> 10:20:10</small></div>
          //     </div>
          //                               </div >'
          html = set.content.html() + '<div class="d-flex col-12"><div class="option-search-item col-12"><div class="title-search d-flex jc-spaceBetween"><img src="{{asset("'+ruta +'")}}" alt="" srcset="" width="35px" height="35px"><h1 class="small titulo-cuestion" style="">' + response[i]['pregunta'].titulo_pre + '</h1><small class="small date-cuestion text-muted-app">' + response[i]['pregunta'].fecha_pre + '</small></div>';
          set.content.html(html)
        }
// 036-material-de-oficina
      },
      error:function (error) {
        alert(error.responseText)
      }
    })
  })
})