$(document).ready(function () {

  var set = {
    sumit: $('#sumit-search'),
    content: $('#show-busqueda'),
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
        input : 'assa'
      },
      dataType: "json",
      headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
      },
      beforeSend: function () {
        // set.content.html(val)
        set.loading.addClass(Class.loading)
      },
      success: function (response) {
        // alert('as');
        // set.loading.removeClass(Class.loading)
        console.log(response)
      },
      // error:function (error) {
      //   alert(error.responseText)
      // }
    })
  })
})