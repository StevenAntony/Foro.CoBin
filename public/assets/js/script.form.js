/**
 * **
 * @Auth SCRIPT FORM - SELECT - CHECK - OPTION - Desing=>CodBin
 * **
 */
$(document).ready(function () {
  /**
   * Script form-select
   */
  var set = {
    btn: $('.btn-desing-s'),
    sel: $('.select-desing'),
    list: $('.list-select'),
    item: $('.list-select .item-list')
  }
  var obj = {

  }
  var attr = {
    btn1: 'aria-selected',
    btn2: 'aria-roledescription',
    list1: 'aria-expanded',
    list2: 'rol',
    item: 'aria-selected'
  }
  function heleperSelect() {
    set.btn.each(function (index,element) {
      var a = $(this)
      a.click(function (e) {
        e.stopPropagation();
        var selBtn = set.btn.eq(index).attr(attr.btn1),
          descBtn = set.btn.eq(index).attr(attr.btn2),
          expList = set.list.eq(index).attr(attr.list1),
          rolList = set.list.eq(index).attr(attr.list2)
        // if (rango == 'document') {
        //   if (selBtn == "true" && descBtn == 'select' && expList == "true" && rolList == 'select') {
        //     set.list.eq(index).hide()
        //     set.btn.eq(index).attr(attr.btn1, 'false')
        //     set.list.eq(index).attr(attr.list1, 'false')
        //   }
        // } else {
          if (selBtn == "false" && descBtn == 'select' && expList == "false" && rolList == 'select') {
            set.list.show()
            set.btn.eq(index).attr(attr.btn1, 'true')
            set.list.eq(index).attr(attr.list1, 'true')
          } else {
            set.list.hide()
            set.btn.eq(index).attr(attr.btn1, 'false')
            set.list.eq(index).attr(attr.list1, 'false')
          }
        // }
      })
    })

    $('html').click(function () {
      var selBtn = set.btn.attr(attr.btn1),
        descBtn = set.btn.attr(attr.btn2),
        expList = set.list.attr(attr.list1),
        rolList = set.list.attr(attr.list2)
      if (selBtn == "true" && descBtn == 'select' && expList == "true" && rolList == 'select') {
            set.list.hide()
            set.btn.attr(attr.btn1, 'false')
            set.list.attr(attr.list1, 'false')
          }
    })
  }
  function heleperOption() {
    set.btn.each(function (index,element) {
      var a = $(this)
      a.click(function (e) {
        set.item.each(function (index,element) {
          var e = $(this)
          e.click(function () {
            var text = set.item.eq(index).text()
            set.btn.html(text)
            set.list.hide()
            set.btn.attr(attr.btn1, 'false')
            set.list.attr(attr.list1, 'false')
            $('.select-desing option').eq(index).prop('selected', true)
            var val = $('.select-desing').find('option:selected').val()
            console.log(val)
          })
        })
      })
    })
  }

  /**
   * => Funcionamiento de los eventos para el plugin
   */
  heleperOption()
  heleperSelect()
  // set.btn.click(
  //   function (e) {
  //     e.stopPropagation();
  //     heleperSelect('normal')
  //   }
  // )
  // $('html').click(function () {
  //   heleperSelect('document')
  // })

  // set.item.click(heleperOption)
})