$ ->
  target = $('main')
  objects = $('nav ul li a h3')

  waypoints = target.waypoint(((direction) ->
    objects.toggleClass "is-black"
  ), offset: 100)
