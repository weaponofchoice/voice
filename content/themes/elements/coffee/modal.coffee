Pace.on 'done', ->
  object = $('section.grid .section-body ul li .trigger-modal')
  closer = $('.modal-close i')
  overlay = $('.overlay')

  object.click ->
    modal = $(this).parent().find('.modal')

    modal.addClass "is-active"
    overlay.addClass "is-active"

    overlay.click ->
      modal.removeClass "is-active"
      overlay.removeClass "is-active"

    closer.click ->
      console.log "clicked"
      modal.removeClass "is-active"
      overlay.removeClass "is-active"
