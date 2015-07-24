Pace.on 'done', ->
  object = $('section.grid .section-body ul li')
  overlay = $('.overlay')

  object.click ->
    modal = $(this).find('.modal')
    closer = $(this).find('.modal-close')

    modal.addClass "is-active"
    overlay.addClass "is-active"

    overlay.click ->
      modal.removeClass "is-active"
      overlay.removeClass "is-active"

    closer.click ->
      modal.removeClass "is-active"
      overlay.removeClass "is-active"
