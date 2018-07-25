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
        if (selBtn == "false" && descBtn == 'select' && expList == "false" && rolList == 'select') {
          set.list.eq(index).show()
          for (let i = 0; i < set.btn.length; i++) {
            var selBtn1 = set.btn.eq(i).attr(attr.btn1),
              descBtn1 = set.btn.eq(i).attr(attr.btn2),
              expList1 = set.list.eq(i).attr(attr.list1),
              rolList1 = set.list.eq(i).attr(attr.list2)
            if (selBtn1 == "true" && descBtn1 == 'select' && expList1 == "true" && rolList1 == 'select') {
              set.list.eq(i).hide()
              set.btn.eq(i).attr(attr.btn1, 'false')
              set.list.eq(i).attr(attr.list1, 'false')
            }
          }
          set.btn.eq(index).attr(attr.btn1, 'true')
          set.list.eq(index).attr(attr.list1, 'true')
        } else {
          set.list.eq(index).hide()
          set.btn.eq(index).attr(attr.btn1, 'false')
          set.list.eq(index).attr(attr.list1, 'false')
        }
      })
    })

    $('html').click(function () {
      for (let i = 0; i < set.btn.length; i++) {
        var selBtn = set.btn.eq(i).attr(attr.btn1),
          descBtn = set.btn.eq(i).attr(attr.btn2),
          expList = set.list.eq(i).attr(attr.list1),
          rolList = set.list.eq(i).attr(attr.list2)
        if (selBtn == "true" && descBtn == 'select' && expList == "true" && rolList == 'select') {
          set.list.eq(i).hide()
          set.btn.eq(i).attr(attr.btn1, 'false')
          set.list.eq(i).attr(attr.list1, 'false')
        }
      }
    })
  }
  function heleperOption() {
    set.item.unbind();
    var ban = 0
    set.btn.each(function (index1,element) {
      var a = $(this)
      a.click(function () {
        // console.log(index1);
        ban = 0
          set.item.each(function (index, element) {
            var e = $(this)
            e.click(function () {
              if (ban == 0) {
              var text = set.item.eq(index).text()
              set.btn.eq(index1).html(text)
              set.list.hide()
              set.btn.attr(attr.btn1, 'false')
              set.list.attr(attr.list1, 'false')
              $('.select-desing-s option').eq(index).prop('selected', true)
              // console.log()
              // var val = $('.select-desing-s').eq(index1).find('option:selected').val()
              // console.log(val)
                ban = 1
              }
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