$(document).ready(function () {
  var set = {
    themeMoreBtn: $('.more-handle'),
    listOptionMore: $('.option-more')
  }
  var attr = {
    themeMoreBtn: 'state'
  }
  var stateAll = {
    listOptionMore: false
  }
  function HandleMoreThemeBtn() {
    set.themeMoreBtn.each(function (index,element) {
      var e = $(this)
      e.click(function () {
        var state = set.themeMoreBtn.eq(index).attr(attr.themeMoreBtn)
        if (state = 'desactive' && stateAll.listOptionMore == false) {
          set.listOptionMore.eq(index).css({transform: 'scale(1)'})
          set.themeMoreBtn.eq(index).attr(attr.themeMoreBtn,'active')
          stateAll.listOptionMore = true
        }else if(state = 'active' && stateAll.listOptionMore == true){
          set.listOptionMore.eq(index).css({transform: 'scale(0)'})
          set.themeMoreBtn.eq(index).attr(attr.themeMoreBtn, 'desactive')
          stateAll.listOptionMore = false

        }
      })
    })
  }
  HandleMoreThemeBtn()


      $('.handle-red').click(function () {
        var s = $('.handle-red').attr('state')
        if (s=='active') {
          $('.img-handle-red').css({
            transition: "0.3s",
            transform: 'rotatey(180deg)',
          })
          $('.handle-red').css({
            transition: "0.3s",
            transform: "translateX(0px)"
          })
          $('.redes-social-flot').css({
            transition: "0.5s",
            transform: "translateX(0px)"
          })
          $('.handle-red').attr('state','desactive')
        }else if(s == 'desactive'){
          $('.img-handle-red').css({
            transition: "0.3s",
            transform: 'rotatey(0deg)',
          })
          $('.handle-red').css({
            transition: "0.3s",
            transform: "translateX(-40px)"
          })
          $('.redes-social-flot').css({
            transition: "0.3s",
            transform: "translateX(-50px)"
          })
          $('.handle-red').attr('state','active')
        }

      })
});