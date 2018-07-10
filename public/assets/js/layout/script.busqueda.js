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
        // set.content.html(val)
        set.loading.addClass(Class.loading)
      },
      complete:function () {
        set.loading.removeClass(Class.loading)
      },
      success: function (response) {
          console.log(response)
          // console.log(response['pregunta'].length)
          // for (let i = 0; i < response.length; i++) {

          // }
          // set.content.html(response['busqueda']['pregunta'].titulo_pre)
      },
      error:function (error) {
        alert(error.responseText)
      }
    })
  })
})