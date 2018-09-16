$(document).ready(function () {

  var set = {
    burger: $('.menu-burger'),
    contentBurger: $('#content-burger'),
    iconburger: $('.icon-burger'),
    downRotate: $('.ti-angle-down'),
    optionMain: $('.option-item'),
    subOptions: $('.sub-options')
  }

  var Class = {
    addburger: 'show-burger',
    removeburger: 'hidden-burger',
    showiconburger: 'show-icon-burger',
    rotateDown: 'rotate-icon-down'
  }

  var attr = {
    contentBurger: 'active',
    optionMain: 'state'
  }

  var state = {
    burger: true,
    contentBurger: set.contentBurger.attr(attr.contentBurger),
  }

  function HandleBurger() {
    if (state.burger == true && state.contentBurger == 'false' ) {
      // console.log(set.iconburger.length);
      set.iconburger.eq(0).removeClass(Class.showiconburger)
      set.iconburger.eq(1).addClass(Class.showiconburger)
      set.contentBurger.addClass(Class.addburger)
      set.contentBurger.removeClass(Class.removeburger)
      $("body").css({
        overflow: "hidden"
      })
      state.burger = false
      set.contentBurger.attr(attr.contentBurger,'true')
      state.contentBurger = set.contentBurger.attr(attr.contentBurger)
    } else if (state.burger == false && state.contentBurger == 'true') {
      set.contentBurger.removeClass(Class.addburger)
      set.iconburger.eq(0).addClass(Class.showiconburger)
      set.iconburger.eq(1).removeClass(Class.showiconburger)
      $("body").css({
        overflow: "auto"
      })
      state.burger = true
      set.contentBurger.attr(attr.contentBurger, 'false')
      state.contentBurger = set.contentBurger.attr(attr.contentBurger)
    }
  }

  function HandleDown() {
    set.downRotate.each(function (index,element) {
      var e = $(this)
      e.click(function () {
        if (set.optionMain.eq(index).attr(attr.optionMain) == 'hidden') {
          set.downRotate.eq(index).addClass(Class.rotateDown)
          set.optionMain.eq(index).attr(attr.optionMain,'show')
          set.subOptions.eq(index).css({display:'block'})

        } else if (set.optionMain.eq(index).attr(attr.optionMain) == 'show'){
          set.downRotate.eq(index).removeClass(Class.rotateDown)
          set.optionMain.eq(index).attr(attr.optionMain, 'hidden')
          set.subOptions.eq(index).css({ display: 'none' })
        }
      })
    })
  }

  set.burger.click(HandleBurger)
  HandleDown()
  // set.downRotate.click(HandleDown)
})
