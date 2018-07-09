$(document).ready(function () {

  var set = {
    burger: $('.btn-burger'),
    contentBurger: $('#content-burger')
  }

  var Class = {
    addburger: 'show-burger',
    removeburger: 'hidden-burger'
  }

  var attr = {
    contentBurger: 'active'
  }

  var state = {
    burger: true,
    contentBurger: set.contentBurger.attr(attr.contentBurger)
  }

  function HandleBurger() {
    if (state.burger == true && state.contentBurger == 'false' ) {
      set.contentBurger.addClass(Class.addburger)
      set.contentBurger.removeClass(Class.removeburger)
      state.burger = false
      set.contentBurger.attr(attr.contentBurger,'true')
      state.contentBurger = set.contentBurger.attr(attr.contentBurger)
    } else if (state.burger == false && state.contentBurger == 'true') {
      set.contentBurger.addClass(Class.removeburger)
      set.contentBurger.removeClass(Class.addburger)
      state.burger = true
      set.contentBurger.attr(attr.contentBurger, 'false')
      state.contentBurger = set.contentBurger.attr(attr.contentBurger)
    }
  }

  set.burger.click(HandleBurger)

})